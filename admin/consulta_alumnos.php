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
                        <tr style="background-color:black;"><td>id</td><td>Nombre</td><td>Usuario</td><td>Correo</td><td>Contraseña</td><td>Grupo</td></tr>

                        <?php
						$consulta=mysqli_query($conexion,"SELECT * FROM usuarios WHERE tipo = 'Alumno' ");
						//$array=$consulta->fetch_array(MYSQLI_ASSOC);
						
                        while($array = mysqli_fetch_row($consulta)){
                        ?>
                           <tr>
                           <td> <?php echo $array['0']?> </td>
                           <td> <?php echo $array['1']?> </td>
                           <td> <?php echo $array['2']?> </td>
                           <td> <?php echo $array['3']?> </td>
                           <td> <?php echo $array['4']?> </td>
                           <td> <?php echo $array['6']?> </td>
                           </tr>
                        <?php
						}
						?>

                    </table>
				</div>
				<div id="aside">
					<h4>Agregar alumno:</h4>
               		<form method="POST">
						<input type="text" name="nombre" placeholder="nombre"/><br>
						<input type="text" name="usuario" placeholder="usuario"/><br>
						<input type="text" name="correo" placeholder="correo"/><br>
						<input type="text" name="contraseña" placeholder="contraseña"/><br>
						<select name="grupo">
							<option value="Seleccione un grupo">Seleccione un grupo</option>
							<option value="2CV15">2CV15</option>
							<option value="2CV16">2CV16</option>
						</select><br><br>
						<input type="submit" name="agregar_usuario" id="agregar_usuario" value="Agregar usuario"/><br><br>
						
						<h4>Asignar grupo:</h4><br>
						<input type="text" name="asg_id" placeholder="ingrese id"/><br>
						<select name="asigrupo">
							<option value="Seleccione un grupo">Seleccione un grupo</option>
							<option value="2CV15">2CV15</option>
							<option value="2CV16">2CV16</option>
						</select><br>
						<input type="submit" name="asignar_grupo" value="Asignar grupo"/><br><br>
						
						<h4>Eliminar usuario:</h4><br>
						<input type="text" name="id" placeholder="ingrese id para eliminar"/><br>
						<input type="submit" name="eliminar_usuario" id="eliminar_usuario" value="Eliminar usuario"/>
					</form>
					<br>
					<form action="../cerrar_sesion.php" method="POST">
						<input type="submit" name="cerrar" id="cerrar" value="Cerrar Sesión" style="width:200px; height:80px;"/>
					</form>
					<?php
						if(isset($_POST['agregar_usuario'])){
							$nombre=$_POST['nombre'];
							$usuario=$_POST['usuario'];
							$correo=$_POST['correo'];
							$contraseña=$_POST['contraseña'];
							//$tipo=$_POST['tipo_usuario'];
							$tipo="Alumno";
							$grupo=$_POST['grupo'];
							
							if($nombre=="" || $usuario=="" || $correo=="" || $contraseña=="" || $grupo=="Seleccione un grupo"){
								echo "<br>¡Debe llenar todos los campos!";
							}else{
								$q=mysqli_query($conexion,"SELECT usuario FROM usuarios WHERE usuario='$usuario'");
								$row=mysqli_fetch_row($q);
								if($row['0']==NULL){
									mysqli_query($conexion,"INSERT INTO usuarios (id,nombre,usuario,correo,clave,tipo,grupo) 
									VALUES('','$nombre','$usuario','$correo','$contraseña','$tipo','$grupo')");
									echo "<br>Usuario registrado.";
								}else{
									echo "<br>Registro duplicado, ingrese otro.";
								}
								
							}
						}
						if(isset($_POST['eliminar_usuario'])){
							$id=$_POST['id'];
							mysqli_query($conexion,"DELETE FROM usuarios WHERE id = '$id'");
						}
						if(isset($_POST['asignar_grupo'])){
							$id=$_POST['asg_id'];
							$asigrupo=$_POST['asigrupo'];
							mysqli_query($conexion,"UPDATE usuarios SET grupo = '$asigrupo' WHERE id = '$id'");
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