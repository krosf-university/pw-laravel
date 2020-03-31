<?php

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'ArticulosController@index');
    Route::name('articulos')->get('/articulos', 'ArticulosController@index');
    Route::name('insertar_articulo')->get(
        '/articulos/nuevo',
        'ArticulosController@nuevo'
    );
    Route::name('guardar_articulo')->post(
        '/articulos/articulo',
        'ArticulosController@guardar'
    );
    Route::name('un_articulo')->get(
        '/articulos/{art}',
        'ArticulosController@mostrar_articulo'
    );
    // Ruta creada automáticamente
    Route::get('/home', 'HomeController@index')->name('home');
});
