<?php 
	require_once 'consultas.php';
	$fila = getOneRow("SELECT * FROM game WHERE id = $_GET[id];");
?>
<h4>EDITAR JUEGO</h4>
<label>NOMBRE:</label><br>
<input required type="text" name="nombre-juego" value="<?php echo $fila['name'];?>"><br>
<label>PLATAFORMA:</label><br>
<select name="plataforma-juego">
	<option <?php if($fila['plataform']=="XBOX 360") echo "selected";?>>XBOX 360</option>
	<option <?php if($fila['plataform']=="XBOX ONE") echo "selected";?>>XBOX ONE</option>
	<option <?php if($fila['plataform']=="PS2") echo "selected";?>>PS2</option>
	<option <?php if($fila['plataform']=="PS3") echo "selected";?>>PS3</option>
	<option <?php if($fila['plataform']=="PS4") echo "selected";?>>PS4</option>
	<option <?php if($fila['plataform']=="PSP") echo "selected";?>>PSP</option>
	<option <?php if($fila['plataform']=="PSVITA") echo "selected";?>>PSVITA</option>
	<option <?php if($fila['plataform']=="N SWITCH") echo "selected";?>>N SWITCH</option>
	<option <?php if($fila['plataform']=="GAME CUBE") echo "selected";?>>GAME CUBE</option>
	<option <?php if($fila['plataform']=="GAMEBOY") echo "selected";?>>GAMEBOY</option>
	<option <?php if($fila['plataform']=="N DS") echo "selected";?>>N DS</option>
	<option <?php if($fila['plataform']=="N 3DS") echo "selected";?>>N 3DS</option>
</select><br>
<label>N° JUGADORES:</label>
<select name="jugadores-juego">
	<option <?php if($fila['players']=="1") echo "selected";?> >1</option>
	<option <?php if($fila['players']=="1 - 2") echo "selected";?> >1 - 2</option>
	<option <?php if($fila['players']=="1 - 4") echo "selected";?> >1 - 4</option>
</select><br>
<button class="success">GUARDAR</button><button id="cancel-edit" class="danger">CANCELAR</button>