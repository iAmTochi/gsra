<?php

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





Route::middleware(['auth','verified'])->group(function(){
    #==================================
    #Admin Routes
    #===================================
    Route::middleware('admin')->prefix('admin')->group(function(){
        Route::get('/dashboard', function () {

            return view('admin.dashboard');

        })->name('admin.dashboard');
        Route::get('manage-jobs',[JobController::class, 'index'])->name('manage-jobs.index');


    });

    #==================================
    #Employer Routes
    #===================================
    Route::middleware('employer')->prefix('employer')->group(function(){
        Route::get('/dashboard', function () {
            return view('employer.dashboard');
        })->name('employer.dashboard');;
        Route::resource('jobs',JobController::class);
    });

    #==================================
    #Applicants Routes
    #===================================
    Route::prefix('job-seeker')->group(function(){
        Route::get('/dashboard', function () {
            return view('applicant.dashboard');
        })->name('applicant.dashboard');
    });
});



require __DIR__.'/auth.php';
