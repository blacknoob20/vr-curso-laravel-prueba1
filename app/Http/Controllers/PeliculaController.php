<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    // Vamos a tener una carpeta por cada controlador
    public function index($pagina = 1){
        $titulo = 'Listado de mis peliculas.';
        return view('movies.index',['titulo' => $titulo, 'pagina' => $pagina]);
    }

    public function detalle(){
        return view('movies.detalle');
    }
}
