<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','IndexController@login');
Route::get('quiz','IndexController@view');
Route::post('/check-answer','IndexController@CheckAnswer');
Route::post('/do-login','IndexController@dologin');
   
