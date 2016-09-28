<?php
/**
 * Created by PhpStorm.
 * User: liujun
 * Date: 2016/9/27
 * Time: 下午7:09
 */
Route::get('/', function () {
    return view('admin.dashboard');
})->middleware('auth:admin');

Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'LoginController@login');
Route::post('/logout', 'LoginController@logout');
Route::resource('posts', 'PostController');
