<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('welcome', 'Auth\AdminController@welcome');
Route::get('users/login', 'Auth\AdminController@getLogin');
Route::post('users/login', 'Auth\AdminController@postLogin');
Route::get('homepage', 'Auth\AdminController@getIndex');
Route::get('users/logout', 'Auth\AdminController@getLogout');
Route::get('createQuery', 'Auth\AdminController@getMake');
Route::get('listQuery', 'Auth\AdminController@getList');
Route::post('listQuery', 'UserController@addleads');
Route::get('showLeads', 'UserController@showleads');
Route::get('showCustomer', 'UserController@showCustomer');
Route::get('showCompany', 'UserController@showCompany');
Route::get('showStatistics', 'UserController@showStatistics'); //Show list of CQ
Route::get('showQuery', 'UserController@showQuery'); //Show the content of the CQ
Route::post('showQuery', 'UserController@showQuery');
Route::get('addQuery', 'UserController@addQuery');  //Show list of tables from the database
Route::post('addColumn', 'UserController@addColumn'); //Pick the column to be shown
Route::post('checkList', 'UserController@getChecked'); //Check the output from addColumn function
Route::post('saveQuery', 'UserController@saveQuery'); //Insert to the database of the CQ
// Route::group(['middleware' => 'auth'], function(){
// 	Route::get('users/homepage', array('as' => 'dashboard', function(){
// 		return view('admin.dashboard');
// 	}));
// });


