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
@foreach($trabajadores as $trabajador)
    <tr class="infotabla">
        <td>{{$trabajador->id}}</td>
        <td>
            <img src="{{asset('storage')}}.'/'.{{$trabajador->foto}}" alt="Foto Alterna" width="50px" high="100px">
        </td>
        <td>{{$trabajador->nombre_usuario}}</td>
        <td>{{$trabajador->puesto}}</td>
        <td>{{$trabajador->contrasena}}</td>
        <td>
            <form method="post" action="{{url('/trabajadores/'.$trabajador->id)}}">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Estás seguro que quieres eliminar a este empleado?')" value="ELIMINAR">
            </form>
        </td>
</tr>
@endforeach

</table>

</div>
</div>

</center>
</body>
</html>