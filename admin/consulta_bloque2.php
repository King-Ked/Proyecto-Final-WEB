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
                        <tr style="background-color:black;"><td>Bloque</td><td>ID Tema</td><td>Tema</td></tr>

                        <?php
						$consulta=mysqli_query($conexion,"SELECT * FROM temario WHERE bloque = 2 ");
						//$array=$consulta->fetch_array(MYSQLI_ASSOC);
						
                        while($array = mysqli_fetch_row($consulta)){
                        ?>
                           <tr>
                           <td> <?php echo $array['0']?> </td>
                           <td> <?php echo $array['1']?> </td>
                           <td> <?php echo $array['2']?> </td>
                           </tr>
                        <?php
						}
						?>

                    </table>
				</div>
				<div id="aside">
                    <br>
					<h4>Agregar Tema:</h4>
                    <br>
               		<form method="POST">
						<input type="text" name="tema" placeholder="Tema"/><br>
                        <br>
						<input type="submit" name="agregar_tema" id="agregar_tema" value="Agregar tema"/><br><br>
						<br>
						<h4>Eliminar tema:</h4><br>
						<input type="text" name="id" placeholder="Ingrese id para eliminar"/>
                        <br><br>
						<input type="submit" name="eliminar_tema" id="eliminar_tema" value="Eliminar tema"/>
					</form>
					<br>
					<form action="../cerrar_sesion.php" method="POST">
						<input type="submit" name="cerrar" id="cerrar" value="Cerrar Sesión" style="width:200px; height:80px;"/>
					</form>
					<?php
						if(isset($_POST['agregar_tema'])){
							$tema=$_POST['tema'];
							//$tipo=$_POST['bloque'];
							$bloque=2;

							if($tema==""){
								echo "<br>¡Debe ingresar un tema!";
							}else{
							mysqli_query($conexion,"INSERT INTO temario (bloque, id_tema, tema) 
							VALUES('$bloque','','$tema')");
							}
						}
						if(isset($_POST['eliminar_tema'])){
							$id=$_POST['id'];
							mysqli_query($conexion,"DELETE FROM temario WHERE id_tema = '$id'");
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