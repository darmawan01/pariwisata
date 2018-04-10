<?php

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
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hotel/create', 'HotelController@create')->name('hotel.create');
Route::post('/hotel/create', 'HotelController@store')->name('hotel.store');

Route::middleware('auth')->group(function () {
    //post route
    Route::get('/tourist', 'TouristController@index')->name('tourist.index');
    Route::get('/tourist/create', 'TouristController@create')->name('tourist.create');
    Route::post('/tourist/create', 'TouristController@store')->name('tourist.store');
    Route::get('/tourist/{tourist}', 'TouristController@show')->name('tourist.show');
    Route::get('/tourist/{tourist}/edit', 'TouristController@edit')->name('tourist.edit');
    Route::patch('/tourist/{tourist}/update', 'TouristController@update')->name('tourist.update');
    Route::delete('/tourist/{tourist}/destroy', 'TouristController@destroy')->name('tourist.destroy');
});
