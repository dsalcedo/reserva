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
	Route::get('/', [ 'as'=>'sitio.index', 'uses'=>'Sitio@index' ]);
});

// API V1
Route::group(['prefix' => '/api'], function () {
	Route::get('/', [ 'as' => 'api.index', 'uses'=>'ApiV1@index' ]);
});

// Manager 
Route::group(['prefix' => '/manager'], function () {
	Route::get('/', function () {
	    return view('welcome');
	});
});

// Hotel Manager
Route::group(['prefix' => '/hotel'], function () {
	Route::get('/', function () {
	    return view('welcome');
	});
});