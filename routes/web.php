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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/text1','TextController@text1');



Route::get('/user/login','User\UserController@login');
Route::get('/user/reg','User\UserController@reg');
Route::post('/user/regdo','User\UserController@regdo');
Route::post('/user/logindo','User\UserController@logindo');
Route::get('/user/create','User\UserController@create');
