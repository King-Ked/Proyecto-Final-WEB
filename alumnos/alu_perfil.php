<?php
require "../conexion.php";
session_start();
$usuario_actual=$_SESSION['usuario_actual'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Alumnos</title>
		<meta name="author" content="César Josué Jacinto Serrano"/>
		<meta name="keywords" content="CSS, Modelo de caja, Box model"/>
		<meta name="description" content="Ejercicio de modelo de caja"/>
		<meta charset="utf-8"/>
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
					<li><a href="alu_perfil.php">Perfil</a></li>
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
					<table width="100%" border="1" style="color:white; text-align:center;" >
                        <tr style="background-color:black;"><td>Nombre</td><td>Usuario</td><td>Correo</td><td>Contraseña</td></tr>

                        <?php
						$consulta=mysqli_query($conexion,"SELECT nombre, usuario, correo, clave FROM usuarios WHERE usuario = '$usuario_actual'");
						//$array=$consulta->fetch_array(MYSQLI_ASSOC);
						
                        while($array = mysqli_fetch_row($consulta)){
                        ?>
                           <tr>
                           <td> <?php echo $array['0']?> </td>
						   <?php $ednombre=$array['0'];?>
                           <td> <?php echo $array['1']?> </td>
						   <?php $edusuario=$array['1']; $usuariotemp=$array['1'];?>
                           <td> <?php echo $array['2']?> </td>
						   <?php $edcorreo=$array['2'];?>
                           <td> <?php echo $array['3']?> </td>
						   <?php $edclave=$array['3'];?>
                           </tr>
                        <?php
						}
						?>

                    </table>
				</div>
				<div id="aside">
				<h3>Actualizar datos</h3><br>
					<form method="POST">
						Nombre:<br>
						<input type="text" name="ednombre" value="<?php echo $ednombre?>"/><br><br>
						Usuario:<br>
						<input name="edusuario" value="<?php echo $edusuario?>"/><br><br>
						Correo electrónico:<br>
						<input name="edcorreo" value="<?php echo $edcorreo?>"/><br><br>
						Contraseña:<br>
						<input name="edclave" value="<?php echo $edclave?>"/>
						<br><br>
						<input type="submit" name="actualizar" value="Actualizar"/>
					</form>
					<br>
					<form action="../cerrar_sesion.php" method="POST">
						<br>
						<input type="submit" name="cerrar" id="cerrar" value="Cerrar Sesión" style="width:200px; height:100px;"/>
					</form>
					<?php
						if(isset($_POST['actualizar'])){
							$ednombre=$_POST['ednombre'];
							$edusuario=$_POST['edusuario'];
							$edcorreo=$_POST['edcorreo'];
							$edclave=$_POST['edclave'];

							if($ednombre=="" || $edusuario=="" || $edcorreo=="" || $edclave==""){
								echo "<br>¡Debe llenar todos los campos!";
							}else{
								if($usuariotemp!=$edusuario){
									mysqli_query($conexion,"UPDATE usuarios SET nombre='$ednombre', usuario='$edusuario', correo='$edcorreo', clave='$edclave'
									WHERE usuario='$usuario_actual'");
									header("location: ../cerrar_sesion.php");
								}else{
									mysqli_query($conexion,"UPDATE usuarios SET nombre='$ednombre', usuario='$edusuario', correo='$edcorreo', clave='$edclave'
									WHERE usuario='$usuario_actual'");
									echo "<br>¡Datos actualizados!";
								}
							}
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