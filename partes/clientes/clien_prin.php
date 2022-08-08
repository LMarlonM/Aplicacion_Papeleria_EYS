    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Gestion de Clientes</h5>
                <form method="post" action="principal.php?da1=6&da2=2">
                    <span data-feather="user-plus"></span>
                    <button type="submit" class="btn btn-primary">Agregar Cliente</button>
                </form>
            </div>
          
            
            <!-- <table id="example" class="display table table-hover text-nowrap" style="width:100%">
            <table class="table table-striped table-bordered" style="width:100%" id="dintab"> -->

            <div>
            <table class="table table-striped table-bordered" style="width:100%" id="example">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Documento</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Email</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $sql="select * from cliente";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                        ?>

                        
                            <tr>
                                <th scope="row"><?php echo $mostrar['documento']?></th>
                                <td><?php echo $mostrar['nombre']?></td>
                                <td><?php echo $mostrar['apellidos']?></td>
                                <td><?php echo $mostrar['celular']?></td>
                                <td><?php echo $mostrar['telefono']?></td>
                                <td><?php echo $mostrar['direccion']?></td>
                                <td><?php echo $mostrar['email']?></td>


                                <td>
                                    
                                    <a href="principal.php?da1=6&da2=3&da3=<?php echo $mostrar['id_cliente']?>"><span data-feather="edit">Editar</span></a>                             
                                    
                                    <a href="principal.php?da1=6&da2=4&da3=<?php echo $mostrar['id_cliente']?>"><span data-feather="delete">Eliminar</span></a>
                                
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

   