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
    return view('welcome');
});

Route::resource('customers' , 'CustomerController');
Route::get('search','CustomerController@search')->name('customers.search');

Route::group(['prefix' => 'cities'], function () {
    Route::get('/','CityController@index')->name('cities.index');
    Route::get('/create','CityController@create')->name('cities.create');
    Route::post('/create','CityController@store')->name('cities.store');
    Route::get('/edit/{id}','CityController@edit')->name('cities.edit');
    Route::post('/edit/{id}','CityController@update')->name('cities.update');
    Route::get('/delete/{id}','CityController@delete')->name('cities.delete');
    Route::get('/search/','CityController@search')->name('cities.search');

});


