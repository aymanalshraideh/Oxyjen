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

// service routes
Route::get('service', 'App\Http\Controllers\ServiceController@index')->name('service');
Route::get('service-create', 'App\Http\Controllers\ServiceController@create')->name('service-create');
Route::post('service-store', 'App\Http\Controllers\ServiceController@store')->name('service-store');
Route::get('service-edit/{id}', 'App\Http\Controllers\ServiceController@edit')->name('service-edit');
Route::put('service-update/{id}', 'App\Http\Controllers\ServiceController@update')->name('service-update');
Route::delete('service-delete/{id}', 'App\Http\Controllers\ServiceController@destroy')->name('service-delete');



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
