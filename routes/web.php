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


Route::get('/', [
	'uses'=>'userController@index'
	]);

Route::post('/login', [
	'uses'=>'userController@userLogin'
	]);

Route::get('/home', [
	'uses'=>'userController@home'
	]);

Route::post('/sendOtp', [
	'middleware' => 'checkSession',
    'uses'=>'userController@sendOtp'
]);

Route::post('/verifyOtp', [
	'middleware' => 'checkSession',
	'uses'=>'userController@verifyOtp'
]);

Route::get('/logout', [
	'uses'=>'userController@logout'
	]);
