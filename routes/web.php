<?php

use App\Http\Controllers\AppliedJobController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleTagController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Home\HomeArticleController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\HomeJobController;
use App\Http\Controllers\Home\HomeResumeController;
use App\Http\Controllers\JobApplicantController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Admin\Messages\ListConversationAndMessages;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/storage-link', function() {
    $output = [];
    \Artisan::call('storage:link', $output);
    dd($output);
});



Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'about')->name('about');
    Route::get('/contact-us', 'contact')->name('contact');

});

Route::controller(HomeResumeController::class)->group(function (){

    Route::get('/employer/browse-resume','index')->name('resume.browse');
    Route::get('/show-resume/{id}','show')->name('resume.show');
});

Route::get('articles',          [HomeArticleController::class,'index'])->name('home.articles');
Route::get('articles/{article}',  [HomeArticleController::class,'show'])->name('home.articles.show');



Route::controller(HomeJobController::class)->group(function () {

    Route::get('/jobs-list',    'jobList')->name('home.jobs');
    Route::get('/jobs-grid',    'jobListGrid')->name('home.jobs.grid');
    Route::get('/job-details/{job}',  'show')->name('home.jobs.detail');

});





Route::middleware(['auth','verified'])->group(function(){

    Route::middleware('user.role')->group(function(){

        Route::get('/dashboard', function () {
            return to_route('admin.dashboard');
        })->name('dashboard');
    });


    //Route::view('messages','messages')->name('messages');
//    Route::get('send-message/{id}',[MessageController::class,'store'])->name('send-message');
//    Route::get('messages',  ListConversationAndMessages::class)->name('messages');


    Route::view('change-password','account.change-password')->name('change.password');

    #==================================
    #Admin Routes
    #===================================
    Route::middleware('admin')->prefix('admin')->group(function(){

        Route::get('dashboard',                     [DashboardController::class,'adminDashboard'])->name('admin.dashboard');
        Route::get('manage-jobs',                   [JobController::class, 'index'])->name('manage-jobs.index');
        Route::resource('users',                UserController::class);
        Route::resource('testimonies',          TestimonyController::class);
        Route::resource('articles',             ArticleController::class);
        Route::resource('article-categories',   ArticleCategoryController::class);
        Route::resource('article-tags',         ArticleTagController::class);

        Route::view('messages','messages')->name('admin.messages');




    });


    #==================================
    #Employer Routes
    #===================================
    Route::middleware('employer')->prefix('employer')->group(function(){

        Route::get('/dashboard', [DashboardController::class, 'employerDashboard'])->name('employer.dashboard');
        Route::resource('jobs',JobController::class);
        Route::controller(JobApplicantController::class)->group(function(){
            Route::get('/{id}/job-applicants','index')->name('job.applicants');
            Route::get('messages/{id}','sendMessages')->name('send-message');
        });

        Route::view('messages','messages')->name('employer.messages');



    });




    #==================================
    #Applicants Routes
    #===================================
    Route::middleware('applicant')->prefix('job-seeker')->group(function(){
        Route::get('/dashboard', function () {
            return view('applicant.dashboard');
        })->name('applicant.dashboard');


        Route::controller(ProfileController::class)->group(function (){

            Route::get('my-profile','index')->name('profile');
            Route::get('edit-my-profile','edit')->name('profile.edit');
            Route::put('my-profile','update')->name('profile.update');

        });

        Route::controller( AppliedJobController::class)->group(function (){

            Route::get('/my-job-applications','index' )->name('applicant.jobs');

        });
        Route::get('/add-resume',           [ResumeController::class, 'create'] )->name('applicant.add.resume');
        Route::post('/add-resume',          [ResumeController::class, 'store'] )->name('applicant.resume.store');
        Route::get('/edit-resume',        [ResumeController::class, 'edit'] )->name('applicant.add.edit');
        Route::put('/update-resume/{id}',   [ResumeController::class, 'update'] )->name('applicant.resume.update');

    });

    Route::controller(JobApplicationController::class)->group(function(){
        Route::post('job-application','store')->name('job-application.store');
    });
    Route::view('messages','messages')->name('applicant.messages');
});



require __DIR__.'/auth.php';
