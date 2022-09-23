<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\HomeJobController;
use App\Http\Controllers\Home\HomeResumeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\UserController;
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

Route::get('/reset-password1', function () {
    return view('auth.reset-password1');
});


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


    Route::view('conversations','messages')->name('messages');


    Route::view('change-password','account.change-password')->name('change.password');

    #==================================
    #Admin Routes
    #===================================
    Route::middleware('admin')->prefix('admin')->group(function(){
        Route::get('dashboard', [DashboardController::class,'adminDashboard'])->name('admin.dashboard');
        Route::get('manage-jobs',[JobController::class, 'index'])->name('manage-jobs.index');
        Route::resource('users',UserController::class);
        Route::resource('testimonies',TestimonyController::class);



    });


    #==================================
    #Employer Routes
    #===================================
    Route::middleware('employer')->prefix('employer')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'employerDashboard'])->name('employer.dashboard');
        Route::resource('jobs',JobController::class);
        Route::view('manage-applicants','employer.manage-applicants')->name('applicants');

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

        Route::view('/my-jobs','applicant.applied-jobs' )->name('applicant.jobs');
        Route::get('/add-resume',           [ResumeController::class, 'create'] )->name('applicant.add.resume');
        Route::post('/add-resume',          [ResumeController::class, 'store'] )->name('applicant.resume.store');
        Route::get('/edit-resume',        [ResumeController::class, 'edit'] )->name('applicant.add.edit');
        Route::put('/update-resume/{id}',   [ResumeController::class, 'update'] )->name('applicant.resume.update');

    });
});



require __DIR__.'/auth.php';
