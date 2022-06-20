<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
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
    return view('efront.index');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Profile
Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::get('/create', [ProfileController::class, 'create'])->name('create');
        Route::post('/store', [ProfileController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ProfileController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ProfileController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ProfileController::class, 'destroy'])->name('destroy');
    });

// Student Profile
Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/store', [StudentController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [StudentController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [StudentController::class, 'destroy'])->name('destroy');
    Route::get('/search', [StudentController::class, 'search'])->name('search');

});

// Covid information
Route::group(['prefix' => 'covid', 'as' => 'covid.'], function () {
    Route::get('/', [CovidController::class, 'index'])->name('index');
    Route::get('/create', [CovidController::class, 'create'])->name('create');
    Route::post('/store', [CovidController::class, 'store'])->name('store');
    Route::post('/saveCovid', [CovidController::class, 'saveCovid'])->name('saveCovid');
    Route::get('/edit/{id}', [CovidController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CovidController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CovidController::class, 'destroy'])->name('destroy');
    Route::get('/search', [CovidController::class, 'search'])->name('search');

});

// College information
Route::group(['prefix' => 'college', 'as' => 'college.'], function () {
    Route::get('/', [CollegeController::class, 'index'])->name('index');
    Route::get('/create', [CollegeController::class, 'create'])->name('create');
    Route::post('/store', [CollegeController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CollegeController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CollegeController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CollegeController::class, 'destroy'])->name('destroy');
    Route::get('/search', [CollegeController::class, 'search'])->name('search');

});

Route::group(['prefix' => 'efront', 'as' => 'efront.'], function ()  {
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/status', [PageController::class, 'status'])->name('status');
    Route::get('/apply', [PageController::class, 'apply'])->name('apply');
    Route::get('/covid', [PageController::class, 'covid'])->name('covid');
    Route::get('/college', [PageController::class, 'college'])->name('college');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
});
