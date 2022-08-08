        
<?php
	$llave= $_GET['da3'];
	
	$con = "select * from proveedor where id_proveedor=$llave";
	$co = new sen($con, $conexion, 'proveedor');
	$co->con();
	$proveedor = mysqli_fetch_array($co->res);
?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Registro de proveedores</h5>
            </div>

            <form method="POST" enctype="multipart/form-data" onsubmit ="return validarProveedor();">
                    
                    <div class="form-group">
                        <label for="inputAddress">Nombre</label>
                        <input type="text" value="<?php echo $proveedor[1];?>" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Celular</label>
                        <input type="text" value="<?php echo $proveedor[2];?>" class="form-control" id="celular" name="celular" placeholder="Celular">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Telefono</label>
                        <input type="text" value="<?php echo $proveedor[3];?>" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress2">Dirccion</label>
                        <input type="text" value="<?php echo $proveedor[4];?>" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Email</label>
                        <input type="email" value="<?php echo $proveedor[5];?>" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    
                    
                    <button type="submit" name="boton" class="btn btn-primary">Guardar</button>
                </form>
                <?php                     
                    if(isset($_POST["boton"])){
                        
                        $nomb = $_POST['nombre'];
                        $celu= $_POST['celular'];
                        $tele= $_POST['telefono'];
                        $dire= $_POST['direccion'];
                        $emai= $_POST['email'];

                        //edita en la base de datos
                        $editar = "update  proveedor SET nombre='$nomb', celular='$celu', telefono= '$tele', direccion= '$dire', email= '$emai' where id_proveedor = $llave";
                      
                        
                        $ed = new sen($editar, $conexion, 'usuario');
                        $ed->insedbo();
                        echo '<script>document.location="principal.php?da1=7&da2=1"</script>';

                    // header("Location: ../../principal.php?da1=2&da2=1");
                    

                     



                    
                }?>
        </main>