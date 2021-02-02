@if(isset($fruta) && is_object($fruta))
<h1>
    Editar fruta
</h1>
@else
<h1>
    Crear fruta
</h1>
@endif
<form action="{{ action('FrutasController@guardar') }}" method="POST">
    {{ csrf_field() }}
    @if(isset($fruta) && is_object($fruta))
        <input type="hidden" name="id" value="{{$fruta->id}}">
    @endif
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{$fruta->nombre ?? ''}}"><br><br>
    <label for="descripcion">Descripción:</label>
    <input type="text" name="descripcion" value="{{$fruta->descripcion ?? ''}}"><br><br>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" value="{{$fruta->precio ?? ''}}"><br><br>
    <input type="submit" value="Guardar">
</form>