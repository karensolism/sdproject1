<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
//ruta principal
Route::get('/', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UserController')->middleware('auth');

Route::get('/usuarios', 'UserController@index');
//linea para usar todos los metodos del controlador
Route::resource('/Estado', 'EstadoController');


Route::resource('asesor', 'AsesorController');
Route::resource('ciudad', 'CiudadController');
Route::resource('colonia', 'ColoniaController');
Route::resource('desarrolladora', 'DesarrolladoraController');
Route::resource('empresa', 'EmpresaController');
Route::resource('formapago', 'FormadepagoController');
Route::resource('galeria', 'GaleriaController');
Route::resource('inmueble', 'InmuebleController');
Route::resource('modelo', 'ModeloController');
Route::resource('servicio', 'ServicioController');
Route::resource('tipodeinmueble', 'TipodeinmuebleController');
Route::resource('tipodeprecio', 'TipodeprecioController');