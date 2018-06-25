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

/*Route::get('/', function () {
    return view('welcome');
});*/

// login y register
Route::get('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('reg', ['as' => 'reg', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('/', ['as' => 'auth/login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

//principal
Route::get('salon','PrincipalController@index');

//usuario
Route::get('registrarusuario','UsuarioController@usuarioget');
Route::post('usuario', ['as' =>'usuario', 'uses' => 'UsuarioController@usuarioregistrar']);
Route::get('listausuario','UsuarioController@listausuario');
Route::post('eliminarusuario', ['as' =>'eliminarusuario', 'uses' => 'UsuarioController@eliminarusuario']);
Route::post('editarusuario', ['as' =>'editarusuario', 'uses' => 'UsuarioController@editarusuario']);

//Producto
Route::get('listaproducto','ProductoController@listaproducto');
Route::get('registrarproducto','ProductoController@productoget');



//Estadisticas
Route::get('/estadistica', 'EstadisticaController@lista');
Route::get('listado_graficas', 'EstadisticaController@index');
Route::get('grafica_registros/{anio}/{mes}', 'EstadisticaController@registros_mes');
Route::get('listado_graficas_citas', 'EstadisticaController@citas');
Route::get('listado_graficas_citas/{anio}/{mes}', 'EstadisticaController@citas_graficos');
Route::get('listado_graficas_ventas', 'EstadisticaController@ventas');
Route::get('listado_graficas_ventas/{anio}/{mes}', 'EstadisticaController@ventas_graficos');




//contador de paginas

Route::get('conteo/{nombre}', 'ContadorController@updateView');
