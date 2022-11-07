<div class="lineanegra">
</div>
<div class="menugen1">
</br>
    <div class="imgmen">
        <img src="{{asset('storage')}}\imagenes\pryecto.png" class="img2">
    </div>
    <div class="tiempo">
    <div class="horario">
    <div class="wrap">
            <div class="widget">
                <div class="fecha">
                    <p id="diaSemana" class="diaSemana"></p>
                    <p id="dia" class="dia"></p>
                    <p class="de">de</p>
                    <p id="mes" class="mes"></p>
                    <p class="del">del</p>
                    <p id="year" class="year"></p>
                </div>

                <div class="reloj">
                    <p id="horas" class="horas"></p>
                    <p class="dos">:</p>
                    <p id="minutos" class="minutos"></p>
                    <p id="ampm" class="ampm"></p>
                </div>
            </div>
        </div>
        <script src="{{asset('js/reloj.js')}}"></script>
    </div>
    </div>
    <div class="nombre">
    <img src="{{asset('storage')}}\imagenes\eva01.jpg" class="imgeva1">
        <h1> Taller de bicicletas "EVA-01"</h1>
    </div>
</div>

<div class="menu">
</br></br>
  <a href="{{url('/trabajadores/panel')}}">Inicio</a>
  <a href="{{url('/trabajadores/panel/optrabajadores')}}">Trabajadores</a>
  <a href="citas.php">Citas</a>
  <a href="salir.php">Cerrar sesion</a>
</div>