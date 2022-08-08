<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$based = "papeleria";

$conexion = mysqli_connect($servidor, $usuario, $clave) or die ("No se conecto a Mysql") ;

//conectar a la base de datos
    
mysqli_select_db($conexion, $based) or die ("No se conecto a la base de datos papeleria"); 

//utf8 para que todos los simbolos en español salgan bien
mysqli_set_charset($conexion, "utf8");

session_start();

if(!empty($_POST)){

    // Busqueda de clientes
    if($_POST['action'] == 'searchCliente'){

        if(!empty($_POST['cliente'])){

            $doc = $_POST['cliente'];

            $query = mysqli_query($conexion, "SELECT * FROM cliente WHERE documento LIKE '$doc'");
            mysqli_close($conexion);

            $result = mysqli_num_rows($query);

            $data = '';
            if($result > 0){
                $data = mysqli_fetch_assoc($query);
            }
            else{
                $data = 0;
            }

            echo json_encode($data,JSON_UNESCAPED_UNICODE);

        }
        exit;

    }

    //Registro de cliente por ventas
    if($_POST['action'] == 'addCliente'){
        
        $documento =$_POST['doc_cliente'];
        $nombre =$_POST['nom_cliente'];
        $apellidos =$_POST['ape_cliente'];
        $celular =$_POST['cel_cliente'];
        $direccion =$_POST['dir_cliente'];
        $email =$_POST['mail_cliente'];

        $query_insert = mysqli_query($conexion,"INSERT INTO cliente(documento, nombre, apellidos, celular, direccion, email)
                                                VALUES ('$documento','$nombre','$apellidos','$celular','$direccion','$email')");
            
        
        if($query_insert){
            $codCliente = mysqli_insert_id($conexion);
            $msg = $codCliente;
        }
        else{
            $msg='error';
        }
        mysqli_close($conexion);
        echo $msg;
        exit;

    }

}
exit;

?>