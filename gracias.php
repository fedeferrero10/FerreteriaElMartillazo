<?php include('header.php');?>	

	
<?php //as’ son los comentarios en php :)
	 
	 //dentro del POST[] ingresamos el name del formulario
	$nombre=$_POST['nombre']; //variable $nombre
	$email=$_POST['email'];	
	$telefono=$_POST['telefono'];		
	$fecha=$_POST['fecha'];
	$genero=$_POST['genero'];		
			
	$musica_pop=$_POST['musica_pop'];				
	$musica_rock=$_POST['musica_rock'];				
	
	$comentario=$_POST['comentario'];				
	$provincia=$_POST['provincia'];				
	
	$mensaje="
	<h1> DATOS DE CONTACTO </h1> 
		Nombre: $nombre <br/> - 
		  Email: $email <br/>
		  Telefono: $telefono <br/>
		  Fecha:  $fecha  <br/>
		  Genero: $genero  <br/>
		 Musica: $musica_pop $musica_rock  <br/>
		 Provincia: $provincia <br/>
		 Comentario: $comentario 
		  "; //para imprimir en pantalla


$headers = "From: BLISSOUT <info@blissout.com.ar> \r\n";
$headers .= "Reply-To:  g.suarezduek@gmail.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	if (mail('silvanaojeda1@gmail.com','Aqui el asunto', $mensaje,$headers)) {
	
				
		echo "Gracias";
	}
	
	else {
		echo "Error";
	}


	

?>
	
	<?php include('footer.php');?>	
