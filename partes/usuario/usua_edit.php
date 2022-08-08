
<?php
	$llave= $_GET['da3'];
	
	$con = "select * from usuario where id_usuario=$llave";
	$co = new sen($con, $conexion, 'usuario');
	$co->con();
	$usuario = mysqli_fetch_array($co->res);
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Registro de nuevo usuario</h5>
    </div>

    <div id="formulario">
        <form  method="POST" enctype="multipart/form-data" onsubmit ="return validarUsuario();">

            <div class="form-group">
                <label for="inputAdress">Nombres</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuario[1];?>" placeholder="Nombres" >
            </div>
    
            <div class="form-group">
                <label for="inputAdress">Apellidos</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $usuario[2];?>" placeholder="Apellidos" >
            </div>

            <div class="form-group col-md-4">
                <label for="inputState">Cargo</label>
                <select id="inputState" class="form-control" id="cargo" name="cargo" value="" >
                    <option selected value='' <?php if (!(strcmp('', $usuario[3]))) {echo "selected=\"selected\"";} ?> >Seleccione</option>
                    <option value='Admin'     <?php if (!(strcmp('Admin', $usuario[3]))) {echo "selected=\"selected\"";} ?> >Admin  </option>
                
                    <option value='Vendedor' <?php if (!(strcmp('Vendedor', $usuario[3]))) {echo "selected=\"selected\"";} ?> >Vendedor</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputAdress">Celular</label>
                <input type="number" class="form-control" id="celular" name="celular" value="<?php echo $usuario[4];?>" placeholder="Celular" >
            </div>

            <div class="form-group">
                <label for="inputAdress">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $usuario[5];?>" placeholder="Email" >
            </div>

            <div class="form-group">
                <label for="inputAdress">Contraseña</label>
                <input type="password" class="form-control" id="clave" name="clave" value="<?php echo $usuario[6];?>" placeholder="Contraseña" >
            </div>

            
            <button type="submit" name="boton" class="btn btn-primary">Guardar  </button>
            
         
        </form>
    </div>

    <?php                     
        if(isset($_POST["boton"])){
            
            $nomb = $_POST['nombre'];
            $apre= $_POST['apellido'];
            $carg= $_POST['cargo'];
            $celu= $_POST['celular'];
            $emai= $_POST['email'];
            $clav= $_POST['clave'];

            //edita en la base de datos
            if($clav!=$usuario[6]){
                $editar = "update  usuario SET nombre='$nomb', apellido='$apre', cargo= '$carg', celular= '$celu', email= '$emai', clave= sha1('$clav') where id_usuario = $llave";
            }else{
                $editar = "update  usuario SET nombre='$nomb', apellido='$apre', cargo= '$carg', celular= '$celu', email= '$emai', clave= ('$clav') where id_usuario = $llave";
            }    
            
            
            $ed = new sen($editar, $conexion, 'usuario');
            $ed->insedbo();
            echo '<script>document.location="principal.php?da1=2&da2=1"</script>';

           // header("Location: ../../principal.php?da1=2&da2=1");
        
    }?>
</main>