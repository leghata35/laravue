<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tasks', 'TaskController@index')->name('taskslist');

Route::get('/tasks/edit/{id}', 'TaskController@edit')->name('taskedit');

Route::post('/tasks', 'TaskController@store')->name('taskstore');

Route::match('/tasks/edit/{id}', 'TaskController@update')->name('taskupdate');

Route::delete('/tasks/{id}', 'TaskController@destroy')->name('deletetask');

Route::get('/tasks/{q}', 'TaskController@index')->name('taskslist');
