<?php 
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
  header('content-type: application/json; charset=utf-8');
  http_response_code(200);
  if ($_SERVER['REQUEST_METHOD']=='GET') {

    $pventa = $_GET['precio'];
    $comprador = $_GET['cedula'];
    $cinicial   = $_GET['inicial'];
    $ncuotas = $_GET['cuotas'];
    $finicial = $_GET['fecha'];
    $saldo = $pventa- $cinicial;
    $vmensual = $saldo/$ncuotas;
    $return = lotes($pventa,$comprador,$cinicial,$ncuotas,$saldo,$vmensual,$finicial);
  }
  function lotes($pventa,$comprador,$cinicial,$ncuotas,$saldo,$vmensual,$finicial){
    $obj=new conn;
    $sql="UPDATE `lotes` SET `estado` = 'VENDIDO', 
    `pventa` = '$pventa', 
    `comprador` = '$comprador', 
    `cinicial` = '$cinicial', 
    `ncuotas` = '$ncuotas', 
    `saldo` = '$saldo', 
    `vmensual` = '$vmensual', 
    `finicial` = '$finicial', 
    `operaciones` = '1' 
    WHERE `lotes`.`id` = 1; ";
    $con=$obj->query($sql);
    $num=mysqli_num_rows($con);
    if($num>=1){
      while ($d=mysqli_fetch_assoc($con) ) {
        $data["data"][]=array_map(null, $d);
      } 
    }else{
      $data["data"]=null;
    }
    return $data;
  }
  echo json_encode($return);
?>