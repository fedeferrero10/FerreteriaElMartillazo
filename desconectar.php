<?php                //llamamos el cerrar sesion / para destruir nuestras variables de sesion
session_start();
if($_SESSION['user']){	
	session_destroy();
	header("location:index.php");
}
else{
	header("location:index.php");
}
?>