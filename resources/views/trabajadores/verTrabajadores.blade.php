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
<div class="general3">
<div class="trab">
    <h1>Trabajadores</h1>
</div>
<div class="tabladiv">
</br>
<table class="tabla">
<tr>
<td>ID</td>
<td>Foto</td>
<td>Nombre</td>
<td>Puesto</td>
<td>contraseña</td>
<td>Eliminar</td>
</tr>

    <tr class="infotabla">
        <td>id></td>
        <td>Foto</td>
        <td>nombre_usuario</td>
        <td>puesto</td>
        <td>contrasena</td>
        <td><a href="#">Eliminar</a></td>
</tr>


</table>

</div>
</div>

</center>
</body>
</html>