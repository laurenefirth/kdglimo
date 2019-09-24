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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usermanagement','UserManagementController@userlist')->middleware('auth');

Route::get('/listreport','BookingsController@listreport')->middleware('auth');

Route::get('/calendarreport','BookingsController@calendarreport')->middleware('auth');
 
Route::get('/createbooking','BookingsController@create')->middleware('auth');

Route::get('/createuser','UserManagementController@create')->middleware('auth');

Route::post('/updateuser/{id}','UserManagementController@update')->middleware('auth');
 
Route::post('/bookingsaction','BookingsController@storeBooking')->middleware('auth');

Route::post('/createusersaction','UserManagementController@storeUser')->middleware('auth');

Route::post('/updateusersaction','UserManagementController@storeUserUpdate')->middleware('auth');

Route::delete('/userdelete/{id}', 'UserManagementController@destroyUser')->middleware('auth');;

