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
<div class="form1">
    <h1>Agregar Trabajador</h1>
    <div class="form2">
<form action="{{url('/trabajadores')}}" name="guardarform" method="post" enctype="multipart/form-data">
@csrf
<p>Nombre: <input class="cajas2" type="text" name="nombre_usuario" required ></p>

<p>Contraseña: <input class="cajas12" type="password" name="contrasena" required >
<p> <select name="puesto" class="cajas3"  id="">
<option value="0" class="caja3"  >Seleccione un puesto</option>
<option value="mecanico" class="caja3"  >Mecanico</option>
<option value="administrador" class="caja3"  >Administrador</option>
<option value="gerente" class="caja3"  >Gerente</option></p>
</select>
<p><input class="cajas4" type="file" name="foto"  placeholder="Agragr archivo"></p>
<p><input class="botonsub" type="submit" value="Agregar"></p>
</div>
</div>
</center>
</body>
</html>