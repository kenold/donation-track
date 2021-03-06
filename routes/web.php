<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('/', 'DonationController@home');
Route::resource('contacts', 'ContactController');
Route::resource('items', 'ItemController');
Route::get('donations', 'DonationController@index');
Route::get('donations/contact/{id}', 'DonationController@show');
Route::resource('categories', 'CategoryController');
