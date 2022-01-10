<?php
session_start();
$usuario_actual=$_SESSION['usuario_actual'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Alumnos</title>
    <meta name="keywords" content="CSS, Modelo de caja, Box model" />
    <meta name="description" content="Ejercicio de modelo de caja" />
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../estilos.css" />
    <link rel="stylesheet" type="text/css" href="../actividad.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
  </head>
  <body>
    <div id="principal">
      <div id="header">
        <h1>Alumnos</h1>
      </div>
      <div id="nav">
        <ul class="menu">
          <li>
            <a href="">Temario</a>
            <ul>
              <li><a href="bloque_1.php">Bloque 1</a></li>
              <li><a href="bloque_2.php">Bloque 2</a></li>
              <li><a href="bloque_3.php">Bloque 3</a></li>
            </ul>
          </li>
          <li>
            <a href="">Material de clase</a>
            <ul>
              <li><a href="libro.php">Libro digital</a></li>
              <li><a href="material.php">Material para imprimir</a></li>
              <li><a href="video.php">Video</a></li>
              <li><a href="actividad.php">Actividad en Linea</a></li>
              <li><a href="actividades.php">Evaluación</a></li>
            </ul>
          </li>
          <li><a href="alu_perfil.php">Perfil</a></li>
          <li>
            <a href="">Soporte</a>
            <ul>
              <li><a href="agendarcita.php">Agendar cita</a></li>
              <li><a href="ayuda.php">Ayuda</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div id="contenido">
        <div class="contenedorP">
          <div class="contenedorPre">
            <div class="puntaje" id="puntaje"></div>
            <div class="encabezado">
              <div class="categoria" id="categoria"></div>
              <div class="numero" id="numero"></div>
              <div class="pregunta" id="pregunta"></div>
              <img src="#" class="imagen" id="imagen" />
            </div>
            <div class="bton" id="btn1" onclick="oprimir_btn(0)"></div>
            <div class="bton" id="btn2" onclick="oprimir_btn(1)"></div>
            <div class="bton" id="btn3" onclick="oprimir_btn(2)"></div>
            <div class="bton" id="btn4" onclick="oprimir_btn(3)"></div>

            <script src="actividad.js"></script>
          </div>
        </div>
        <div id="aside">
          <h3>
            ¡Bienvenido
            <?php echo $usuario_actual?>!
          </h3>
          <br /><br />
          <form action="../cerrar_sesion.php" method="POST">
            <br /><br />
            <input
              type="submit"
              name="cerrar"
              id="cerrar"
              value="Cerrar Sesión"
              style="width: 200px; height: 100px"
            />
          </form>
        </div>
      </div>
    </div>
    <div id="footer">Todos los derechos reservados. Aula Virtual.</div>
  </body>
</html>
