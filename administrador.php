<?php
session_start();
$usuario_actual=$_SESSION['usuario_actual'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Administrador</title>
		<meta name="author" content="César Josué Jacinto Serrano"/>
		<meta name="keywords" content="CSS, Modelo de caja, Box model"/>
		<meta name="description" content="Vista de administrador"/>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>
		<div id="principal">
			<div id="header">
				<h1>Administrador</h1>
			</div>
			<div id="nav"><!--MENU DE NAVEGACIÓN-->
				<ul class="menu">
					<li><a href="">Gestionar</a>
						<ul>
							<li><a href="">Temas</a>
								<ul>
									<li><a href="admin/consulta_bloque1.php">Bloque 1</a></li>
									<li><a href="admin/consulta_bloque2.php">Bloque 2</a></li>
									<li><a href="admin/consulta_bloque3.php">Bloque 3</a></li>
								</ul>
							</li>
							<li><a href="">Usuarios</a>
								<ul>
									<li><a href="admin/consulta_admins.php">Administradores</a></li>
									<li><a href="admin/consulta_alumnos.php">Alumnos</a></li>
									<li><a href="admin/consulta_profes.php">Profesores</a></li>
									<li><a href="admin/consulta_todos.php">Todos</a></li>
								</ul>
							</li>
						</ul>
					</li>
					
					<li><a href="admin/adm_perfil.php">Perfil</a></li>
					<li><a href="admin/adm_cam_clave.php">Cambiar contraseña</a></li>
					<li><a href="admin/soporte.php">Soporte</a></li>
				</ul>
			</div>
			<div id="contenido">
				<div class="contenedorAdm">
					
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