<?php include('header.php');?>	

	
<?php //as� son los comentarios en php :)
	 
	 //dentro del POST[] ingresamos el name del formulario
	$nombre=$_POST['nombre']; //variable $nombre
	$email=$_POST['email'];	
	$telefono=$_POST['telefono'];		
	$fecha=$_POST['fecha'];			
	$mensaje="
	<h1> DATOS DE CONTACTO </h1> 
		Nombre: $nombre <br/> - 
		  Email: $email <br/>
		  Telefono: $telefono <br/>
		  Fecha:  $fecha  <br/>
		 Comentario: $comentario 
		  "; //para imprimir en pantalla
$headers = "From: Martillazo <fedeferrero10@gmail.com> \r\n";
$headers .= "Reply-To:  fedeferrero10@gmail.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	if (mail('fedeferrero10@gmail.com','Aqui el asunto', $mensaje,$headers)) {
	
				
		echo "Gracias";
	}
	
	else {
		echo "Error";
	}


	

?>
	
	<?php include('footer.php');?>	
