<?php 
include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo2.css">
    <link rel="stylesheet" href="normalize">
</head>
<body>
    <center>
<?php
include "menu.php"
?>
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
<?php
require "conexion.php";
$todos_usuarios = "SELECT * FROM trabajador";
$resultado = mysqli_query($conectar, $todos_usuarios);
while($row = mysqli_fetch_assoc($resultado)){
    ?>
    <tr class="infotabla">
        <td><?php echo $row["id_trabajador"]; ?></td>
        <td><img src="<?php echo $row["foto"]; ?>" class="foto_chica"></td>
        <td><?php echo $row["nombre_usuario"]; ?></td>
        <td><?php echo $row["puesto"]; ?></td>
        <td><?php echo $row["contrasena"]; ?></td>
        <td><a href="#" onClick="validar('eliminar_trabajador.php?id_trabajador=<?php echo $row ['id_trabajador']; ?>')">Eliminar</a></td>
</tr>
<?php
}
mysqli_free_result($resultado);
?>

</table>
<script>
    function validar(url)
    {
        var eliminar=confirm("Realmente deseas ELIMINAR a la PERSONA");
        if (eliminar==true)
        {
            window.location=url;
        }
    }
</script>
</div>
</div>

</center>
</body>
</html>