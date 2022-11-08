<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/panel/estilo2.css')}}">
    <link rel="stylesheet" href="normalize">
</head>
<body>
    <center>
    @include('trabajadores/menu')
</br></br>
<div class="general2">
<div class="titulo1">
    <h1>Trabajadores</h1>
</div>
<div class="botonestrab">
</br></br>
<a href="{{url('/trabajadores/1')}}" class="boton1C">Ver Trabajadores</a>
<a href="{{url('/trabajadores/panel/optrabajadores/crear')}}" class="boton1C">Agregar Trabajador</a>
</div>
</div>
</center>
</body>
</html>