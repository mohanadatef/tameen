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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','HomeController@index');
Route::get('/2','HomeController@index2');
Route::get('/3','HomeController@index3');
Route::get('/thank','HomeController@thank');
Route::get('/thank1','HomeController@thank1');
Route::get('/thank2','HomeController@thank2');
Route::get('/thank/pdf','HomeController@download');
Route::post('/store','HomeController@store');