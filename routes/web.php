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

Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::post( '/', 'LeadController@store' );

Route::get( 'register', 'RegisterController@create' )->middleware( 'guest' );
Route::post( 'register', 'RegisterController@store' )->middleware( 'guest' );

Route::get( 'login', 'SessionsController@create' )->middleware( 'guest' )->name('login');
Route::post( 'login', 'SessionsController@store' )->middleware( 'guest' );
Route::post( 'logout', 'SessionsController@destroy' )->middleware( 'auth' );

Route::get( 'admin/leads', 'LeadController@index' )->middleware( 'auth' );
