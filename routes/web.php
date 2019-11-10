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

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;


Route::get('/', 'TeamController@index');
Route::get('/teams/{id}', 'TeamController@show')->name('teams-single');
Route::get('/players/{id}', 'PlayerController@show');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@create')->name('login.create');
Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LoginController@destroy');

Route::post('/create-comment/{id}', 'CommentsController@store')->name('create.comment');
Route::get('/login/verify/{id}', 'LoginController@verifyEmail')->name('login.verify');

Route::get('/news', 'NewsController@index');
Route::get('/news/{id}', 'NewsController@show');
