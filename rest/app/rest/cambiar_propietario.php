<?php 
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
  header('content-type: application/json; charset=utf-8');
  http_response_code(200);
  if ($_SERVER['REQUEST_METHOD']=='GET') {
    $id = $_GET['id'];
    $cedula = $_GET['cedula'];
    $lote = $_GET['lote'];
    $nombre = $_GET['nombre'];
    $usuario = $_GET['usuario'];
    cambiar($id,$cedula,$nombre,$usuario,$lote);
  }
  function cambiar($id,$cedula,$nombre,$usuario,$lote){
    $obj=new conn;
    date_default_timezone_set('America/Bogota');
    $codigo = date("ymdgis");
    $fecha = date("Y-m-d");
    $hora =date("h:i A");
    $sql1="UPDATE `lotes` SET 
     `cedula` = '$cedula', 
     `nombre` = '$nombre', 
      WHERE `lotes`.`id` = '$id'";
   $sql2="INSERT INTO `operaciones` (`id`, `lote`, `codigo`, `titulo`, `detalle`, `fecha`, `hora`, `usuario`) 
   VALUES (NULL, '$lote', '$codigo', 'CAMBIO PROPIETARIO', 'se realiza cambio de propietario del lote', '$fecha', '$hora', '$usuario');";
    $obj->query($sql1);
    $obj->query($sql2);
  }
  echo json_encode("1");
?>