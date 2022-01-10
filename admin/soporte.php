<?php
require "../conexion.php";
//$array=$consulta->fetch_array(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin - Consulta Alumnos</title>
		<meta name="author" content="César Josué Jacinto Serrano"/>
		<meta name="keywords" content="CSS, Modelo de caja, Box model"/>
		<meta name="description" content="Vista de administrador"/>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="../estilos.css">
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
									<li><a href="consulta_bloque1.php">Bloque 1</a></li>
									<li><a href="consulta_bloque2.php">Bloque 2</a></li>
									<li><a href="consulta_bloque3.php">Bloque 3</a></li>
								</ul>
							</li>
							<li><a href="">Usuarios</a>
								<ul>
									<li><a href="consulta_admins.php">Administradores</a></li>
									<li><a href="consulta_alumnos.php">Alumnos</a></li>
									<li><a href="consulta_profes.php">Profesores</a></li>
									<li><a href="consulta_todos.php">Todos</a></li>
								</ul>
							</li>
						</ul>
					</li>
					
					<li><a href="adm_perfil.php">Perfil</a></li>
					<li><a href="adm_cam_clave.php">Cambiar contraseña</a></li>
					<li><a href="soporte.php">Soporte</a></li>
				</ul>
			</div>
			<div id="contenido">
				<div class="contenedorAdm">
					<table width="100%" border="1" style="color:white; text-align:center;" >
                    <br>
                        <tr style="background-color:black;"><td>ID duda</td><td>Asunto</td><td>Correo</td><td>Mensaje</td><td>Nombre</td><td>Telefono</td></tr>

                        <?php
						$consulta=mysqli_query($conexion,"SELECT * FROM soporte");
						//$array=$consulta->fetch_array(MYSQLI_ASSOC);
						
                        while($array = mysqli_fetch_row($consulta)){
                        ?>
                           <tr>
                           <td> <?php echo $array['0']?> </td>
                           <td> <?php echo $array['1']?> </td>
                           <td> <?php echo $array['2']?> </td>
                           <td> <?php echo $array['3']?> </td>
                           <td> <?php echo $array['4']?> </td>
                           <td> <?php echo $array['5']?> </td>
                           </tr>
                        <?php
						}
						?>

                    </table>
				</div>
				<div id="aside">
                    <br><br><br><br><br>

					<h4>Eliminar Duda:</h4>
                    <br>
               		<form method="POST">
						<input type="text" name="id" placeholder="Id a eliminar"  required=""/><br>
                        <br>
						<input type="submit" name="eliminar_duda" id="eliminar_duda" value="Eliminar Duda"/><br><br>
						<br>
					</form>
					<br>
					<form action="../cerrar_sesion.php" method="POST">
						<input type="submit" name="cerrar" id="cerrar" value="Cerrar Sesión" style="width:200px; height:80px;"/>
					</form>
					<?php
						if(isset($_POST['eliminar_duda'])){
							$id = $_POST['id'];

							mysqli_query($conexion,"DELETE FROM soporte WHERE id_duda = '$id'");
						}
					?>
				</div>
			</div>
			
		</div>
		<div id="footer">
			Todos los derechos reservados. Aula Virtual.
		</div>
	</body>
</html>