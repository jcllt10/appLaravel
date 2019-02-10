<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* ********** MANTENIMIENTO DE USUARIOS **************** */

Route::get('usuarios','UsuarioController@listadoUsuarios')->name('listarUsuarios');
Route::post('registrarUsuario','UsuarioController@registrarUsuario')->name('registroUsuario');

/* ************ MANTENIMIENTO DE ROLES *************** */

Route::get('roles','RolController@listadoRoles')->name('listarRoles');
Route::post('registrarRol','RolController@registrarRol')->name('registroRol');

/* ************** PARA LA AUTENTICACION *****************/
Route::post('login','AutenticacionController@autenticar')->name('ingresar');


/* **************  MANTENIMIENTO DE PRODUCTOS *********************/
Route::middleware(['jwt.auth'])->group(function(){

Route::get('productos','ProductoController@listadoProductos')->name('listarProductos');
Route::post('registrarProducto','ProductoController@registrarProducto')->name('registroProducto');
Route::get('buscarProducto/{idproducto}','ProductoController@buscarProducto')->name('buscarProducto');
Route::put('actualizarProducto','ProductoController@actualizarProducto')->name('actualizarProducto');
Route::delete('eliminarProducto','ProductoController@eliminarProducto')->name('eliminarProducto');

});