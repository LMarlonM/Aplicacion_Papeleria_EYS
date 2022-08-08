        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Gestion de Productos y Ordenes de Compra</h5>

                <form method="post" action="principal.php?da1=4&da2=2">
                    <button type="submit" class="btn btn-primary">Agregar Producto</button>
                </form>

            </div>

            <div>
                <table class="table table-striped table-bordered" style="width:100%" id="example">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Precio de Compra</th>
                            <th scope="col">Precio de Venta</th>
                            <th scope="col">Stock Actual</th>
                            <th scope="col">Stock Ideal</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                        $sql="select * from producto";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                    ?>

                    
                        <tr>
                            <th scope="row"><?php echo $mostrar['id_producto']?></th>
                            <td><?php echo $mostrar['nombre']?></td>
                            <td><?php echo $mostrar['marca']?></td>
                            <td><?php echo $mostrar['precio_compra']?></td>
                            <td><?php echo $mostrar['precio_venta']?></td>
                            <td><?php echo $mostrar['stock_act']?></td>
                            <td><?php echo $mostrar['stock_id']?></td>

                            <td>                               
                                <a href="principal.php?da1=4&da2=3&da3=<?php echo $mostrar['id_producto']?>"><span data-feather="edit">Editar</span></a>                             
                                
                                <a href="principal.php?da1=4&da2=4&da3=<?php echo $mostrar['id_producto']?>"><span data-feather="delete">Eliminar</span></a>
                            </td>
                        </tr>                        
                    

                    <?php
                        }
                    ?>
                    </tbody>
                </table>                                        
            </div>
            

            <br>
            <form method="post" action="principal.php?da1=4&da2=5">                
                <button type="submit" class="btn btn-success">Generar Ordenes de Compra</button>
            </form>

        </main>
    </div>
</div>
