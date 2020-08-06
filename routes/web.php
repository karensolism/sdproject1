<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
//ruta principal
Route::get('/', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UserController');


Route::get('/usuarios', 'UserController@index');

