        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Registro de Productos</h5>
            </div>

            <form method="POST" onsubmit ="return validarProducto();">
                    
                    <div class="form-group">
                        <label for="inputAddress">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" require>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="" require>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Precio de Compra</label>
                        <input type="number" class="form-control" id="precio_compra" name="precio_compra" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Precio de Venta</label>
                        <input type="number" class="form-control" id="precio_venta" name="precio_venta" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Stock Actual</label>
                        <input type="number" class="form-control" id="stock_act" name="stock_act" placeholder="">
                    </div> 

                    <div class="form-group">
                        <label for="inputAddress">Stock Ideal</label>
                        <input type="number" class="form-control" id="stock_id" name="stock_id" placeholder="">
                    </div> 
                    
                    <button type="submit" name="boton-a" class="btn btn-primary">Agregar Producto</button>
                </form>
        </main>

        <?php
            if(isset($_POST['boton-a'])){
                $nombre = $_POST["nombre"];
                $marca = $_POST["marca"];
                $precio_compra = $_POST["precio_compra"];
                $precio_venta = $_POST["precio_venta"];
                $stock_act = $_POST["stock_act"];
                $stock_id = $_POST["stock_id"];
                    
                $insertar = "INSERT INTO producto (nombre, marca, precio_compra, precio_venta, stock_act, stock_id) VALUES ('$nombre', '$marca', '$precio_compra', '$precio_venta', '$stock_act', '$stock_id')";
                $ins = new sen($insertar,$conexion, 'producto');	
                $ins->insedbo();
                
                echo '<script>document.location="principal.php?da1=4&da2=1"</script>';
                //header ("Location: principal.php?da1=2&da2=1");
                //header('Location: ../../principal.php?da1=2&da2=1');
            }
        ?>
