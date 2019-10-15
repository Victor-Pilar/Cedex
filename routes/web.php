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

Route::get('home', function(){
	return view('home');
});
Route::get('producto',function(){
	return view('producto');
});
Route::get('newproduc',function(){
	return view('newproduc');
});
Route::get('consulta',function(){
	return view('consulta');
});
Route::get('inventario','productoController@index'
);
Route::get('ventas',function(){
	return view('ventas');
});

Route::post('enviarformulario','productoController@createProduct');
Route::post('enviarconsulta', 'consultaController@createConsulta');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
