<?php
	$llave = $_GET['da3'];

	
	$bor = "delete from cliente where id_cliente = $llave";
	
	
	
	$borrar = new sen ($bor, $conexion, 'carta');
	$borrar->insedbo();
	
	//header("Location: principal.php?da=2&da2=1");
?>