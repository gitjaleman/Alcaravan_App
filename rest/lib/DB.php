<?php
	class conn extends mysqli{
		function __construct(){
			parent::__construct("localhost","root_express","pass2020","db_uniexpress");
				if (mysqli_connect_error()) {
					print("error de conexion");
				}
		}
	}
?>