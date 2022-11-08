<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <title>Aprende</title>
    <link rel="stylesheet" href="{{asset('css/estilo1.css')}}">

    <link rel="stylesheet" href="normalize">
</head>
<body>
    <center>

    @include('menu')
</br></br>
 <div class="general1">
     <H1>Aprende lo basico</H1>
     <div class="video">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/RpqCJeRQk3I" 
        title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
</br>
@include('piep')
</center>
</body>
</html>