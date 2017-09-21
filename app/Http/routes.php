<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function(){
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', [
		'uses'=>'UsersController@destroy',

		'as'=> 'admin.users.destroy'

               ]);

	Route::resource('clientes','ClientesController');
	Route::get('clientes/{id}/destroy', [
		'uses'=>'ClientesController@destroy',

		'as'=> 'admin.clientes.destroy'


               ]);
	Route::get('articulos/buscar',[
	'uses'=>'ProductosController@buscar',
	'as'=>'admin.articulos.buscar'
	]);
	Route::resource('articulos','ProductosController');
	Route::get('articulos/{id}/destroy', [
		'uses'=>'ProductosController@destroy',

		'as'=> 'admin.articulos.destroy'

		
               ]);


	Route::resource('configuracion','ConfiguracionController');
	Route::get('configuracion/{id}/destroy', [
		'uses'=>'ConfiguracionController@destroy',

		'as'=> 'admin.configuracion.destroy'

		
               ]);

	Route::resource('ventas','VentasController');
	Route::get('ventas/{id}/destroy', [
		'uses'=>'VentasController@destroy',

		'as'=> 'admin.ventas.destroy'

		
               ]);


	});