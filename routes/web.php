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

Route::get('/tasks/', 'TaskController@index');
Route::get('/tasks/create', 'TaskController@create');
Route::get('/tasks/complete', 'TaskController@complete');
Route::post('/tasks/edit', 'TaskController@update');
Route::get('/tasks/{task}', 'TaskController@show');
Route::post('/tasks', 'TaskController@store');

Route::post('/notes/{task}', 'NoteController@store');





Auth::routes();

Route::get('/home', 'HomeController@index');
