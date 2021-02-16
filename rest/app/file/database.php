<?php 
set_time_limit(60000000000);
chmod("base.csv", 0777);
$fp = fopen("base.csv","r");
$num=1;
while ($d=fgetcsv($fp,100000000, ";")){
  $manzana=$d[0];
  $lote=$d[1];
	$detalle=$d[2];
	$sql="INSERT INTO `lotes` (`id`, `manzana`, `lote`, `detalle`, `estado`, `precio`) VALUES (NULL, '$manzana', '$lote', '$detalle', 'libre' , '0');";
	$r=$obj->query($sql);
	if($r){
		echo $num."<br>";
		$num++;
	}else{
	  echo $sql;
	  echo "<br>";
	}
}
fclose($fp);
?>