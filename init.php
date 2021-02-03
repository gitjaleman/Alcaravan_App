<?php 
session_start();
if(isset($_SESSION["conectado"])) { 
  header("Location: public/");
}else{
	header("Location: public/");
}
