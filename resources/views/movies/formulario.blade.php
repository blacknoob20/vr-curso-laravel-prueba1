<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Formulario en Laravel
    </h1>
    <form action="{{ action('PeliculaController@recibir') }}" method="POST">
        {{ csrf_field() }}
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email">
        <br>
        <br>
        <input type="submit" name="btn_enviar" value="Enviar">
    </form>
</body>
</html>