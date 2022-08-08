<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Registro de Proveedores</h5>
    </div>

    <form method="POST" onsubmit ="return validarProveedor();" >
            
            <div class="form-group">
                <label for="inputAddress">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
            </div>

            <div class="form-group">
                <label for="inputAddress">Celular</label>
                <input type="number" class="form-control" id="celular" name="celular" placeholder="Celular">
                
            </div>

            <div class="form-group">
                <label for="inputAddress">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
            </div>

            <div class="form-group">
                <label for="inputAddress2">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direcion">
            </div>

            <div class="form-group">
                <label for="inputAddress">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            
            
            <button type="submit" name="boton-a" class="btn btn-primary">Agregar</button>
        </form>
</main>


<?php
    if(isset($_POST['boton-a'])){
        $nomb = $_POST['nombre'];
        $celu= $_POST['celular'];
        $tele= $_POST['telefono'];
        $dire= $_POST['direccion'];
        $emai= $_POST['email'];
     		
		$insertar = "insert into proveedor(`nombre`, `celular`, `telefono`, `direccion`, `email`) values('$nomb' , '$celu', '$tele' , '$dire', '$emai')";
		$ins = new sen($insertar,$conexion, 'provedor');	
		$ins->insedbo();
        
        echo '<script>document.location="principal.php?da1=7&da2=1"</script>';
		//header ("Location: principal.php?da1=2&da2=1");
		//header('Location: ../../principal.php?da1=2&da2=1');
    }
?>