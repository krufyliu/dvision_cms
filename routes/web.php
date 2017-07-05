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
Route::get('/success', 'StaticController@success');


Route::get('/contact', 'StaticController@contact');
Route::get('/order', 'StaticController@contact_order');
Route::get('/franchise', 'StaticController@contact_franchise');

Route::post('/contact', 'StaticController@contactSubmit');

Route::get('/video', 'StaticController@video');
Route::get('/video/{id}', 'StaticController@videoShow');
Route::get('/join', 'StaticController@join');

Route::get('/news', 'StaticController@news');
// Route::get('/news/{id}', 'StaticController@newsShow');
// zshuang
Route::get('zshuang', 'StaticController@zshuang');
Route::get('/auth/geetest', 'AuthController@getGeetest');
Route::get('/h5', function () {
  return view('exhibition');
});

Route::group(['prefix' => 'mobile'], function() {
  Route::get('/', function() {
      return view('mobile/home', [ 'title' => '首页' ]);
  });

  Route::get('/aura', function() {
      return view('mobile/aura', [ 'title' => 'AURA 专业级VR摄影机' ]);
  });

  Route::get('/aurawork', function() {
      return view('mobile/aura_work', [ 'title' => 'AURA WORK - AURA 专用监看、控制软件' ]);
  });

  Route::get('/aurastudio', function() {
      return view('mobile/aura_studio', [ 'title' => 'AURA STUDIO - AURA 专用 VR 制作软件' ]);
  });

  Route::get('/service', function() {
      return view('mobile/service', [ 'title' => '服务' ]);
  });

});