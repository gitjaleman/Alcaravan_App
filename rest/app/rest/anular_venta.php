<?php 
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
  header('content-type: application/json; charset=utf-8');
  http_response_code(200);
  if ($_SERVER['REQUEST_METHOD']=='GET') {
    $id = $_GET['id'];
    $lote = $_GET['lote'];
    anular($id,$lote);
  }
  function anular($id,$lote){
    $obj=new conn;
    $sql1="UPDATE `lotes` SET 
    `estado` = 'libre', 
    `pventa` = '0',
     `cedula` = '0', 
     `nombre` = '0', 
     `cinicial` = '0', 
     `ncuotas` = '0', 
     `saldo` = '0', 
     `vmensual` = '0', 
     `operaciones` = '0', 
     `finicial` = '0', 
     `saldof` = '0', 
     `code` = '0'
      WHERE `lotes`.`id` = '$id'";
   $sql2="DELETE FROM `operaciones` WHERE `operaciones`.`lote` = '$lote' ";
    $obj->query($sql1);
    $obj->query($sql2);
  }
  echo json_encode("1");
?>