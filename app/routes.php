<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

/**
 * resource route
 */
Route::post('jobs/store', [
    'as' => 'jobs/store',
    'uses' => 'JobController@store'
]);


// route to get the store
route::get('jobs/store', 'JobsController@store');