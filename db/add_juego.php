<?php 
	require_once './consultas.php';

	$color = "";
	switch ($_POST["plataforma-juego"][0]) {
		case 'X':
			$color = "xbox";
			break;
		case 'P':
			$color = "play";
			break;
		case 'N':
			$color = "nintendo";
			break;
		case 'G':
			$color = "nintendo";
			break;
	}
	//Una vez que tenemos nuestra variable completa es cuestión de agregar la clase
	if(executeQuery("INSERT INTO game (
		name, plataform, color, players) VALUES (
		'".$_POST["nombre-juego"]."', '".$_POST["plataforma-juego"]."', '$color','".$_POST["jugadores-juego"]."');"))
	
	header( "Location: ../index.php");

?>