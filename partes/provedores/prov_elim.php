<?php
	$llave = $_GET['da3'];

	
	$bor = "delete from proveedor where id_proveedor = $llave";
	
	
	
	$borrar = new sen ($bor, $conexion, 'usuario');
	$borrar->insedbo();
	
	//header("Location: principal.php?da=2&da2=1");
?>