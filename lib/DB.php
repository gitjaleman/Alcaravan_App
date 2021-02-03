<?php
	class conn extends mysqli{
		function __construct(){
			parent::__construct("localhost","root","","");
				if (mysqli_connect_error()) {
					print("error de conexion");
				}
		}
	}
?>