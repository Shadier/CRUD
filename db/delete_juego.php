<?php 
	if (isset($_GET['id'])) {
		require_once 'consultas.php';

		if(executeQuery("DELETE FROM game WHERE id = $_GET[id]")){
			echo "¡Elemento eliminado!";
		}

	}else{
		header('Location: ../index.php');
	}
?>