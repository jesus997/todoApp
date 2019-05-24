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

Route::get('/', 'TodoController@index');
Route::post('/create', 'TodoController@create');
Route::get('/listo/{name}', 'TodoController@listo');
Route::get('/borrar/{id}', 'TodoController@borrar');