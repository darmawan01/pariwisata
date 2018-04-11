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
    //tourists route
    Route::get('/tourists', 'TouristController@index')->name('tourists.index');
    Route::get('/tourists/create', 'TouristController@create')->name('tourists.create');
    Route::post('/tourists/create', 'TouristController@store')->name('tourists.store');
    Route::get('/tourists/{tourists}', 'TouristController@show')->name('tourists.show');
    Route::get('/tourists/{tourists}/edit', 'TouristController@edit')->name('tourists.edit');
    Route::patch('/tourists/{tourists}/update', 'TouristController@update')->name('tourists.update');
    Route::delete('/tourists/{tourists}/destroy', 'TouristController@destroy')->name('tourists.destroy');
    //nationalities route
    Route::get('/nationalities', 'NationalityController@index')->name('nationalities.index');
    Route::get('/nationalities/create', 'NationalityController@create')->name('nationalities.create');
    Route::post('/nationalities/create', 'NationalityController@store')->name('nationalities.store');
    Route::get('/nationalities/{nationalities}', 'NationalityController@show')->name('nationalities.show');
    Route::get('/nationalities/{nationalities}/edit', 'NationalityController@edit')->name('nationalities.edit');
    Route::patch('/nationalities/{nationalities}/update', 'NationalityController@update')->name('nationalities.update');
    Route::delete('/nationalities/{nationalities}/destroy', 'NationalityController@destroy')->name('nationalities.destroy');
    //hotel route
    Route::get('/hotels/index', 'HotelController@index')->name('hotels.index');
    Route::get('/hotels/create', 'HotelController@create')->name('hotels.create');
    Route::post('/hotels/create', 'HotelController@store')->name('hotels.store');
    Route::get('/hotels/{hotel}', 'HotelController@show')->name('hotel.show');
    Route::get('/hotels/{hotel}/edit', 'HotelController@edit')->name('hotel.edit');
    Route::patch('/hotels/{hotel}/update', 'HotelController@update')->name('hotel.update');
    Route::delete('/hotels/{hotel}/destroy', 'HotelController@destroy')->name('hotel.destroy');
    //destinations route
    Route::get('/destinations', 'DestinationController@index')->name('destinations.index');
    Route::get('/destinations/create', 'DestinationController@create')->name('destinations.create');
    Route::post('/destinations/create', 'DestinationController@store')->name('destinations.store');
    Route::get('/destinations/{destinations}', 'DestinationController@show')->name('destinations.show');
    Route::get('/destinations/{destinations}/edit', 'DestinationController@edit')->name('destinations.edit');
    Route::patch('/destinations/{destinations}/update', 'DestinationController@update')->name('destinations.update');
    Route::delete('/destinations/{destinations}/destroy', 'DestinationController@destroy')->name('destinations.destroy');
    //countries route
    Route::get('/countries', 'CountryController@index')->name('countries.index');
    Route::get('/countries/create', 'CountryController@create')->name('countries.create');
    Route::post('/countries/create', 'CountryController@store')->name('countries.store');
    Route::get('/countries/{countries}', 'CountryController@show')->name('countries.show');
    Route::get('/countries/{countries}/edit', 'CountryController@edit')->name('countries.edit');
    Route::patch('/countries/{countries}/update', 'CountryController@update')->name('countries.update');
    Route::delete('/countries/{countries}/destroy', 'CountryController@destroy')->name('countries.destroy');
    //continants route
    Route::get('/continants', 'ContrinantController@index')->name('continants.index');
    Route::get('/continants/create', 'ContrinantController@create')->name('continants.create');
    Route::post('/continants/create', 'ContrinantController@store')->name('continants.store');
    Route::get('/continants/{continants}', 'ContrinantController@show')->name('continants.show');
    Route::get('/continants/{continants}/edit', 'ContrinantController@edit')->name('continants.edit');
    Route::patch('/continants/{continants}/update', 'ContrinantController@update')->name('continants.update');
    Route::delete('/continants/{continants}/destroy', 'ContrinantController@destroy')->name('continants.destroy');
});
