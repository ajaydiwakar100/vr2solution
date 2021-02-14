<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::group(['middleware' => 'admin'], function (){
    
	/*
	|--------------------------------------------------------------------------
	| ------------------LOGIN RELATED ROUTE----------------------------------
	|--------------------------------------------------------------------------
	*/

	Route::get('/','LoginController@login');
    Route::post('/do-login','LoginController@dologin');
	Route::get('/forgot-password','LoginController@forgot');
    Route::post('/do-forgot','LoginController@doforgot');
    Route::post('/reset-password','LoginController@resetpass');
	Route::get('/dashboard','LoginController@dashboard');
    Route::get('/logout','LoginController@logout');	
   

	/*
	|--------------------------------------------------------------------------
	| ------------------QUIZE RELATED ROUTE----------------------------------
	|--------------------------------------------------------------------------
	*/	

	Route::get('/quize/view','QuizeController@view');
	Route::get('/quize/add','QuizeController@add');
	Route::post('/quize/save','QuizeController@save');
	Route::get('/quize/edit/{id}','QuizeController@edit');
	Route::post('/quize/save-edit','QuizeController@editsave');
	Route::get('/quize/delete/{id}','QuizeController@delete');


	/*
	|--------------------------------------------------------------------------
	| ------------------Product RELATED ROUTE----------------------------------
	|--------------------------------------------------------------------------
	*/	

	Route::get('/product/view','ProductController@view');
	Route::get('/product/add','ProductController@add');
	Route::post('/product/save','ProductController@save');
	Route::get('/product/edit/{id}','ProductController@edit');
	Route::post('/product/save-edit','ProductController@editsave');
	Route::get('/product/delete/{id}','ProductController@delete');

	/*
	|--------------------------------------------------------------------------
	| ------------------User RELATED ROUTE----------------------------------
	|--------------------------------------------------------------------------
	*/	

	Route::get('/user/view','UserController@view');
	Route::get('/user/delete/{id}','UserController@delete');






});






