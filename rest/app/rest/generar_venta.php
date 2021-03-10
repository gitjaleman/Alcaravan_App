<?php 
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
  header('content-type: application/json; charset=utf-8');
  http_response_code(200);
  if ($_SERVER['REQUEST_METHOD']=='GET') {
    $id = $_GET['id'];
    $pventa = $_GET['precio'];
    $cedula = $_GET['cedula'];
    $nombre = $_GET['nombre'];
    $cinicial   = $_GET['inicial'];
    $ncuotas = $_GET['cuotas'];
    $finicial = $_GET['fecha'];
    $lote = $_GET['lote'];
    $user = $_GET['user'];
    $saldo = $pventa- $cinicial;
    $vmensual = $saldo/$ncuotas;
    lotes($pventa,$cedula,$nombre,$cinicial,$ncuotas,$saldo,$vmensual,$finicial,$id,$lote,$user);
  }
  function lotes($pventa,$cedula,$nombre,$cinicial,$ncuotas,$saldo,$vmensual,$finicial,$id,$lote,$user){
    $obj=new conn;
    date_default_timezone_set('America/Bogota');
    $codigo = date("ymdgis");

    $sql1="UPDATE `lotes` SET `estado` = 'vendido', 
    `pventa` = '$pventa', 
    `cedula` = '$cedula', 
    `nombre` = '$nombre', 
    `cinicial` = '$cinicial', 
    `ncuotas` = '$ncuotas', 
    `saldo` = '$saldo', 
    `vmensual` = '$vmensual', 
    `finicial` = '$finicial', 
    `saldof` = '$saldo', 
    `operaciones` = '1' 
    WHERE `lotes`.`id` = '$id' ";
    date_default_timezone_set('America/Bogota');
    $codigo = date("ymdgis");

   $sql2="INSERT INTO `operaciones` (`id`, `lote`, `codigo`, `titulo`, `detalle`, `fecha`, `hora`, `usuario`) VALUES 
    (NULL, '$lote', '$codigo', 'VENTA', 'Se genero proceso de  venta.', '$finicial', '00:00', '$user');";

    $obj->query($sql1);
    $obj->query($sql2);

    
  }
  echo json_encode("1");
?>