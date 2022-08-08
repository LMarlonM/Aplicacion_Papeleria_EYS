<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="principal.php">
        <img src="img/LogosN.png" alt="" width="57%">
    </a>
    
 	<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" 
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
    </button>
    
    <h2 class="col-lg-8">SOFTWARE DE FACTURACIÓN E INVENTARIO</h2>

    <ul class="navbar-nav px-3 col-lg-2">
        <li class="nav-item text-nowrap">

            <?php
				require_once("clases/conexion.php");
				require_once("clases/sentencia.php");
				session_start();
							
							
				if(isset($_SESSION['usuario'])&& $_SESSION["usuario"] != "") {	
							
					$con_u ='select * from usuario where id_usuario ='. $_SESSION['usuario'];
					$resultado = new sen($con_u, $conexion, 'usuario');
					$resultado->con();
					$usuario = mysqli_fetch_array($resultado->res);
				}
					
				else {
					header("Location: index.php");	
				}
			?>

			<div id=cerrar>
				Bienvenido:
				<?php
					echo $usuario['nombre'] . ' ' . $usuario['apellido'];
				?>
            </div>
            <a class="nav-link" href="clases/salir.php">Cerrar Sesión</a>
        </li>
    </ul>
</nav>