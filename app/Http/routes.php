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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function () {
	
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/garbage/createGarbage', 'GarbageController@createGarbage');

	Route::post('/garbage/realizeGarbage', 'GarbageController@realizeGarbage');    

    Route::get('/garbage/editGarbage', 'GarbageController@editGarbage');

    Route::get('/garbage/deleteGarbage', 'GarbageController@deleteGarbage');

	Route::get('/garbage/returnGarbageType/{garbageCatId}', 'GarbageController@returnGarbageType');    

});

/*Routes for API defined here */

Route::get('/api/getPastWeekDataAll', 'ApiController@getPastWeekDataAll');

Route::get('/api/getPastWeekDataForUser/{userId}', 'ApiController@getPastWeekDataForUser');
