<?php
require "../conexion.php";
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
		<link rel="stylesheet" type="text/css" href="../estilos.css">
	</head>
	<body>
		<div id="principal">
			<div id="header">
				<h1>Profesores</h1>
			</div>
			<div id="nav"><!--MENU DE NAVEGACIÓN-->
				<ul class="menu">
					<li><a href="../profesor.php">Inicio</a></li>
					<li><a href="">Consulta</a>
						<ul class="submenu">
							<li><a href="consulta_alumnos.php">Por alumno</a></li>
							<li><a href="">Por grupo</a>
								<ul>
									<li><a href="grupo2CV15.php">2CV15</a></li>
									<li><a href="grupo2CV16.php">2CV16</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="">Gestión de temas</a>
						<ul class="submenu">
							<li><a href="">Tipo de material</a>
								<ul>
									<li><a href="videos.php">Video</a></li>
									<li><a href="imprimir.php">Material para imprimir</a></li>
									<li><a href="">Actividad en línea</a></li>
									<li><a href="">Evaluación</a></li>
								</ul>
							</li>
							<li><a href="">Seleccionar bloque</a>
								<ul>
									<li><a href="gestion_bloque1.php">Bloque 1</a></li>
									<li><a href="gestion_bloque2.php">Bloque 2</a></li>
									<li><a href="gestion_bloque3.php">Bloque 3</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="profe_perfil.php">Actualizar perfil</a></li>
				</ul>
			</div>
			<div id="contenido">
				<div class="contenedorP">
                    <table width="100%" border="1" style="color:white; text-align:center;" >
                        <tr style="background-color:black;"><td>ID del Material</td><td>Nombre</td><td>Subtema</td><td>URL</td></tr>

                        <?php
						$consulta=mysqli_query($conexion,"SELECT * FROM imprimir ");
						//$array=$consulta->fetch_array(MYSQLI_ASSOC);
						
                        while($array = mysqli_fetch_row($consulta)){
                        ?>
                           <tr>
                           <td> <?php echo $array['0']?> </td>
                           <td> <?php echo $array['1']?> </td>
                           <td> <?php echo $array['2']?> </td>
                           <td> <a href="<?php echo $array['3']?>"><?php echo $array['3']?></a> </td>
                           </tr>
                        <?php
						}
						?>

                    </table>
				
				</div>
				<div id="aside">
                <br>
					<h4>Agregar Material:</h4>
                    <br>
               		<form method="POST">
						<input type="text" name="nombre" placeholder="Nombre"/><br><br>
                        <input type="text" name="subtema" placeholder="Subtema"/><br><br>
                        <input type="text" name="url" placeholder="URL"/><br>
                        <br>
						<input type="submit" name="agregar_material" id="agregar_material" value="Agregar Material"/><br><br>
						<br>
						<h4>Eliminar Material:</h4><br>
						<input type="text" name="id" placeholder="Ingrese id para eliminar"/>
                        <br><br>
						<input type="submit" name="eliminar_material" id="eliminar_material" value="Eliminar Material"/>
					</form>
					<br>
					<form action="../cerrar_sesion.php" method="POST">
						<input type="submit" name="cerrar" id="cerrar" value="Cerrar Sesión" style="width:200px; height:80px;"/>
					</form>
					<?php
						if(isset($_POST['agregar_material'])){
							$nombre=$_POST['nombre'];
                            $subtema=$_POST['subtema'];
                            $url=$_POST['url'];
							//$tipo=$_POST['bloque'];

							if($nombre=="" || $subtema=="" || $url==""){
								echo "<br>¡Debes llenar los campos!";
							}else{
							mysqli_query($conexion,"INSERT INTO imprimir (id_mat, nombre, subtema, URL) 
							VALUES('','$nombre','$subtema','$url')");
							}
						}
						if(isset($_POST['eliminar_material'])){
							$id=$_POST['id'];
							mysqli_query($conexion,"DELETE FROM imprimir WHERE id_mat = '$id'");
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