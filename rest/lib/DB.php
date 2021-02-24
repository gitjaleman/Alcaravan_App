<?php
	class conn extends mysqli{
		function __construct(){
			parent::__construct("localhost","u717707398_alcaravan","Password.2021","u717707398_alcaravan");
				if (mysqli_connect_error()) {
					print("error de conexion");
				}
		}
	}
?>