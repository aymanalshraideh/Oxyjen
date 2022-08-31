<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

use App\Http\Controllers\ProgramController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\StartupApplyController;
use App\Http\Controllers\startupcompanyController;
use App\Http\Controllers\PartenerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\contactController;
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
// slider routes
Route::get('slider', 'App\Http\Controllers\SliderController@index')->name('slider');
Route::get('slider-create', 'App\Http\Controllers\SliderController@create')->name('slider-create');
Route::post('slider-store', 'App\Http\Controllers\SliderController@store')->name('slider-store');
Route::get('slider-edit/{id}', 'App\Http\Controllers\SliderController@edit')->name('slider-edit');
Route::put('slider-update/{id}', 'App\Http\Controllers\SliderController@update')->name('slider-update');
Route::delete('slider-delete/{id}', 'App\Http\Controllers\SliderController@destroy')->name('slider-delete');

// about routes
Route::get('about', 'App\Http\Controllers\AboutController@index')->name('about');
Route::get('about-create', 'App\Http\Controllers\AboutController@create')->name('about-create');
Route::post('about-store', 'App\Http\Controllers\AboutController@store')->name('about-store');
Route::get('about-edit/{id}', 'App\Http\Controllers\AboutController@edit')->name('about-edit');
Route::put('about-update/{id}', 'App\Http\Controllers\AboutController@update')->name('about-update');
Route::delete('about-delete/{id}', 'App\Http\Controllers\AboutController@destroy')->name('about-delete');
// startup routes
Route::get('/startup', 'App\Http\Controllers\StartupController@index')->name('startup');
Route::get('/startup-create', 'App\Http\Controllers\StartupController@create')->name('startup-create');
Route::post('/startup-store', 'App\Http\Controllers\StartupController@store')->name('startup-store');
Route::get('/startup-edit/{id}', 'App\Http\Controllers\StartupController@edit')->name('startup-edit');
Route::put('/startup-update/{id}', 'App\Http\Controllers\StartupController@update')->name('startup-update');
Route::delete('/startup-delete/{id}', 'App\Http\Controllers\StartupController@destroy')->name('startup-delete');
// program routes
Route::get('/program', [ProgramController::class,'index'])->name('program');
Route::get('/program-create',  [ProgramController::class,'create'])->name('program-create');
Route::post('/program-store',  [ProgramController::class,'store'])->name('program-store');
Route::get('/program-edit/{id}',  [ProgramController::class,'edit'])->name('program-edit');
Route::put('/program-update/{id}',  [ProgramController::class,'update'])->name('program-update');
Route::delete('/program-delete/{id}',  [ProgramController::class,'destroy'])->name('program-delete');
// startup Application  routes
Route::get('/StartupApply', [StartupApplyController::class, 'index'])->name('StartupApply');
Route::get('/StartupApply-create', [StartupApplyController::class, 'create'])->name('StartupApply-create');
Route::post('/StartupApply-store', [StartupApplyController::class, 'store'])->name('StartupApply-store');
Route::get('/StartupApply-edit/{id}', [StartupApplyController::class, 'edit'])->name('StartupApply-edit');
Route::put('/StartupApply-update/{id}', [StartupApplyController::class, 'update'])->name('StartupApply-update');
Route::delete('/StartupApply-delete/{id}', [StartupApplyController::class, 'destroy'])->name('StartupApply-delete');
// Booking Application  routes
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/booking-create', [BookingController::class, 'create'])->name('booking-create');
Route::post('/booking-store', [BookingController::class, 'store'])->name('booking-store');
Route::get('/booking-edit/{id}', [BookingController::class, 'edit'])->name('booking-edit');
Route::put('/booking-update/{id}', [BookingController::class, 'update'])->name('booking-update');
Route::delete('/booking-delete/{id}', [BookingController::class, 'destroy'])->name('booking-delete');
Route::post('cancel/{id}', [BookingController::class, 'cancel'])->name('cancel');
Route::post('pend/{id}', [BookingController::class, 'pending'])->name('pending');
Route::post('confirm/{id}', [BookingController::class, 'confirm'])->name('confirm');

// Partener routes
Route::get('/partener', [PartenerController::class, 'index'])->name('partener');
Route::get('/partener-create', [PartenerController::class, 'create'])->name('partener-create');
Route::post('/partener-store', [PartenerController::class, 'store'])->name('partener-store');
Route::get('/partener-edit/{id}', [PartenerController::class, 'edit'])->name('partener-edit');
Route::put('/partener-update/{id}', [PartenerController::class, 'update'])->name('partener-update');
Route::delete('/partener-delete/{id}', [PartenerController::class, 'destroy'])->name('partener-delete');
// Booking Application  routes


//Home 
Route::get('/home',[HomeController::class,'index']);


Route::resource('user', UserController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Contact routes 
Route::get('/contact',[contactController::class,'contact']);
Route::post('/contact',[contactController::class,'sendEmail'])->name('add-message');


Route::get('/partner', function () {
    return view('applications.partner');
});
//startup routes
Route::get('/startupApp', [startupcompanyController::class,'index']);
Route::post('/startupApp',[startupcompanyController::class,'store'])->name('add-startup');
