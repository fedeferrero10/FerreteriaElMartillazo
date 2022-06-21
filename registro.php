<?php
if(isset($_POST["submit"])){
	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	//$image=$_POST['image'];

	$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
 
	}else{
		$image = "imagenes/fotoPerfilDefecto.png";
        $imgContent = addslashes(file_get_contents($image));
		
		//echo ' <script language="javascript">alert("Foto no subida correctamente");</script> ';
	}
		

	require("DBConnect.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM users WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO users VALUES('','$realname','$pass','$mail','2','$imgContent')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con exito");</script> ';
				echo "<script>location.href='login.php'</script>";
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
}
?>