<!-- <script src="formulario.js"></script> -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div id="formulario">
    
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h5>Registro Usuario</h5>
                </div>
                
                <div>
                    <form method="POST" onsubmit ="return validarUsuario();">
                        <div class="form-group">
                            <label for="inputAdress">Nombres</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" >
                        </div>
                
                        <div class="form-group">
                            <label for="inputAdress">Apellidos</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" >
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputState">Cargo</label>
                            <select id="inputState" class="form-control" id="cargo" name="cargo">
                                <option selected>Seleccione</option>
                                <option>Admin</option>
                                <option>Vendedor</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputAdress">Celular</label>
                            <input type="number" class="form-control" id="celular" name="celular" placeholder="Celular">
                        </div>

                        <div class="form-group">
                            <label for="inputAdress">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="inputAdress">Contraseña</label>
                            <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña" >
                        </div>
                        <button type="submit" class="btn btn-primary" name='boton-a'>Agregar   </button>       
                    </form>
                </div>
        </div>
</main>


<?php
    if(isset($_POST['boton-a'])){
        $nomb = $_POST['nombre'];
        $apre= $_POST['apellido'];
        $carg= $_POST['cargo'];
        $celu= $_POST['celular'];
        $emai= $_POST['email'];
        $clav= $_POST['clave'];

     		
		$insertar = "insert into usuario(`nombre`, `apellido`, `cargo`, `celular`, `email`, `clave`) values('$nomb' , '$apre', '$carg' , '$celu', '$emai', sha1('$clav'))";
		$ins = new sen($insertar,$conexion, 'usuario');	
		$ins->insedbo();
        
        echo '<script>document.location="principal.php?da1=2&da2=1"</script>';
		//header ("Location: principal.php?da1=2&da2=1");
		//header('Location: ../../principal.php?da1=2&da2=1');
    }
    /* if(isset($_POST['boton-a'])){
        echo '<script>document.location="principal.php?da1=2&da2=1"</script>';
    } */
?>
