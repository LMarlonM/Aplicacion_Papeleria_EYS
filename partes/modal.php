<?php

include("../clases/conexion.php");
session_start();

if ($_POST['action'] == 'searchCliente') {
  if (!empty($_POST['cliente'])) {
    $id_cliente = $_POST['cliente'];

    $query = mysqli_query($conexion, "SELECT * FROM cliente WHERE id_cliente LIKE '$id_cliente'");
    mysqli_close($conexion);
    $result = mysqli_num_rows($query);
    $data = '';
    if ($result > 0) {
      $data = mysqli_fetch_assoc($query);
    }else {
      $data = 0;
    }
    echo json_encode($data,JSON_UNESCAPED_UNICODE);
  }
  exit;
}

?>