<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    //
    public function index($pagina = 1)
    {
        $titulo = 'Listado de mis peliculas';

        return view('movies.index', array('titulo' => $titulo, 'pagina' => $pagina));
    }

    public function detalle()
    {
        return view('movies.detalle');
    }

    public function formulario()
    {
        return view('movies.formulario');
    }

    // Recibir los datos del POST
    public function recibir(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');

        // var_dump($nombre);
        return 'El nombre es: '.$nombre.', el email es: '.$email;
    }

    public function redirigir()
    {
        // Forma 1
        // return redirect()->action('PeliculaController@detalle');
        // Forma 2
        // return redirect('/movies');
        // Forma 3
        return redirect()->route('detalle.movie');
    }
}
