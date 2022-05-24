<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>Ferretería El Martillazo</title>
     
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
     
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />
     <link rel="stylesheet" href="css/style.css" />
     <link rel="stylesheet" href="font/stylesheet.css" />
     
     <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Arvo:400,400italic' rel='stylesheet' type='text/css'>
	 
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     
</head>

<body>
	<header>	
		<div class= "content">
		<img id="logo" src="imagenes/logo.png" title="El Martillazo" alt="El Martillazo">
		<nav id="barrabusqueda">
			<div class="flexsearch">
			<div class="flexsearch--wrapper">
				<form class="flexsearch--form" action="#" method="post">
					<div class="flexsearch--input-wrapper">
						<input class="flexsearch--input" type="search" placeholder="Buscar productos, marcas y más...">
					</div>
					<input class="flexsearch--submit" type="image" src="imagenes/lupaBusqueda.png"/>
				</form>
			</div>
			</div>
		</nav>
		<nav id="menu">
			<ul>
				<a href="index.php#inicio"><li>INICIO</li></a>
				<a href="#servicios"><li>PRODUCTOS</li></a>
				<a href="contacto.php"><li>Contacto</li></a>
				<a href="#"><li>INICIAR SESION</li></a>
	
			</ul>
		</nav>
		
		<nav id="menu-celular">
			
			<select onchange="location = this.options[this.selectedIndex].value;">
				<option value="index.php">Inicio</option>
				<option value="#">Servicios</option>
				<option value="#">Trabajos</option>
				<option value="#">Noticias</option>
				<option value="contacto.php">Contacto</option>
			</select>
			
		</nav>
	</div>	
	</header>
	
