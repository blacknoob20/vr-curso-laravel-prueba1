<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título - @yield('titulo')</title>
</head>
<body>
    @section('header')
        Cabecera de la WEB (master)
    @show
    <div class="container">
        @yield('content')
    </div>
    @section('footer')
        Pie de la WEB (master)
    @show
</body>
</html>