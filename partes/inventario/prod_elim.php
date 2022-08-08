<?php
	$llave = $_GET['da3'];

	
	$bor = "delete from producto where id_producto = $llave";
	
	
	
	$borrar = new sen ($bor, $conexion, 'carta');
	$borrar->insedbo();
	
	//header("Location: principal.php?da=2&da2=1");
?>