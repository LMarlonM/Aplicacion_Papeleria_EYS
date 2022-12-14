<!DOCTYPE html>
<html>
			<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
			<script src="js/validar.js"></script>
            <script src="js/validar_cliente.js"></script>
            <script src="js/validar_proveedor.js"></script>
            <script src="js/validar_usuario.js"></script>
            <script src="js/validar_Producto.js"></script>
            <script src="js/daterange/daterangepicker.js"> </script>
    		<script src="js/daterange/moment.min.js"> </script>
            <script src="js/jquery.min.js"></script>
            <script src="js/funciones.js"></script>
			<link rel="stylesheet" href="datatable2/bootstrap.css">
    		<link rel="stylesheet" href="datatable2/datatables.min.css">
            <link href="css/daterangepicker.css" type="text/css" rel="stylesheet">

	<?php
		require_once('partes/header_pri.php');
	?>

	<body>

		<!-- Header -->
			<?php require_once('partes/header_ap.php'); ?>
		<!-- Menu -->
			<?php require_once('partes/menu.php'); ?>    
		<!-- Contenido -->

		<?php
			$dato1 = $_GET["da1"];
			$dato2 = $_GET["da2"];
		
			switch($dato1) {
				//contenido principal de la aplicacion
				case 1:
					require_once("partes/conte_pri.php");
					break;
				
				//Control de Usuario
				case 2:
					switch($dato2){
						//Muestra usuario existentes
						case 1:
							require_once("partes/usuario/usua_exist.php");
						break;

						//Agregar Usuario
						case 2:
							require_once("partes/usuario/usua_agre.php");
						break;
						
						//Editar Usuario
						case 3:
							$da3 = $_GET["da3"];
							require_once("partes/usuario/usua_edit.php");				
						break;

						//Eliminar Usuario
						case 4:
							$dato3 = $_GET["da3"];
							require_once("partes/usuario/usua_elim.php");
							require_once("partes/usuario/usua_exist.php");							
						break;		
					}
				break;
				//Control de Facturacion		
				case 3:
					switch($dato2){
						
						case 1:
							require_once("partes/facturacion/fact_pri.php");
							break;
						case 2:
							require_once("partes/facturacion/fact_ge.php");
							break;
						case 3:
							require_once("partes/facturacion/fact_con.php");
							break;
					}
				break;
				//control inventario
				case 4:
					switch($dato2){

						
						//Productos Existentes
						case 1:
							require_once("partes/inventario/prod_prin.php");
						break;

						//Agregar Producto
						case 2:
							require_once("partes/inventario/prod_form.php");
						break;

						//Editar Producto
						case 3:
							$da3 = $_GET["da3"];
							require_once("partes/inventario/prod_edit.php");				
						break;

						//Eliminar Producto
						case 4:
							$dato3 = $_GET["da3"];
							require_once("partes/inventario/prod_elim.php");
							require_once("partes/inventario/prod_prin.php");							
						break;	

						//Ordenes de Compra
						case 5:
							require_once("partes/inventario/orden_compra.php");							
						break;	
					}
				break;
                
                //Reportes

				case 5:
					switch($dato2){

						case 1:
							require_once("partes/reportes/reportes.php");
						break;
					}
				break;

				//control clientes

				case 6:
					switch($dato2){
						case 1:
							require_once("partes/clientes/clien_prin.php");
							break;
						//Agregar Usuario
						case 2:
							require_once("partes/clientes/clien_form.php");
						break;
						
						//Editar Usuario
						case 3:
							$da3 = $_GET["da3"];
							require_once("partes/clientes/clien_edit.php");				
						break;

						//Eliminar Usuario
						case 4:
							$dato3 = $_GET["da3"];
							require_once("partes/clientes/clien_elim.php");
							require_once("partes/clientes/clien_prin.php");							
						break;		
					}
				break;

				//control de provedores

				case 7:
					switch($dato2){
						//Proveedor Existentes	
						case 1:
							require_once("partes/provedores/prov_exist.php");
							break;
						//Agregar Proveedor
						case 2:
							require_once("partes/provedores/prov_agre.php");
							break;
						//Eliminar Proveedor
						case 3:
							$dato3 = $_GET["da3"];
							require_once("partes/provedores/prov_elim.php");
							require_once("partes/provedores/prov_exist.php");
							break;
						//Editar Proveedor
						case 4:
							$dato3 = $_GET["da3"];
							require_once("partes/provedores/prov_edit.php");
							break;	
					}
				break;

                //Soporte

				case 8:
					switch($dato2){

						case 1:
							require_once("partes/soporte.php");
						break;
					}
				break;

				// viene de la pagina index, solo para que muestre el mensaje de bienvenida
				case 9:
					require_once("partes/conte_pri.php");
					?>
					<script>bienvenido();</script>
					<?php 
					break;
			}
		?>

		<!-- Footer -->
			<?php require_once('partes/footer.php'); ?>

		<!-- Scripts -->
			<?php require_once('partes/js_app.php'); ?>
			<?php require_once('partes/js.php'); ?>

			<script src="datatable2/jquery.min.js"></script>
            <script src="datatable2/bootstrap.js"></script>
            <script src="datatable2/datatables.min.js"></script>

    
    
    <!-- Edioma Espa??ol de la table -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                language: espanol 
            });
        } );

        let espanol= {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ning??n dato disponible en esta tabla",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
            "paginate": {
                "first": "Primero",
                "last": "??ltimo",
                "next": "Siguiente",
                "previous": "Anterior"
            },

            "aria": {
                "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
            },

            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad",
                "collection": "Colecci??n",
                "colvisRestore": "Restaurar visibilidad",
                "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                "copySuccess": {
                    "1": "Copiada 1 fila al portapapeles",
                    "_": "Copiadas %d fila al portapapeles"
                },
                
                "copyTitle": "Copiar al portapapeles",
                "csv": "CSV",
                "excel": "Excel",
                "pageLength": {
                    "-1": "Mostrar todas las filas",
                    "1": "Mostrar 1 fila",
                    "_": "Mostrar %d filas"
                },

                "pdf": "PDF",
                "print": "Imprimir"
            },

            "autoFill": {
                "cancel": "Cancelar",
                "fill": "Rellene todas las celdas con <i>%d<\/i>",
                "fillHorizontal": "Rellenar celdas horizontalmente",
                "fillVertical": "Rellenar celdas verticalmentemente"
            },

            "decimal": ",",
            "searchBuilder": {
                "add": "A??adir condici??n",
                "button": {
                    "0": "Constructor de b??squeda",
                    "_": "Constructor de b??squeda (%d)"
                },
                "clearAll": "Borrar todo",
                "condition": "Condici??n",
                "conditions": {
                    "date": {
                        "after": "Despues",
                        "before": "Antes",
                        "between": "Entre",
                        "empty": "Vac??o",
                        "equals": "Igual a",
                        "notBetween": "No entre",
                        "notEmpty": "No Vacio",
                        "not": "Diferente de"
                    },
                    "number": {
                        "between": "Entre",
                        "empty": "Vacio",
                        "equals": "Igual a",
                        "gt": "Mayor a",
                        "gte": "Mayor o igual a",
                        "lt": "Menor que",
                        "lte": "Menor o igual que",
                        "notBetween": "No entre",
                        "notEmpty": "No vac??o",
                        "not": "Diferente de"
                    },
                    "string": {
                        "contains": "Contiene",
                        "empty": "Vac??o",
                        "endsWith": "Termina en",
                        "equals": "Igual a",
                        "notEmpty": "No Vacio",
                        "startsWith": "Empieza con",
                        "not": "Diferente de"
                    },
                    "array": {
                        "not": "Diferente de",
                        "equals": "Igual",
                        "empty": "Vac??o",
                        "contains": "Contiene",
                        "notEmpty": "No Vac??o",
                        "without": "Sin"
                    }
                },
                "data": "Data",
                "deleteTitle": "Eliminar regla de filtrado",
                "leftTitle": "Criterios anulados",
                "logicAnd": "Y",
                "logicOr": "O",
                "rightTitle": "Criterios de sangr??a",
                "title": {
                    "0": "Constructor de b??squeda",
                    "_": "Constructor de b??squeda (%d)"
                },
                "value": "Valor"
            },

            "searchPanes": {
                "clearMessage": "Borrar todo",
                "collapse": {
                    "0": "Paneles de b??squeda",
                    "_": "Paneles de b??squeda (%d)"
                },
                "count": "{total}",
                "countFiltered": "{shown} ({total})",
                "emptyPanes": "Sin paneles de b??squeda",
                "loadMessage": "Cargando paneles de b??squeda",
                "title": "Filtros Activos - %d"
            },

            "select": {
                "1": "%d fila seleccionada",
                "_": "%d filas seleccionadas",
                "cells": {
                    "1": "1 celda seleccionada",
                    "_": "$d celdas seleccionadas"
                },
                "columns": {
                    "1": "1 columna seleccionada",
                    "_": "%d columnas seleccionadas"
                }
            },

            "thousands": ".",
            "datetime": {
                "previous": "Anterior",
                "next": "Proximo",
                "hours": "Horas",
                "minutes": "Minutos",
                "seconds": "Segundos",
                "unknown": "-",
                "amPm": [
                    "am",
                    "pm"
                ]
            },

            "editor": {
                "close": "Cerrar",
                "create": {
                    "button": "Nuevo",
                    "title": "Crear Nuevo Registro",
                    "submit": "Crear"
                },
                "edit": {
                    "button": "Editar",
                    "title": "Editar Registro",
                    "submit": "Actualizar"
                },
                "remove": {
                    "button": "Eliminar",
                    "title": "Eliminar Registro",
                    "submit": "Eliminar",
                    "confirm": {
                        "_": "??Est?? seguro que desea eliminar %d filas?",
                        "1": "??Est?? seguro que desea eliminar 1 fila?"
                    }
                },
                "error": {
                    "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">M??s informaci??n&lt;\\\/a&gt;).<\/a>"
                },
                "multi": {
                    "title": "M??ltiples Valores",
                    "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aqu??, de lo contrario conservar??n sus valores individuales.",
                    "restore": "Deshacer Cambios",
                    "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                }
            }
        };
    </script>

    <script src="js/daterange/daterangepicker.js"> </script>
    <script src="js/daterange/moment.min.js"> </script>


	</body>
</html>