<?php
	$llave= $_GET['da3'];
	
	$con = "select * from producto where id_producto=$llave";
	$co = new sen($con, $conexion, 'producto');
	$co->con();
	$producto = mysqli_fetch_array($co->res);
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Modificacion de Producto</h5>
    </div>

    <div id="formulario" onsubmit ="return validarProducto();">
        <form  method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="inputAddress">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $producto[1];?>" placeholder="" require>
            </div>
    
            <div class="form-group">
                <label for="inputAddress">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $producto[2];?>" placeholder="" require>
            </div>

            <div class="form-group">
                <label for="inputAddress">Precio de Compra</label>
                <input type="number" class="form-control" id="precio_compra" name="precio_compra" value="<?php echo $producto[3];?>" placeholder="">
            </div>

            <div class="form-group">
                <label for="inputAddress">Precio de Venta</label>
                <input type="number" class="form-control" id="precio_venta" name="precio_venta" value="<?php echo $producto[4];?>" placeholder="">
            </div> 
            
            <div class="form-group">
                <label for="inputAddress">Stock Actual</label>
                <input type="number" readonly="" class="form-control" id="stock_act" name="stock_act" value="<?php echo $producto[5];?>" placeholder="">
            </div> 

            <div class="form-group">
                <label for="inputAddress">Stock Ideal</label>
                <input type="number" class="form-control" id="stock_id" name="stock_id" value="<?php echo $producto[6];?>" placeholder="">
            </div> 

            
            <button type="submit" name="boton" class="btn btn-primary"> Guardar  </button>
            
         
        </form>

       
    </div>

    <?php                     
        if(isset($_POST["boton"])){
            
            $nomb = $_POST['nombre'];
            $marc= $_POST['marca'];
            $comp= $_POST['precio_compra'];
            $vent= $_POST['precio_venta'];
            $stact=$_POST['stock_act'];
            $stid=$_POST['stock_id'];

            //edita en la base de datos
            if($nomb!=$producto[1]){
                $editar = "update  producto SET nombre='$nomb', marca='$marc', precio_compra= '$comp', precio_venta= '$vent', stock_act='$stact', stock_id= '$stid' where id_producto = $llave";
            }else{
                $editar = "update  producto SET nombre='$nomb', marca='$marc', precio_compra= '$comp', precio_venta= '$vent', stock_act='$stact', stock_id= '$stid' where id_producto = $llave";
            }    
            
            
            $ed = new sen($editar, $conexion, 'producto');
            $ed->insedbo();
            echo '<script>document.location="principal.php?da1=4&da2=1"</script>';
            //echo '<meta http-equiv="Refresh" content="0; url=principal.php?da1=2&da2=1" />;
            //header("Location: ../../principal.php?da1=2&da2=1");
        
    }?>
</main>