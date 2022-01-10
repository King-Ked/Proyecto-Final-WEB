<?php
require "../conexion.php";
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
                    <form method="POST">
                    <table width="100%" border="1" style="color:white; text-align:center;" >
                        <?php
                        $q=mysqli_query($conexion,"SELECT clave FROM usuarios WHERE usuario='$usuario_actual'");
                        $clave=mysqli_fetch_row($q);
                        ?>
                        <tr style="background-color:black;"><td><br>Contraseña actual:<br><br></td><td><?php echo $clave['0'] ?></td></tr>
                        <?php
						//$consulta=mysqli_query($conexion,"SELECT nombre, usuario, correo, clave FROM usuarios WHERE usuario = '$usuario_actual' ");
						//$array=$consulta->fetch_array(MYSQLI_ASSOC);
                        
                        //while($array = mysqli_fetch_row($consulta)){
                        ?>
                        <tr height="50px"><td>Contraseña nueva:</td>
                            <td>
                                <input type="text" name="clave_nueva" />
                            </td>
                        </tr>
                        <tr height="50px">
                            <td colspan="2">
                                <input type="submit" name="actualizar_clave" value="Actualizar contraseña" style="width:200px; height:50px;"/>
                                <input type="reset" name="limpiar" value="Limpiar" style="width:200px; height:50px;"/>
                            </td>
                        </tr>
                    </table> </form>
                    <?php
                    if(isset($_POST['actualizar_clave'])){
                        $clavenew=$_POST['clave_nueva'];
						if($clavenew==""){ ?>
							<center><br><br><br><h1 style="color:white;">¡Debe ingresar una clave!</h1></center><?php
						}else{
							mysqli_query($conexion,"UPDATE usuarios SET clave = '$clavenew' WHERE usuario = '$usuario_actual'");
							?>
							<center><br><br><br><h1 style="color:white;">Clave actualizada</h1></center>
							<?php
						}
                    }
                    ?>
				</div>
				<div id="aside">
					<h1>¿Está seguro de cambiar la contraseña?</h1><br>
					<br><br><br><br><br><br><br>
					<form action="../cerrar_sesion.php" method="POST">
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