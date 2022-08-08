        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Reportes</h5>
            </div>

            <div class="col-md-8">
                <div>
                    <input type="date" name="fe_inicial" id="">
                    <input type="date" name="fe_final" id="">
                    <form action="" method="post">
                        <button type="submit" name="btnBuscar" class="btn btn-primary">Buscar</button>
                    </form>
                        
                </div>
                
            </div>
            <div>
                <table class="table table-striped table-bordered" style="width:100%" id="example">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Factura</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Usuario</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                        $sql="select * from ventas";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                    ?>

                    
                        <tr>
                            <th scope="row"><?php echo $mostrar['id_venta']?></th>
                            <td><?php echo $mostrar['fecha']?></td>
                            <td><?php echo $mostrar['cantidad']?></td>
                            <td><?php echo $mostrar['fo_producto']?></td>
                            <td><?php echo $mostrar['fo_cliente']?></td>
                            <td><?php echo $mostrar['fo_usuarios']?></td>
                        </tr>                                          
                    <?php
                        }
                    ?>
                    </tbody>
                </table>                                        
            </div>
        <?php    
            if(isset($_POST["btnBuscar"])){
                $nomb = $_POST['fe_inicial'];
                $ape= $_POST['fe_final'];
                
                echo '<script>document.location="principal.php?da1=6&da2=1"</script>';
            }
            ?>            

           
        </main>
    </div>
</div>