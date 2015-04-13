<?php include ('seguridad.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Creando FRONT-END</title>
	<meta name="description" content="">
	<!-- Fuerzo a internet explorer a utilizar el motor de render de chrome -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- VItal para el responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index,follow">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="author" type="text/plain" href="humans.txt">
	<link rel="sitemap" type="application/xml" href="sitemap.xml">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<h1><img src="img/html-logo.png"></h1>
		<nav class="menu"> 
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="">Cursos</a></li>
				<li><a href="">Proyectos</a></li>
				<li><a href="">Contacto</a></li>
			</ul>
		</nav>
		<div class="usuario">
			<h2>Bienvenido don <?php echo $_SESSION['nombreusuario'];?></h2>
			<a href="salir.php">Cerrar Sesión</a>
		</div>
		
	</header>
	<section class="articulos">
		<div class="contacto">
			<form method="post" action="enviar-contacto.php"> <!--action envia a tal direccion...post envia datos -->
			<input type="text" name="nombre" required placeholder="Nombre:">
			<input type="email" name="correo" required placeholder="Email:">
			<input type="text" name="asunto" required placeholder="Asunto:">
			<textarea name="mensaje" name="nombre" required placeholder="Mensaje:"></textarea>
			<input type="submit" value="Enviar Mensaje" class="enviar">
		</form>
		</div>
		<div class="contacto">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2989.6593754425758!2d-72.91773959999999!3d-41.468302600000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96183a6689884ccb%3A0x4692bd91231ee0bf!2sRegimiento%2C+Puerto+Montt%2C+Los+Lagos!5e0!3m2!1ses-419!2scl!4v1428456666021" frameborder="0" style="border:0"></iframe>
		</div>
		
	</section>
	<footer>
		<span>Desarrollado por <a href="http://humanstxt.org/ES" target="_blank">Carlos Garcés</a></span>
		<p>Sígueme en :
			<a href="https://www.facebook.com/carlosyjesu" target="_blank"><i class="iconos fa fa-facebook-square"></i></a>
			<a href="twitter.com" target="_blank"><i class="fa fa-twitter-square iconos"></i></a>
			<a href="https://www.youtube.com/channel/UCtuhNITv71iamLIqn1lB19g" target="_blank"><i class="fa fa-youtube-square iconos"></i></a>
		</p>
		</footer>


	<script type="text/javascript" src="js/codigo.js"></script>
</body>
</html>
