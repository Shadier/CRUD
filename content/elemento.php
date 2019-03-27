<?php 
	require_once './db/consultas.php';
	$sql = "SELECT * FROM game;";
	$rs = mysqli_query($con, $sql);
	while ($fila = mysqli_fetch_array($rs)) :

?>
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
	</div><div class="edit">
		<img src="./images/edit.png">
	</div><div class="delete">
		<img src="./images/delete.png">
	</div>
</div><br>

<?php 
	endwhile;
?>