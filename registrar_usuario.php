<?php
	/*Conexión de la BD */
	include("conexion.php");

	if($_POST){//si se presiona el boton "enviar"
		$nombre=$_POST['nombre'];
		$usuario=$_POST['usuario'];
		$correo=$_POST['correo'];
		$contraseña=$_POST['clave'];
		$tipo=$_POST['tipo_usuario'];
		
		if($nombre=="" || $usuario=="" || $correo=="" || $contraseña=="" || $tipo==""){
			echo "<h1>¡Debe llenar todos los campos!</h1><br>
			<a href='registro.html'>Volver</a>";
		}else{
			$q=mysqli_query($conexion,"SELECT usuario FROM usuarios WHERE usuario='$usuario'");
			$row=mysqli_fetch_row($q);
			if($row['0']==NULL){
				mysqli_query($conexion,"INSERT INTO usuarios(id,nombre,usuario,correo,clave,tipo) 
				VALUES('','$nombre','$usuario','$correo','$contraseña','$tipo')") or die (mysqli_error());
		
				echo "
				<h1>Usuario registrado</h1><br><br>
				<a href='index.html'>Volver al inicio</a>
				";	
			}else{
				echo "<h1>Ya existe un registro con ese nombre de usuario, ingrese otro.</h1><br>
				<a href='registro.html'>Volver</a>";
			}
		}
	}
?>