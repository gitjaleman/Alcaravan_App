<?php 
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
  header('content-type: application/json; charset=utf-8');
  http_response_code(200);
  if ($_SERVER['REQUEST_METHOD']=='GET') {
    $c=$_GET['c'];
    $return = asociado($c);
  }
  function asociado($c){
    $obj=new conn;
    $sql="SELECT * FROM `asociados` WHERE cedula = '$c' ";
    $con=$obj->query($sql);
    $num=mysqli_num_rows($con);
    if($num>=1){
      while ($d=mysqli_fetch_assoc($con) ) {
        $data["data"]=array_map(null, $d);
      } 
    }else{
      $data["data"]=null;
    }
    return $data;
  }
  echo json_encode($return);
?>