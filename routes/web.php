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

Route::get('favourite', 'FavouriteContactController@index')->name('favourite.index');
Route::get('favourite/{contact}', 'FavouriteContactController@update')->name('favourite.update');

Route::resource('contact', 'ContactController');
Route::resource('favourite', 'FavouriteContactController');
Route::resource('phone', 'PhoneController');

