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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','ListController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bookings','BookingsController@index');
 
Route::get('/bookings/create','BookingsController@create');
 
Route::post('/bookingsaction','BookingsController@storeBooking');
