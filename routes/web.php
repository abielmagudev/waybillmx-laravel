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


Route::resource('cartasporte', 'CartaporteController');
Route::resource('convenios', 'ConvenioController');
Route::resource('rutas', 'RutaController');
Route::resource('tarifas', 'TarifaController');
Route::resource('embalajes', 'EmbalajeController');
Route::resource('sucursales', 'SucursalController');
Route::resource('usuarios', 'UsuarioController');

Route::resource('clientes', 'ClienteController');
Route::get('trayectos/{client_id}/create', 'TrayectoController@create')->name('trayectos.create');
Route::get('trayectos/{id}/edit', 'TrayectoController@edit')->name('trayectos.edit');

Route::resource('configuracion', 'ConfiguracionController');

Route::get('/', function () {
    return view('dashboard.index');
});