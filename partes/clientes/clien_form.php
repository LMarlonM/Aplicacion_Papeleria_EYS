        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Registro de Clientes</h5>
            </div>
            <div>
                <form method="post" onsubmit ="return validarCliente();">
                
                    <div class="form-group">
                        <label for="inputAddress">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Apellido</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
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
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    
                    
                    <button type="submit" name="boton-a" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </main>
 
<?php
    if(isset($_POST['boton-a'])){
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $celular = $_POST["celular"];
        $telefono = $_POST["telefono"];
        $direccion = $_POST["direccion"];
        $email = $_POST["email"];

		$insertar = "insert into cliente (nombre, apellidos, celular, telefono, direccion, email) VALUES ('$nombre', '$apellidos', '$celular', '$telefono', '$direccion', '$email')";
		$ins = new sen($insertar,$conexion, 'cliente');	
		$ins->insedbo();
        
        echo '<script>document.location="principal.php?da1=6&da2=1"</script>';
		//header ("Location: principal.php?da1=2&da2=1");
		//header('Location: ../../principal.php?da1=2&da2=1');
    }
?>
