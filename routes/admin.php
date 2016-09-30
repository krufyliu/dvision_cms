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
Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm');
Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail');
Route::post('/password/reset', 'ResetPasswordController@reset');
Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm');

Route::resource('posts', 'PostController');
Route::resource('videos', 'VideoController');
Route::resource('career_jobs', 'CareerJobController');

Route::post('/upload/image', 'UploadController@storeImage');
Route::post('/upload/file', 'UploadController@storeFile');
Route::post('/upload/delete', 'UploadController@deleteFile');

// config
Route::post('/config', 'ConfigController@store');
Route::get('/config', 'ConfigController@create');
