<?php
	$llave= $_GET['da3'];
	
	$con = "select * from cliente where id_cliente=$llave";
	$co = new sen($con, $conexion, 'cliente');
	$co->con();
	$cliente = mysqli_fetch_array($co->res);
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Modificacion de Clientes</h5>
    </div>

    <div id="formulario">
        <form method="post" onsubmit ="return validarCliente();">  
            <div class="form-group">
                <label for="inputAdress">Nombres</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $cliente[1];?>" placeholder="Nombres">
            </div>
    
            <div class="form-group">
                <label for="inputAdress">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $cliente[2];?>" placeholder="Apellidos">
            </div>

            <div class="form-group">
                <label for="inputAdress">Celular</label>
                <input type="number" class="form-control" id="celular" name="celular" value="<?php echo $cliente[3];?>" placeholder="Celular">
            </div>

            <div class="form-group">
                <label for="inputAdress">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" value="<?php echo $cliente[4];?>" placeholder="Telefono">
            </div>

            <div class="form-group">
                <label for="inputAdress">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $cliente[5];?>" placeholder="Direccion">
            </div>

            <div class="form-group">
                <label for="inputAdress">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $cliente[6];?>" placeholder="Email">
            </div>                    

            
            <button type="submit" name="boton" class="btn btn-primary">Guardar</button>
            
         
        </form>
    </div>

    <?php                     
        if(isset($_POST["boton"])){
            
            $nomb = $_POST['nombre'];
            $ape= $_POST['apellidos'];
            $celu= $_POST['celular'];
            $tel= $_POST['telefono'];
            $dir= $_POST['direccion'];
            $emai= $_POST['email'];

            //edita en la base de datos
            if($emai!=$cliente[6]){
                $editar = "update  cliente SET nombre='$nomb', apellidos='$ape', celular= '$celu', telefono= '$tel', direccion= '$dir', email= '$emai' where id_cliente = $llave";
            }else{
                $editar = "update  cliente SET nombre='$nomb', apellidos='$ape', celular= '$celu', telefono= '$tel', direccion= '$dir', email= '$emai' where id_cliente = $llave";
            }    
            
            
            $ed = new sen($editar, $conexion, 'cliente');
            $ed->insedbo();
            echo '<script>document.location="principal.php?da1=6&da2=1"</script>';
        
        }?>
</main>