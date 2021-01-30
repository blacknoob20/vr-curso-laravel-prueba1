<h1>{{$titulo}}</h1>
<p>(Acción del controlador)</p>
@if(isset($pagina))
    <h3>
        La página es: {{$pagina}}
    </h3>
@endif

<a href="{{ action('PeliculaController@detalle') }}">Ir al Detalle</a>