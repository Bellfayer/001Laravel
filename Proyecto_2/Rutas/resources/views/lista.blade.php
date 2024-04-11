<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <h1>Lista de Elementos</h1>
    <ul>
        @foreach($lista as $elemento)
            <li>{{ $elemento }}</li>
        @endforeach
    </ul>
</body>
</html>
