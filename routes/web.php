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
    // return view('welcome');
    echo '<h1>Hola mundo.!!</h1>';
});

Route::get('/movies/{pagina?}', 'PeliculaController@index');
// Route::get('/detalle', [
//     'uses' => 'PeliculaController@detalle',
//     'as'   => 'detalle.movie'
//     ]);
// Middelwares
Route::get('/detalle/{anio?}', [
    //Aplicar el middleware
    'middleware' => 'testanio'
    'uses'       => 'PeliculaController@detalle',
    'as'         => 'detalle.movie'
    ]);
    
Route::get('/redirigir', 'PeliculaController@redirigir');
Route::resource('usuario','UsuarioController');
// Las rutas tienen los siguientes métodos
// get:    conseguir datos
// post:   guardar datos
// put:    actualizar recursos
// delete: eliminar recursos
/*
Route::get('/mostrar-fecha', function(){
    // echo '<h1>Fecha Actual</h1>';
    // echo date('d/m/Y');
    // echo '<br>';
    // echo '<a href="http://localhost/prueba1/public/">Inicio</a>';
    
    // Llamar al archivo mostrar-fecha.blade.php
    // return view('mostrar-fecha');

    // Pasar parámetros a la vista
    $titulo = 'Estoy mostrando la fecha';
    return view('mostrar-fecha', array(
        'titulo' => $titulo
    ));
});

// Recibir parámetros URL
// Route::get('/pelicula/{titulo}', function($titulo){
// Para convertir en parámetro opcional
// Route::get('/pelicula/{titulo?}', function($titulo = 'Spiderman'){
//     return view('pelicula', array(
//         'titulo' => $titulo
//     ));
// });
// La ruta se puede condicionar
Route::get('/pelicula/{titulo}/{anio}', function($titulo, $anio){
    return view('pelicula', array(
        'titulo' => $titulo,
        'anio' => $anio
    ));
})->where(array(
    // La condición es una expresión regular
    'titulo' => '[a-zA-Z]+',
    'anio'  => '[0-9]+'
));

// Vistas dentro de carpetas
// Route::get('/listado-peliculas', function(){
//     $titulo = 'Listado de peliculas';

//     // Para especificar que la vista está en una carpeta
//     return view('movies.listado', array(
//         'titulo' => $titulo
//     ));
// });

// Otra manera de enviar parámetros a la vista.
Route::get('/listado-peliculas', function(){
    $titulo = 'Listado de peliculas';
    $lista = array('Spiderman', 'Hulk', 'Thor', 'Ironman');

    // Para especificar que la vista está en una carpeta
    return view('movies.listado')
            ->with('titulo', $titulo)
            ->with('lista', $lista);
});

Route::get('/pagina-generica', function(){
    return view('generica');
});
*/