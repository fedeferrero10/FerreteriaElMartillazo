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

	$checkemail=mysqli_query($mysqli,"SELECT * FROM users WHERE email='$email'");
	$check_mail=mysqli_num_rows($checkemail);
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
                echo "<script>location.href='agregarUsuarios.php'</script>";
			}else{



	$sentencia="INSERT INTO users VALUES('','$user','$pass','$email','$rol','$imgContent')";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se ha  agregado el usuario";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE HA AGREGAD0 EL USUARIO'.$sentencia.'")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("USUARIO AGREGADO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
}
?>