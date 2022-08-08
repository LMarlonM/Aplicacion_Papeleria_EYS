        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Orden de compra de Productos</h5>
            </div>

            <div>
                <table class="table table-striped table-bordered" style="width:100%" id="dintab">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Proveedor</th>                 
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio de Compra</th>
                            <th scope="col">Unidades a Comprar</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php

                        $sql="SELECT marca, nombre, precio_compra, stock_id, (stock_id - stock_act) as unidades, ((stock_id - stock_act)*precio_compra) as tot from producto ORDER BY marca ";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){

                            if ($mostrar['unidades'] > 0.25 * $mostrar['stock_id']) {
                                
                              
                    ?>

                    
                        <tr>
                            <td><?php echo $mostrar['marca']?></td>
                            <td><?php echo $mostrar['nombre']?></td>
                            <td><?php echo $mostrar['precio_compra']?></td>
                            <td><?php echo $mostrar['unidades']?></td>
                            <td>$ <?php echo $mostrar['tot']?></td>
                        </tr>                        
                    

                    <?php
                            }
                        }
                    ?>
                    </tbody>
                </table>                                        
            </div>

            <form method="post" action="#">                
                <button type="submit" class="btn btn-primary">Imprimir Ordenes</button>
            </form>

        </main>
    </div>
</div>
