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

Route::get('/', 'TeamsController@index');
Route::get('/teams/{id}', 'TeamsController@show');
Route::get('/players/{id}', 'PlayersController@show');

Route::group(['middleware' => 'guest'], function () {
Route::get('/register', 'AuthController@getRegisterForm')->name('register');
Route::post('/users', 'AuthController@register');

Route::get('/login', 'AuthController@getLoginForm')->name('login');
Route::post('/login', 'AuthController@login');
});

Route::post('/logout', 'AuthController@logout')->name('logout');


