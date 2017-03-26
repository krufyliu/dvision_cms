<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'StaticController@home');
Route::get('/aura', 'StaticController@aura');
Route::get('/aurawork', 'StaticController@aurawork');
Route::get('/aurastudio', 'StaticController@aurastudio');
Route::get('/service', 'StaticController@service');
Route::get('/about', 'StaticController@about');
Route::get('/download', 'StaticController@download');



Route::get('/team', 'StaticController@team');
Route::get('/contact', 'StaticController@contact');
Route::get('/suceess', 'StaticController@suceess');
Route::post('/contact', 'StaticController@contactSubmit');
Route::get('/video', 'StaticController@video');
Route::get('/video/{id}', 'StaticController@videoShow');
Route::get('/join', 'StaticController@join');
Route::get('/news', 'StaticController@news');
Route::get('/news/{id}', 'StaticController@newsShow');
// zshuang
Route::get('zshuang', 'StaticController@zshuang');
Route::get('/auth/geetest', 'AuthController@getGeetest');
Route::get('/h5', function () {
  return view('exhibition');
});
