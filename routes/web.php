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

Route::get('/todo', 'homeController@index');
Route::post('/todo/save', 'TodoController@create');
Route::get('/todo/update_open/{id}', 'homeController@update_open');
Route::get('/todo/update_done/{id}', 'TodoController@update_done');
Route::get('/todo/update_undone/{id}', 'TodoController@update_undone');
Route::get('/todo/delete/{id}', 'TodoController@delete');
