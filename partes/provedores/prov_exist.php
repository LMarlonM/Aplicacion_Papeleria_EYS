        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Gestion de Proveedores</h5>

                <form method="POST" action="principal.php?da1=7&da2=2">
                <span data-feather="user-plus"></span>
                <button type="submit" class="btn btn-primary">Agregar Proveedor</button>

            </form>
            </div>

            <div>
            <table class="table table-striped table-bordered" style="width:100%" id="example">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Email</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                        $sql="select * from proveedor";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                    ?>

                    
                        <tr>
                            <th scope="row"><?php echo $mostrar['id_proveedor']?></th>
                            <td><?php echo $mostrar['nombre']?></td>
                            <td><?php echo $mostrar['celular']?></td>
                            <td><?php echo $mostrar['telefono']?></td>
                            <td><?php echo $mostrar['direccion']?></td>
                            <td><?php echo $mostrar['email']?></td>

                            <td>                              
                                <a href="principal.php?da1=7&da2=4&da3=<?php echo $mostrar['id_proveedor']?>"><span data-feather="edit">Editar</span></a>                             
                                
                                <a href="principal.php?da1=7&da2=3&da3=<?php echo $mostrar['id_proveedor']?>"><span data-feather="delete">Eliminar</span></a>
                            </td>
                        </tr>                        
                    

                    <?php
                        }
                    ?>
                    </tbody>
                </table>                                   
            </div>

           
        </main>
    </div>
</div>

