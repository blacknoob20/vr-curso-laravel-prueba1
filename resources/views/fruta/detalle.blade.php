<h1>
    {{$fruta->nombre}}
</h1>
<p>
    {{$fruta->descripcion}}
</p>
<a href="{{action('FrutasController@borrar',['id'=>$fruta->id])}}">Eliminar</a>
<a href="{{action('FrutasController@editar',['id'=>$fruta->id])}}">Actualizar</a>