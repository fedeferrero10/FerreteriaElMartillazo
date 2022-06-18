<?php include('header.php');?>

<section id="contacto">

    <div class="content">

        <h1>Contacto</h1>
        <p>Completá con tus datos y te responderemos.</p>

        <form method="post" action="#">

            <input type="text" name="nombre" value="" placeholder="Tu nombre" required /> <br />

            <input type="email" name="email" placeholder="Tu email" required /> <br />
            <input type="number" name="telefono" placeholder="Whatsapp" required />

            <br />

            <input type="date" name="fecha" />
            <br />
            <textarea name="comentario" width='200px' height='150px' placeholder="Tu Mensaje"></textarea>

            <br />

            <input id="enviar" type="submit" name="enviar" value="Enviar" class="btn"/>

        </form>

        <?php //as’ son los comentarios en php :)
	if ( $_POST['enviar'] ) {
	$enviar=$_POST['enviar'];
	
	if($enviar=='Enviar'){
		
	 //dentro del POST[] ingresamos el name del formulario
	$nombre=$_POST['nombre']; //variable $nombre
	$email=$_POST['email'];	
	$telefono=$_POST['telefono'];		
	$fecha=$_POST['fecha'];				
	
	$comentario=$_POST['comentario'];						
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

}
}	
	else{
	
?>



        <?php } ?>


        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3343.53239451347!2d-68.42079798486778!3d-33.06877548088479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e44886bd8db5f%3A0xe7290a00ada5c1da!2sCarril%20Buen%20Orden%2C%20Mendoza!5e0!3m2!1ses-419!2sar!4v1653362746935!5m2!1ses-419!2sar"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</section>


<?php include('footer.php');?>