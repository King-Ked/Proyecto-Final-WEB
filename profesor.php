<?php
session_start();
$usuario_actual=$_SESSION['usuario_actual'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profesores</title>
		<meta name="author" content="César Josué Jacinto Serrano"/>
		<meta name="keywords" content="CSS, Modelo de caja, Box model"/>
		<meta name="description" content="Vista de profesores"/>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>
		<div id="principal">
			<div id="header">
				<h1>Profesores</h1>
			</div>
			<div id="nav"><!--MENU DE NAVEGACIÓN-->
				<ul class="menu">
					<li><a href="profesor.php">Inicio</a></li>
					<li><a href="">Consulta</a>
						<ul class="submenu">
							<li><a href="profes/consulta_alumnos.php">Por alumno</a></li>
							<li><a href="">Por grupo</a>
								<ul>
									<li><a href="profes/grupo2CV15.php">2CV15</a></li>
									<li><a href="profes/grupo2CV16.php">2CV16</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="">Gestión de temas</a>
						<ul class="submenu">
							<li><a href="">Tipo de material</a>
								<ul>
									<li><a href="profes/videos.php">Video</a></li>
									<li><a href="profes/imprimir.php">Material para imprimir</a></li>
									<li><a href="">Actividad en línea</a></li>
									<li><a href="">Evaluación</a></li>
								</ul>
							</li>
							<li><a href="">Seleccionar bloque</a>
								<ul>
									<li><a href="profes/gestion_bloque1.php">Bloque 1</a></li>
									<li><a href="profes/gestion_bloque2.php">Bloque 2</a></li>
									<li><a href="profes/gestion_bloque3.php">Bloque 3</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="profes/profe_perfil.php">Actualizar perfil</a></li>
				</ul>
			</div>
			<div id="contenido">
				<div class="contenedorP">
					<p>Este modulo le permitirá gestionar el contenido relacionado a los temas de matemáticas de nivel primaria, podrá consultar
					los diferentes tipos de materiales ordenados por tipo o por bloque.<br><br>
					Consulte el registro de los alumnos, tanto por grupo como por alumno, que se han dado de alta en la plataforma, además de 
					el progreso de las actividades de cada uno.<br>
					Actualice los datos de su perfil de maestro en la plataforma.
					</p>
					
				
				</div>
				<div id="aside">
					<h3>¡Bienvenido <?php echo $usuario_actual?>!</h3><br><br>
					
					<form action="cerrar_sesion.php" method="POST">
						<br><br>
						<input type="submit" name="cerrar" id="cerrar" value="Cerrar Sesión" style="width:200px; height:100px;"/>
					</form>
					
				</div>
			</div>
			
		</div>
		<div id="footer">
			Todos los derechos reservados. Aula Virtual.
		</div>
	</body>
</html>