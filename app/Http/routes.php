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

// Sitio
Route::group(['prefix' => '/'], function () {
	Route::get('/', function () {
	    return view('welcome');
	});
});

// API
Route::group(['prefix' => '/api'], function () {
	Route::get('/', function () {
	    return view('welcome');
	});
});

// Super Admin hotel manager 
Route::group(['prefix' => '/manager'], function () {
	Route::get('/', function () {
	    return view('welcome');
	});
});

// Hotel Manage
Route::group(['prefix' => '/hotel'], function () {
	Route::get('/', function () {
	    return view('welcome');
	});
});