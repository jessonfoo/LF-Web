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
Route::redirect( '/', '/' . locale()->current(), 301 );
	Route::prefix( '{locale}' )->group( function () {
		
		Route::get( '', 'ViewController@index' );
//		Route::get( 'users/{id}', 'UserController@show' );
//		Route::get( 'users/{id}', 'UserController@index' );
	
	} );
