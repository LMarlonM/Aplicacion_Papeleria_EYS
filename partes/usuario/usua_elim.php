<?php
	$llave = $_GET['da3'];

	
	$bor = "delete from usuario where id_usuario = $llave";
	
	
	
	$borrar = new sen ($bor, $conexion, 'usuario');
	$borrar->insedbo();
	
	//header("Location: principal.php?da=2&da2=1");
?>