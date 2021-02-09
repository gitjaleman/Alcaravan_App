<?php 
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
  header('content-type: application/json; charset=utf-8');
  http_response_code(200);
  if ($_SERVER['REQUEST_METHOD']=='GET') {
    $user=$_GET['u'];
    $pass=$_GET['p'];
    $return = login($user, $pass);
  }
  function login($user, $pass){
    $obj=new conn;
    $sql="SELECT * FROM `users` WHERE user = '$user' AND pass = '$pass' ";
    $con=$obj->query($sql);
    $num=mysqli_num_rows($con);
    if($num>=1){
      while ($d=mysqli_fetch_assoc($con) ) {
        $data["user"][]=array_map(null, $d);
      } 
    }else{
      $data["user"]=null;
    }
    return $data;
  }
  echo json_encode($return);
?>