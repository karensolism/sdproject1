<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
//ruta principal
Route::get('/', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UserController')->middleware('auth');

Route::get('/usuarios', 'UserController@index');

