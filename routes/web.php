<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Home\HomeJobController;
use App\Http\Controllers\JobController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact');

Route::get('/reset-password1', function () {
    return view('auth.reset-password1');
});

Route::get('/jobs-list', [HomeJobController::class,'jobList'])->name('home.jobs');
Route::get('/jobs-grid', [HomeJobController::class,'jobListGrid'])->name('home.jobs.grid');
Route::view('/job-details', 'job-details')->name('home.jobs.detail');





Route::middleware(['auth','verified'])->group(function(){

    Route::view('conversations','messages')->name('messages');
    Route::view('my-profile','account.profile')->name('profile');
    Route::view('change-password','account.change-password')->name('change.password');

    #==================================
    #Admin Routes
    #===================================
    Route::middleware('admin')->prefix('admin')->group(function(){
        Route::get('/dashboard', [DashboardController::class,'adminDashboard'])->name('admin.dashboard');
        Route::get('manage-jobs',[JobController::class, 'index'])->name('manage-jobs.index');



    });

    Route::middleware('user.role')->group(function(){

        Route::get('/dashboard', function () {
            return to_route('admin.dashboard');
        })->name('dashboard');
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
    Route::prefix('job-seeker')->group(function(){
        Route::get('/dashboard', function () {
            return view('applicant.dashboard');
        })->name('applicant.dashboard');

        Route::view('/my-jobs','applicant.applied-jobs' )->name('applicant.jobs');
        Route::view('/add-resume','applicant.add-resume' )->name('applicant.add.resume');

    });
});



require __DIR__.'/auth.php';
