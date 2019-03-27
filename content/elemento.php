<?php 
	require_once '../db/consultas.php';
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