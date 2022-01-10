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
            <div class="contenedorA" style="color:white;">
                <h1>Ayuda</h1><br>
                <h3>Esta aplicación ayudará a alumnos para consultar sus materiales y poder realizar sus actividades
                     para que el, la o los alumnos puedan realizar por medio de formularios o juegos de dichas actividades.....etc.</h3>
                <br>
                <hr>
                <br>
                <h3>si se te olvida la contraseña deberás ingresar en el enlace ubicado en la barra
                    lateral derecha “se te olvidó la contraseña”, al ingresar se encuentra datos que te
                    piden para poder restablecer la contraseña o solo indicas tu correo electrónico y
                    palabra secreta y con ello ya se le envía la clave actual, se recomienda después
                    de eso cambiar su contraseña.</h3>
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