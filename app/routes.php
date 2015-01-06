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

Route::get('/', ['uses' => 'HomeController@getIndex']);

Route::group(['prefix' => 'api/artists'], function()
{
	Route::pattern('id', '[0-9]+');

	Route::get('/', ['uses' => 'ArtistController@getIndex']);
	Route::get('/{id}', ['uses' => 'ArtistController@getId']);
	Route::post('/', ['uses' => 'ArtistController@postRegister']);
	Route::put('/{id}', ['uses' => 'ArtistController@putId']);
	Route::delete('/{id}', ['uses' => 'ArtistController@deleteId']);
});
