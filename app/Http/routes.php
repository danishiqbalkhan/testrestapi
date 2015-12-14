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

// Route group for API versioning
Route::group(['prefix' => 'api/v1', 'before' => 'auth.basic'], function()
{
    Route::resource('devices', 'api\v1\DevicesController');
   
});

// Route group for API versioning
Route::group(['prefix' => 'api/v2', 'before' => 'auth.basic'], function()
{
    Route::resource('devices', 'api\v2\DevicesController');
   
});



Route::get('/', function () {
    return view('welcome');
});
