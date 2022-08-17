<?php

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
Route::get('/reset-password1', function () {
    return view('auth.reset-password1');
});
Route::middleware(['auth','verified'])->group(function(){
    #==================================
    #Admin Routes
    #===================================
    Route::middleware('admin')->prefix('admin')->group(function(){
        Route::get('/dashboard', function () {

            return view('admin.dashboard');

        })->name('admin.dashboard');
    });

    #==================================
    #Employer Routes
    #===================================
    Route::middleware('employer')->prefix('employer')->group(function(){
        Route::get('/dashboard', function () {
            return view('employer.dashboard');
        })->name('employer.dashboard');;
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
