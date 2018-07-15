<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//博客首页
Route::get('/','\App\Http\Controllers\IndexController@index');
Route::get('/posts','\App\Http\Controllers\IndexController@posts');
Route::get('/{post}/post','\App\Http\Controllers\IndexController@post');
