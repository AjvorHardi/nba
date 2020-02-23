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

Route::get('/', 'TeamController@index')->middleware('verified');;

Route::get('/teams/{id}', 'TeamController@show')->middleware('verified');;

Route::get('/players/{id}', 'PlayerController@show')->middleware('verified');;

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::post('/teams/{id}/comments', 'CommentController@store')->name('team-comments')->middleware('bad-mouth');
