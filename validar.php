
<?php
session_start();
	require("DBConnect.php");			//conexion a la base de datos

	$email=$_POST['mail'];			// Variables con la que recogemos los datos de las variables // mail nombre del cuadro de texto para ingresar datos
	$pass=$_POST['pass'];

/*
	//la variable  $mysqli viene de DBConnect que lo traigo con el require("DBConnect.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM users WHERE email='$username'"); //query > necesitamos el email para poder autentificar
	if($f2=mysqli_fetch_assoc($sql2)){ //si F2 /variablecualquiera/ para que obtenga los datos de nuestra consulta si hay una respueste del query
		if($pass==$f2['pasadmin']){		// F2 trae toda la fila de nuestra base de datos y si encuentra que pass= pasadmin es el administrador el q se autentifica
			$_SESSION['id']=$f2['id'];	// las variables de session $_SESSION las podemos utilizar ya que iniciamos con session_start(); creando variables temporales para el usuario
			$_SESSION['user']=$f2['user'];	//trae el nombre de quiene esta autentificandose con ese query en la variable user //nombre del usuario
			$_SESSION['rol']=$f2['rol'];	// valor del usuario

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}
*/

	//la variable  $mysqli viene de DBConnect que lo traigo con el require("DBConnect.php");
	$sql=mysqli_query($mysqli,"SELECT * FROM users WHERE email='$email'"); //
	if($aux=mysqli_fetch_assoc($sql)){
		if($pass==$aux['Password']){			//si la pasword que ingresamos es igual a cualquiera de la bd es un usuario nomal/descartando admin/
			$_SESSION['id']=$aux['Id'];		// guarda el id de ese usuario
			$_SESSION['user']=$aux['UserName'];	//guarda el nombre de ese usuario
			$_SESSION['rol']=$aux['Rol'];		//guarda el valor de ese usuario 

			if($aux['Rol'] == 1) { //Rol 1 es Administrador 
				echo '<script>alert("BIENVENIDO ADMINISTRADOR Rol('.$_SESSION['rol'].')")</script> ';
				echo "<script>location.href='admin.php'</script>";
			}else {

				header("Location: index.php");
			}	
		
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>