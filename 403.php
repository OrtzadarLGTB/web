﻿<!DOCTYPE html>
<html lang="es-ES">
	<head>
		<?php include 'includes/elementoHead.php' ?>		
		<title>Error 403</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
	</head>
	<body class="error">
		<script>setTimeout ("jQuery('body').addClass('blancoynegro');", 3000);</script>
		<?php include 'includes/elementoHeader.php' ?>
		<div id="contenido">
			<main>
				<audio autoplay>
					<source src="/sound.ogg" type="audio/ogg">
					<source src="/sound.mp3" type="audio/mp3">
				</audio>
				<h1>¡Ups! Error 403</h1>
				<h2>Acceso prohibido</h2>		
				<p>Lamentamos mucho esto, el recurso es inaccesible... ¿Quieres volver a la <a href="..">página principal</a>?</p>
				<br>
			</main>		
			<?php include 'includes/elementoAside.php' ?>
		</div>
		<?php include 'includes/elementoFooter.php' ?>
	</body>
</html>