<?php
	/*Conexión de la BD */
	
	require 'conexion.php';
	session_start();	
	$_SESSION['usuario_actual']=$_POST['usuario'];//Usuario de la sesión actual

	$usuario=$_POST['usuario'];
	$contraseña=$_POST['clave'];
	$tipo=$_POST['tipo_usuario'];

	

	$consulta=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$usuario' AND tipo = '$tipo'");
	$array=$consulta->fetch_array(MYSQLI_ASSOC);
	
	if($array['clave']==$contraseña && $array['tipo']=="Alumno"){
		header("location: ./alumno.php");
	
	}else if($array['clave']==$contraseña && $array['tipo']=="Profesor"){
		header("location: ./profesor.php");

	}else if($array['clave']==$contraseña && $array['tipo']=="Administrador"){
		header("location: ./administrador.php");

	}else{
		echo "<h1>Datos incorrectos.</h1><br>";
		echo "<a href='index.html'>Regresar</h1>";
	}


	


	


?>