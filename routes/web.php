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

Route::get('', 'HomeController@show');
Route::get('country/{country}', 'CityController@show');

Route::post('country/create', 'HomeController@create');
Route::post('city/create/{country}', 'CityController@create');

Route::get('country/delete/{country}', 'HomeController@delete');
Route::get('city/delete/{city}', 'CityController@delete');