<?php
	include ("../conexion.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registro de usuario</title>
		<meta name="author" content="César Josué Jacinto Serrano"/>
		<meta name="keywords" content="CSS, Modelo de caja, Box model"/>
		<meta name="description" content="Vista de usuarios no registrados a la plataforma"/>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="../estilos.css">
	</head>
	<body>
		<div id="principal">
			<div id="header">
				<h1>Usuario No Registrado</h1>
			</div>
			<div id="nav">
				<ul class="menu">
					<li><a href="../index.html">Inicio</a></li>
					<li><a href="unr_acercade.html">Acerca de...</a></li>
					<li><a href="preguntasfrecuentes.php">Preguntas frecuentes</a></li>
					<li><a href="unr_contacto.html">Contacto</a></li>
				</ul>
			</div>
			<div id="contenido">
				<div class="UNR_acerca">
					<div class="contenido_title">
					<h2>Ingrese los siguientes datos para recuperar su contraseña:</h2><br>
					</div>
					<div class="contenido_centro">

					<form action="" method="POST">
						Nombre completo:
						<input type="text" name="nombre" id="nombre"  required=""/><br>
						Nombre de usuario:
						<input type="text" name="usuario" id="usuario" required=""/><br>
						Correo electrónico:
						<input type="text" name="correo" id="correo" required=""/><br>
						<input type="submit" name="recuperar" value="Recuperar contraseña" style="width:130px; height:40px; margin-left: 120px;"/>
					</form>
					<?php
						 if(isset($_POST['recuperar'])){
							if($_POST['nombre']=="" || $usuario = $_POST['usuario']=="" || $correo = $_POST['correo']==""){
								echo "<br>¡Debe llenar todos los campos!";
							}else{
								$nombre = $_POST['nombre'];
								$usuario = $_POST['usuario'];
								$correo = $_POST['correo'];

								$q=mysqli_query($conexion,"SELECT clave FROM usuarios WHERE nombre='$nombre' AND usuario='$usuario' AND correo='$correo'");
								$datos=mysqli_fetch_row($q);

								if($datos['0']==NULL){
									echo "<br>No se encontró registro, verifique sus datos.";
								}else{
									echo "<br>Su contraseña es: ",$datos['0'];
								}
							}
						 }else{
							$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
						 	$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : "";
						 	$correo = isset($_POST['correo']) ? $_POST['correo'] : "";
						 } 
					?>
					</div>
				</div>
			</div>
			
		</div>
		<div id="footer">
			Todos los derechos reservados. Aula Virtual.
		</div>
	</body>
</html>