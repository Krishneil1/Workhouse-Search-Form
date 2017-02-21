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
Route::get ('/',[
	'uses'=>'\Workhouse\Http\Controllers\HomeController@index',//@index is the method 
	'as'=>'home',
	]);

Route::get('search',[
	'uses'=>'\\Workhouse\Http\Controllers\SearchController@getResults',
	'as'=>'search']);
/*
Route::get('/', function () {
    return view('welcome');
});
*/