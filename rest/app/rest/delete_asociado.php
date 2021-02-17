<?php 
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
  header('content-type: application/json; charset=utf-8');
  http_response_code(200);
  if ($_SERVER['REQUEST_METHOD']=='GET') {
    $id = mb_strtoupper($_GET['id']);
    $return = asociados($id);
  }
  function asociados($id){
    $obj=new conn;
    $sql="DELETE FROM `asociados` WHERE `asociados`.`id` = '$id'";
    $obj->query($sql);
    $data["sql"]=$sql;
    return $data;
  }
  echo json_encode($return);
?>