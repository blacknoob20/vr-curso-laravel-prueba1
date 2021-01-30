<!-- Herencia en blade -->
@extends('layouts.master')

@section('titulo','Master en PHP')

@section('content')
    @parent()
    <h2>
        Sub-contenido de la página generica.
    </h2>
@stop

@section('content')
<h1>
    Contenido de la página generica.
</h1>
@stop