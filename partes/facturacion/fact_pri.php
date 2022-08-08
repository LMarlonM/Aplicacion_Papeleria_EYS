        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Generar Ventas y Consultar Facturas</h5>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="form-group">
                            <h5 class="text-left">Datos del Cliente</h5>
                            <br>    
                            <a href="#" class="btn btn-primary btn_new_cliente"><i class="fas fa-user-plus"></i> Nuevo Cliente</a>
                        </div>

                        <div class="card">

                            <div class="card-body">

                                <form method="post" name="form_new_cliente_venta" id="form_new_cliente_venta">
                                    <input type="hidden" name="action" value="addCliente">
                                    <input type="hidden" id="idcliente" value="" name="idcliente" required>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Documento</label>
                                                <input type="number" name="doc_cliente" id="doc_cliente" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" name="nom_cliente" id="nom_cliente" class="form-control" disabled required>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Apellidos</label>
                                                <input type="text" name="ape_cliente" id="ape_cliente" class="form-control" disabled required>
                                            </div>
                                        </div>
                    
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Celular</label>
                                                <input type="number" name="cel_cliente" id="cel_cliente" class="form-control" disabled required>
                                            </div>
                                        </div>
                        
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Dirreción</label>
                                                <input type="text" name="dir_cliente" id="dir_cliente" class="form-control" disabled required>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="email" name="mail_cliente" id="mail_cliente" class="form-control" disabled required>
                                            </div>
                                        </div>

                                        <div id="div_registro_cliente" style="display: none;">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <h4 class="text-center">Datos Venta</h4>
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group text-center">
                                        <label><i class="fas fa-user"></i> VENDEDOR</label>
                                        <p style="font-size: 16px; text-transform: uppercase; color: blue;"><?php echo $usuario['nombre'] . ' ' . $usuario['apellido']; ?></p>
                                    </div>
                                </div>

                                <div class="col-lg-6 text-center">
                                    <label>Acciones</label>
                                    <div id="acciones_venta" class="form-group">
                                        <a href="#" class="btn btn-success" id="btn_facturar_venta"><i class="fas fa-save"></i> Generar Venta</a>
                                        <a href="#" class="btn btn-danger" id="btn_anular_venta">Cancelar</a>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <br>
                        <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th width="200px">Producto</th>
                                            <th>Stock</th>
                                            <th width="100px">Cantidad</th>
                                            <th class="textright">Precio</th>
                                            <th class="textright">Precio Total</th>
                                            <th>Acciones</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <datalist id="suggestions">
                                                        <?php
                                                            $con_prod = "SELECT * FROM producto ORDER BY nombre";
                                                            $res = mysqli_query($conexion,$con_prod) or die('No se Consulto');
                                                            while($prod = mysqli_fetch_array($res)){
                                                        ?>

                                                        <option value="<?php echo $prod['id_producto']; ?>" label="<?php echo $prod['nombre'].' '.$prod['marca']; ?>"> 
                                                            <?php $prod['nombre']; ?>                                                        
                                                        </option>
                                                                
                                                        <?php
                                                            }
                                                        ?>
                                                    </datalist>
                                                    <input  autoComplete="on" list="suggestions"/> 
                                                </div>                                            
                                            </td>
                                            <td id="txt_existencia">-</td>
                                            <td><input type="text" name="txt_cant_producto" id="txt_cant_producto"value="0" min="1" disabled></td>
                                            <td id="txt_precio" class="textright">0.00</td>
                                            <td id="txt_precio_total" class="txtright">0.00</td>
                                            <td><a href="#" id="add_product_venta" class="btn btn-dark" style="display: none;">Agregar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Marca</th>
                                            <th>Cantidad</th>
                                            <th class="textright">Precio</th>
                                            <th class="textright">Precio Total</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="detalle_venta">
                                        <!-- Contenido ajax -->

                                    </tbody>

                                    <tfoot id="detalle_totales">
                                        <!-- Contenido ajax -->
                                    </tfoot>
                                </table>

                            </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>