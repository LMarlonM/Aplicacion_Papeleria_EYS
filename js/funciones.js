function validarFormVacio(formulario){
    datos=$('#' + formulario).serialize();
    d=datos.split('&');
    vacios=0;
    for(i=0;i< d.length;i++){
            controles=d[i].split("=");
            if(controles[1]=="A" || controles[1]==""){
                vacios++;
            }
    }
    return vacios;
}

//Registro de Cliente desde Venta

$(document).ready(function(){

    $('.btn_new_cliente').click(function(e){

        e.preventDefault();
        $('#nom_cliente').removeAttr('disabled');
        $('#ape_cliente').removeAttr('disabled');
        $('#cel_cliente').removeAttr('disabled');
        $('#dir_cliente').removeAttr('disabled');
        $('#mail_cliente').removeAttr('disabled');

        $('#div_registro_cliente').slideDown();
    });

});

$(document).ready(function(){

    $('#doc_cliente').keyup(function(e){
        e.preventDefault();
        
        var cl = $(this).val();
        var action = 'searchCliente';

        $.ajax({
            url: 'js/ajax.php',
            type: "POST",
            async: true,
            data: {action:action,cliente:cl},

            success: function(response){
                
                if(response == 0){
                    $('#idcliente').val('');
                    $('#nom_cliente').val('');
                    $('#ape_cliente').val('');
                    $('#cel_cliente').val('');
                    $('#dir_cliente').val('');
                    $('#mail_cliente').val('');
                 
                    $('.btn_new_cliente').slideDown();
                }
                else{
                    var data = $.parseJSON(response);
                    $('#idcliente').val(data.idcliente);
                    $('#nom_cliente').val(data.nombre);
                    $('#ape_cliente').val(data.apellidos);
                    $('#cel_cliente').val(data.celular);
                    $('#dir_cliente').val(data.direccion);
                    $('#mail_cliente').val(data.email);
                    // ocultar boton Agregar
                    $('.btn_new_cliente').slideUp();

                    // Bloque campos
                    $('#nom_cliente').attr('disabled','disabled');
                    $('#ape_cliente').attr('disabled','disabled');
                    $('#cel_cliente').attr('disabled','disabled');
                    $('#dir_cliente').attr('disabled','disabled');
                    $('#mail_cliente').attr('disabled','disabled');
                    // ocultar boto Guardar
                    $('#div_registro_cliente').slideUp();
                }

            },
            error: function(error){

            }
        });

    });

});

//Creacion de cliente desde la ventada de ventas

$(document).ready(function(){
    $('#form_new_cliente_venta').submit(function(e){
        e.preventDefault();

        $.ajax({
            url: 'js/ajax.php',
            type: "POST",
            async: true,
            data: $('#form_new_cliente_venta').serialize(),

            success: function(response){
               if(response != 'error'){
                    $('#idcliente').val(response);

                    $('#nom_cliente').attr('disabled','disabled');
                    $('#ape_cliente').attr('disabled','disabled');
                    $('#cel_cliente').attr('disabled','disabled');
                    $('#dir_cliente').attr('disabled','disabled');
                    $('#mail_cliente').attr('disabled','disabled');
                    // ocultar boto Guardar
                    $('#div_registro_cliente').slideUp();
                    $('.btn_new_cliente').slideUp();
               }               

            },
            error: function(error){

            }
        });


    });


});


