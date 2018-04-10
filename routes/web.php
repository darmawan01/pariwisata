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
    //tourist route
    Route::get('/tourist', 'TouristController@index')->name('tourist.index');
    Route::get('/tourist/create', 'TouristController@create')->name('tourist.create');
    Route::post('/tourist/create', 'TouristController@store')->name('tourist.store');
    Route::get('/tourist/{tourist}', 'TouristController@show')->name('tourist.show');
    Route::get('/tourist/{tourist}/edit', 'TouristController@edit')->name('tourist.edit');
    Route::patch('/tourist/{tourist}/update', 'TouristController@update')->name('tourist.update');
    Route::delete('/tourist/{tourist}/destroy', 'TouristController@destroy')->name('tourist.destroy');
    //nationality route
    Route::get('/nationality', 'NationalityController@index')->name('nationality.index');
    Route::get('/nationality/create', 'NationalityController@create')->name('nationality.create');
    Route::post('/nationality/create', 'NationalityController@store')->name('nationality.store');
    Route::get('/nationality/{nationality}', 'NationalityController@show')->name('nationality.show');
    Route::get('/nationality/{nationality}/edit', 'NationalityController@edit')->name('nationality.edit');
    Route::patch('/nationality/{nationality}/update', 'NationalityController@update')->name('nationality.update');
    Route::delete('/nationality/{nationality}/destroy', 'NationalityController@destroy')->name('nationality.destroy');
    //hotel route
    Route::get('/hotel', 'HotelController@index')->name('hotel.index');
    Route::get('/hotel/create', 'HotelController@create')->name('hotel.create');
    Route::post('/hotel/create', 'HotelController@store')->name('hotel.store');
    Route::get('/hotel/{hotel}', 'HotelController@show')->name('hotel.show');
    Route::get('/hotel/{hotel}/edit', 'HotelController@edit')->name('hotel.edit');
    Route::patch('/hotel/{hotel}/update', 'HotelController@update')->name('hotel.update');
    Route::delete('/hotel/{hotel}/destroy', 'HotelController@destroy')->name('hotel.destroy');
    //destination route
    Route::get('/destination', 'DestinationController@index')->name('destination.index');
    Route::get('/destination/create', 'DestinationController@create')->name('destination.create');
    Route::post('/destination/create', 'DestinationController@store')->name('destination.store');
    Route::get('/destination/{destination}', 'DestinationController@show')->name('destination.show');
    Route::get('/destination/{destination}/edit', 'DestinationController@edit')->name('destination.edit');
    Route::patch('/destination/{destination}/update', 'DestinationController@update')->name('destination.update');
    Route::delete('/destination/{destination}/destroy', 'DestinationController@destroy')->name('destination.destroy');
    //country route
    Route::get('/country', 'CountryController@index')->name('country.index');
    Route::get('/country/create', 'CountryController@create')->name('country.create');
    Route::post('/country/create', 'CountryController@store')->name('country.store');
    Route::get('/country/{country}', 'CountryController@show')->name('country.show');
    Route::get('/country/{country}/edit', 'CountryController@edit')->name('country.edit');
    Route::patch('/country/{country}/update', 'CountryController@update')->name('country.update');
    Route::delete('/country/{country}/destroy', 'CountryController@destroy')->name('country.destroy');
    //continant route
    Route::get('/continant', 'ContrinantController@index')->name('continant.index');
    Route::get('/continant/create', 'ContrinantController@create')->name('continant.create');
    Route::post('/continant/create', 'ContrinantController@store')->name('continant.store');
    Route::get('/continant/{continant}', 'ContrinantController@show')->name('continant.show');
    Route::get('/continant/{continant}/edit', 'ContrinantController@edit')->name('continant.edit');
    Route::patch('/continant/{continant}/update', 'ContrinantController@update')->name('continant.update');
    Route::delete('/continant/{continant}/destroy', 'ContrinantController@destroy')->name('continant.destroy');
});
