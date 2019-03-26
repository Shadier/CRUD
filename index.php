<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
	<meta http-equiv="expires" content="0"/>
	<meta name="robots" content="inicio"/>
	<title>GAMES - Inicio</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="icon" type="image/png" href="./images/icono.png" />
	<link rel="stylesheet" type="text/css" href="css/colores.css">
	<link rel="stylesheet" type="text/css" href="css/elementos.css">
	<link rel="stylesheet" type="text/css" href="css/buttons.css">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body>
	<div id="menu">
		<div class="menu-logo">
			My Games
		</div>
	</div>
	<div id="board">
		<?php require './content/elemento.php'; ?>
	</div>
	<footer>
		Todos los derechos reservados @ Raul Moreno
	</footer>
	<button id="btn-add" class="btn-circle">
		<img src="images/add.png">
	</button>
</body>
</html>