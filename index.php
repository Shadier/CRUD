<?php require_once "db/conexion.php" ?>
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
	<link rel="stylesheet" type="text/css" href="css/inputs.css">
	<link rel="stylesheet" type="text/css" href="css/dialogos.css">
	<link rel="stylesheet" type="text/css" href="css/elementos.css">
	<link rel="stylesheet" type="text/css" href="css/buttons.css">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body>
	<div id="opaque"></div>
	<div id="dialogo">
		<div class="dialogo-cabecera">
			ADVERTENCIA
		</div>
		<div class="dialogo-cuerpo">
			<p>¿Seguro que deseas eliminar el elemento?</p>
			<button>SI</button>
			<button id="cancel-dialogo">NO</button>
		</div>
	</div>
	<div id="menu">
		<div class="menu-logo">
			My Games
		</div>
	</div>
	<div id="board">
		<?php require './content/elemento.php'; ?>
	</div>
	<div id="boardAdd">
		<form id="frm-add" method="post" action="db/add_juego.php">
			<h4>AGREGAR JUEGO</h4>
			<label>NOMBRE:</label><br>
			<input type="text" name="nombre-juego"><br>
			<label>PLATAFORMA:</label><br>
			<select name="plataforma-juego">
				<option selected hidden>Seleccionar...</option>
				<option>XBOX 360</option>
				<option>XBOX ONE</option>
				<option>PS2</option>
				<option>PS3</option>
				<option>PS4</option>
				<option>PSP</option>
				<option>PSVITA</option>
				<option>N SWITCH</option>
				<option>GAME CUBE</option>
				<option>GAMEBOY</option>
				<option>N DS</option>
				<option>N 3DS</option>
			</select><br>
			<label>N° JUGADORES:</label>
			<select name="jugadores-juego">
				<option selected hidden>Seleccionar...</option>
				<option>1</option>
				<option>1 - 2</option>
				<option>1 - 4</option>
			</select><br>
			<button class="success">AGREGAR</button><button id="cancel-add" class="danger">CANCELAR</button>
		</form>
	</div>
	<div id="boardEdit">
		<form id="frm-editar" method="post" action="db/editar_juego.php">
			
		</form>
	</div>
	<footer>
		Todos los derechos reservados @ Raul Moreno
	</footer>
	<button id="btn-add" class="btn-circle">
		<img src="images/add.png">
	</button>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
</body>
</html>