<?php
extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("DBConnect.php");

	$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
 
	}else{
		$image = "imagenes/fotoPerfilDefecto.png";
        $imgContent = addslashes(file_get_contents($image));
	}


	$sentencia="update users set username='$user', password='$pass', email='$email', rol='$rol', image='$imgContent'  where id='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS '.$sentencia.'")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>