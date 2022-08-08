<?php
	require_once("clases/conexion.php");
	class sen{
		function __construct($sentenia, $conexion, $tabla) {
			$this->sent=$sentenia;
			$this->conexion =$conexion;
			$this->tabla =$tabla;
		}
//ejecuta la consulta sql		
		public function con() {
			$this->res = mysqli_query($this->conexion, $this->sent) or die("No se ejecuto la consulta a la tabla". $this->tabla);
		}
		
		//funcion que nos va a servir para inserta,editar y borrar
		public function insedbo() {
			mysqli_query($this->conexion,$this->sent) or die ('no se inserto en la tabla '. $this->tabla);		
		}
	}	
?>