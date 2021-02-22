<?php 
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
  header('content-type: application/json; charset=utf-8');
  http_response_code(200);
  if ($_SERVER['REQUEST_METHOD']=='GET') {
    $cedula         = mb_strtoupper($_GET['cedula']);
    $fexpedicion    = mb_strtoupper($_GET['fexpedicion']);
    $lexpedicion    = mb_strtoupper($_GET['lexpedicion']);
    $nombre         = mb_strtoupper($_GET['nombre']);
    $telefono       = mb_strtoupper($_GET['telefono']);
    $correo         = mb_strtoupper($_GET['correo']);
    $lrecidencia    = mb_strtoupper($_GET['lrecidencia']);
    $direccion      = mb_strtoupper($_GET['direccion']);
    $ocupacion      = mb_strtoupper($_GET['ocupacion']);
    $return         = asociados($cedula,$fexpedicion,$lexpedicion,$nombre,$telefono,$correo,$lrecidencia,$direccion,$ocupacion);
  }
  function asociados($cedula,$fexpedicion,$lexpedicion,$nombre,$telefono,$correo,$lrecidencia,$direccion,$ocupacion){
    $obj=new conn;
    $sql="INSERT INTO `asociados` (`id`, `cedula`, `fexpedicion`, `lexpedicion`, `nombre`, `telefono`, `correo`, `lrecidencia`, `direccion`, `ocupacion`) 
    VALUES (NULL, '$cedula', '$fexpedicion', '$lexpedicion', '$nombre', '$telefono', '$correo', '$lrecidencia', '$direccion', '$ocupacion');";
    $obj->query($sql);
    $data["sql"]=$sql;
    return $data;
  }
  echo json_encode($return);
?>