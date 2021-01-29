@include('includes.header')
<!-- <h1><?= $titulo ?></h1>
<h1><?= $lista[0] ?></h1> -->

<!-- Interpolación de blade o imprimir en pantalla -->
<h1>{{$titulo}}</h1>
<h2>{{$lista[0]}}</h2>
<h3>{{date('Y')}}</h3>

<!-- Comentarios en blade -->
{{-- Esto es un comentario --}}

<!-- Mostrar si existe una variable en blade (isset) -->
<!-- Asi es en laravel 5 -->
<!-- {{-- $director or 'No hay director' --}} -->
<!-- Asi es en laravel 7 -->
<p>
    {{ $director ?? 'No hay ningún director.' }}
</p>

<!-- Condicionales en blade -->
@if($titulo && count($lista) >= 5)
    <h1>El título existe y es el siguiente: {{ $titulo }} y el listado es mayor a 5.</h1>
@elseif($titulo)
    <h1>El título existe y el listado no es mayor a 5.</h1>
@else
    <h1>El título no existe.</h1>
@endif

<!-- Ciclos o bucles -->
@for($i=0; $i<=20; $i++)
    El número es: {{$i}}<br>
@endfor
<br>
<?php $contador = 1 ?>
@while($contador <= 50)
    @if($contador % 2 === 0)
        Número PAR: {{$contador}}<br>
    @endif
    <?php $contador++; ?>
@endwhile

@foreach($lista as $v)
    <p>
        {{$v}}
    </p>
@endforeach

@include('includes.footer')