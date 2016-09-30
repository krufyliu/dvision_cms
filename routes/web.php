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

Route::get('/', function () {
    return view('home');
});

Route::get('/video', function () {
    return view('video.index');
});

Route::get('/video/{id}', function () {
    return view('video.show');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/join', 'StaticController@join');


Route::get('/news', function () {
    return view('news');
});
