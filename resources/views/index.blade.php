<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="{{asset('css/estilo1.css')}}">
    <link rel="stylesheet" href="normalize">
</head>
<body>
    <center>

@include('menu')
</br></br>
 <div class="general1">
     <H1>¿Quienes somos?</H1>
    <div class="texto1">
    <p>Reparaciones Eva-01 en sus casi quinientos metros cuadrados les ofrece las mejores ofertas. El asesoramiento más profesional, y en cualquier caso una buena charla sobre lo que más nos gusta.
    Nos avala el distintivo SHIMANO SERVICE CENTER, además de nuestra participación en un proyecto directamente con la fábrica de Shimano en Japón llamado S.L.D.
     Un proyecto en el trabajan muchos países del mundo en el que informamos directamente a los ingenieros japoneses del funcionamiento de sus componentes y tendencias actuales.
    </p>
    </div>
    <div class="imgtext">
    <img src="{{asset('storage')}}\imagenes\pryecto.png" class="img1">
    </div>
</div>
</br>
@include('piep')
</center>
</body>
</html>