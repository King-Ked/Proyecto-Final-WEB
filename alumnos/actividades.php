<?php
require "../conexion.php";
session_start();
$usuario_actual = $_SESSION['usuario_actual'];
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../estilos.css">
</head>

<body>
    <div id="principal">
        <div id="header">
            <h1>Alumnos</h1>
        </div>
        <div id="nav">
            <ul class="menu">
                <li><a href="">Temario</a>
                    <ul>
                        <li><a href="bloque_1.php">Bloque 1</a></li>
						<li><a href="bloque_2.php">Bloque 2</a></li>
						<li><a href="bloque_3.php">Bloque 3</a></li>
                    </ul>
                </li>
                <li><a href="">Material de clase</a>
                    <ul>
                        <li><a href="libro_digital.php">Libro digital</a></li>
                        <li><a href="material.php">Material para imprimir</a></li>
                        <li><a href="video.php">Video</a></li>
                        <li><a href="actividad.php">Actividad en Linea</a></li>
                        <li><a href="actividades.php">Evaluación</a></li>
                    </ul>
                </li>
                <li><a href="../alumnos/alu_perfil.php">Perfil</a></li>
                <li><a href="">Soporte</a>
                    <ul>
                        <li><a href="agendarcita.php">Agendar cita</a></li>
                        <li><a href="ayuda.php">Ayuda</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="contenido">
            <div class="contenedorA">
                <h1><a href="../actividades/act1/actividad1.php" style="color:white;">Actividad 1</a></h1>
            </div>
            <div id="aside">
                <h3>¡Bienvenido <?php echo $usuario_actual ?>!</h3><br><br>
                <form action="../cerrar_sesion.php" method="POST">
                    <br><br>
                    <input type="submit" name="cerrar" id="cerrar" value="Cerrar Sesión" style="width:200px; height:100px;" />
                </form>
            </div>
        </div>
    </div>
    <div id="footer">
        Todos los derechos reservados || Aula Virtual.
    </div>
</body>
</html>