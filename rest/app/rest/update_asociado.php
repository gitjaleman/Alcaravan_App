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
    $id      = mb_strtoupper($_GET['id']);
    $return         = asociados($cedula,$fexpedicion,$lexpedicion,$nombre,$telefono,$correo,$lrecidencia,$direccion,$ocupacion,$id);
  }
  function asociados($cedula,$fexpedicion,$lexpedicion,$nombre,$telefono,$correo,$lrecidencia,$direccion,$ocupacion,$id){
    $obj=new conn;
    $sql="UPDATE `asociados` SET 
    `cedula` = '$cedula', 
    `fexpedicion` = '$fexpedicion', 
    `lexpedicion` = '$lexpedicion', 
    `nombre` = '$nombre', 
    `telefono` = '$telefono', 
    `correo` = '$correo', 
    `lrecidencia` = '$lrecidencia', 
    `direccion` = '$direccion', 
    `ocupacion` = '$ocupacion' 
    WHERE `asociados`.`id` = '$id';";
    $obj->query($sql);
    $data["sql"]=$sql;
    return $data;
  }
  echo json_encode($return);
?>
