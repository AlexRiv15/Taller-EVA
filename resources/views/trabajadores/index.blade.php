<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/panel/estilo2.css')}}">
    <link rel="stylesheet" href="normalize">
</head>{{}}
<body>
<center>
<div class="log">
<div class=" titulolog">
    <h1>ACCESO A TRABAJADORES</h1>
</div>




<div class="logfondo">



<form action="autentificacion.php" method="post" class=formulario name="form1">
<?php
$errorusuario = isset($_GET["errorusuario"]);
if($errorusuario == "SI"){
    echo '<font color="red"> <b>Datos incorrectos</b></font> <br>';
}

?>
<h3>Acceso Panel Administrativo</h3>

<p><input class="cajas" type="text" name="usuario"  placeholder="Usuario"></p>
<p><input class="cajas" type="text" name="password"  placeholder="Password"></p>
<p><input class="boton" type="submit" value="Log in" name="login"></p>

</form>
</br>
<div class="menu1">
<a href="{{url('/')}}" class="boton2C">Regresar</a>
</div>
</br></br>
</div>
</div>
</center>
</body>
</html>