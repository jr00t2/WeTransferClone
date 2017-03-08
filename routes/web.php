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

Route::get('/home', 'HomeController@index');
Route::post('/file/store', 'FileController@store');
Route::post('/file/{url}', 'FileController@show');
Route::get('/file/{url}', 'FileController@auth');
Auth::routes();
