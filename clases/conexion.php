<?php
//datos para conectar a mysql	
	$servidor = "localhost";
	$usuario = "root";
	$clave = "";
	$based = "papeleria2";
	
	$conexion = mysqli_connect($servidor, $usuario, $clave) or die ("No se conecto a Mysql") ;
	
	//conectar a la base de datos
		
	mysqli_select_db($conexion, $based) or die ("No se conecto a la base de datos papeleria"); 

	//utf8 para que todos los simbolos en español salgan bien
	mysqli_set_charset($conexion, "utf8");
?>
