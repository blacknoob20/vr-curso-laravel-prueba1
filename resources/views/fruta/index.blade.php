<h1>
    Listado de frutas
</h1>
<h3>
    <a href="{{action('FrutasController@crear')}}">Crear fruta</a>
</h3>
@if(session('staus'))
<p style="color: green">
    {{session('staus')}}
</p>
@endif
<ul>
    
    @foreach ($frutas as $fruta)
        <li>
            <a href="{{action('FrutasController@detalle',['id' => $fruta->id])}}">{{$fruta->nombre}}</a>
        </li>
    @endforeach
</ul>