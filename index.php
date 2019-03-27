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
	<div id="alerta">
		¡Elemento eliminado correctamente!
	</div>
	<div id="opaque"></div>
	<div id="dialogo">
		<div class="dialogo-cabecera">
			ADVERTENCIA
		</div>
		<div class="dialogo-cuerpo">
			<p>¿Seguro que deseas eliminar el elemento?</p>
			<button id="yes-dialogo">SI</button>
			<button id="cancel-dialogo">NO</button>
		</div>
	</div>
	<div id="menu">
		<div class="menu-logo">
			My Games
		</div>
	</div>
	<div id="board">
		<?php 
		require_once 'db/consultas.php';
		$sql = "SELECT * FROM game;";
		$rs = mysqli_query($con, $sql);
		$count = 0;
		while ($fila = mysqli_fetch_array($rs)) :
			$count++;
		?>
		<div class="row">
		<div class="elemento">
			<div class="data">
				<div class="name">
					<?php echo $fila['name']; ?>
				</div>
				<div class="details">
					<div class="plataform <?php echo $fila[color]; ?>">
						<?php echo $fila['plataform']; ?>
					</div>
					<div class="players">
						<?php echo $fila['players']; ?>
					</div>
				</div>
			</div><div class="edit" id="<?php echo $fila['id']; ?>">
				<img src="./images/edit.png">
			</div><div class="delete" id="<?php echo $fila['id']; ?>">
				<img src="./images/delete.png">
			</div>
		</div>
		</div>
		<?php 
			endwhile;
			if ($count < 1):
		?>
			<H6>NO HAY NINGÚN ELEMENTO AGREGADO</H6>
		<?php
			endif;
		?>
	</div>
	<div id="boardAdd">
		<form id="frm-add" method="post" action="db/add_juego.php">
			<h4>AGREGAR JUEGO</h4>
			<label>NOMBRE:</label><br>
			<input required type="text" name="nombre-juego"><br>
			<label>PLATAFORMA:</label><br>
			<select required name="plataforma-juego">
				<option value="" selected hidden>Seleccionar...</option>
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
			<select required name="jugadores-juego">
				<option value="" selected hidden>Seleccionar...</option>
				<option>1</option>
				<option>1 - 2</option>
				<option>1 - 4</option>
			</select><br>
			<button type="submit" class="success">AGREGAR</button><button id="cancel-add" class="danger">CANCELAR</button>
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