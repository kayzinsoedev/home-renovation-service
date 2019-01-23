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

// Backend routes
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Frontend routes
Route::get('/', ['as' => 'home', 'uses' => 'Frontend\HomeController@getHomeInfo']);


Route::group(['middleware' => 'auth'], function (){
	Route::get('/home', 'HomeController@index');


	Route::group(['prefix' => 'admin'], function(){
		Route::resource('service', 'Backend\Admin\ServiceController');
	});

	

});

