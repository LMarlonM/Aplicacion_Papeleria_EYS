<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/validar.js"></script>

<?php
	require_once('partes/header_pri.php');
	require_once('partes/cabecera.php');echo "<br>";"<br>";"<br>";"<br>";
	//require_once('partes/Login_form.php');
?>
	
	<!--login de la aplicación2-->

	<h5>Acceso al Sistema</h5> <br>
	
	<div class="row">
	    <div class="col-lg-4"></div>
	    <div class="col-lg-4" id="acceso">
	        <form method="post" onsubmit ="return validarCampo();">
	            <input type="email" id="email" name="email" placeholder="E-mail" class="form-control"><br>
	            <input type="password" id ="clave" name="clave" placeholder="Contraseña" class="form-control" /><br/><br/>
	            <input type="submit" name="boton" value="Ingresar" name="boton" class="btn btn-primary" id="boton" /> 
	            
	            <a class="text-muted" href="#" id="recuperar">Recuperar Contraseña</a>
	        </form>
	    </div>
	    <div class="col-lg-4"></div>
	</div>
	
	<?php
		
		require_once("clases/conexion.php");
		require_once("clases/sentencia.php");
		session_start();
	 	
		if(isset($_POST["boton"])){
			$email =  $_POST["email"];
			$clave = sha1($_POST["clave"]);
			
			$sql = "select * from usuario where email = '$email' AND clave ='$clave' "; 
			
			$consulta = new sen($sql, $conexion, "usuarios");
			$consulta->con();
			
			$usuario = mysqli_fetch_array($consulta->res);
			
			if($usuario["email"]!=""){
				$_SESSION["usuario"]= $usuario["id_usuario"];
				header("Location:principal.php?da1=9&da2=0");	
			}else{?>
				<!-- echo '<script>document.location="index.php"</script>'; -->
				<!-- <script>
					document.getElementById("email").value="";
					document.getElementById("clave").value="";
					
				</script>  -->
				<script>error();</script>
				<!-- <script src="js/sweetAlert.js"></script>	 -->			
				<?php
				
			}
		}
	?>
	
	<?php
		require_once('partes/footer.php');
		require_once('partes/js.php');
	?>
	
	<!-- <script src="js/sweetAlert.js"></script> -->
	<!-- <script>error();</script> -->