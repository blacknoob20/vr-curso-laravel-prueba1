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

Route::get('/', function () {
    return view('welcome');
});

// Rutas que llaman a un controlador
// para indicar el metodo de la clase que se desea llamar se usa @
//Sintaxis: {nombre_clase@metodo|funcion}
Route::get('/peliculas/{pagina?}','PeliculaController@index');
Route::get('/detalle',[
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula'
]);
Route::resource('/usuario','UsuarioController');
