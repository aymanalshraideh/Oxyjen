<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

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
Route::get('startup', 'App\Http\Controllers\StartupController@index')->name('startup');
Route::get('startup-create', 'App\Http\Controllers\StartupController@create')->name('startup-create');
Route::post('startup-store', 'App\Http\Controllers\StartupController@store')->name('startup-store');
Route::get('startup-edit/{id}', 'App\Http\Controllers\StartupController@edit')->name('startup-edit');
Route::put('startup-update/{id}', 'App\Http\Controllers\StartupController@update')->name('startup-update');
Route::delete('startup-delete/{id}', 'App\Http\Controllers\StartupController@destroy')->name('startup-delete');
// program routes
Route::get('program', 'App\Http\Controllers\ProgramController@index')->name('program');
Route::get('program-create', 'App\Http\Controllers\ProgramController@create')->name('program-create');
Route::post('program-store', 'App\Http\Controllers\ProgramController@store')->name('program-store');
Route::get('program-edit/{id}', 'App\Http\Controllers\ProgramController@edit')->name('program-edit');
Route::put('program-update/{id}', 'App\Http\Controllers\ProgramController@update')->name('program-update');
Route::delete('program-delete/{id}', 'App\Http\Controllers\ProgramController@destroy')->name('program-delete');


//Home
Route::get('/home', function () {
    return view('pages.home-3');
});


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
