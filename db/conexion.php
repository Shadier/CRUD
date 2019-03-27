<?php 
	if (!isset($_SESSION)) {
		session_start();
	}
 	
 	$local = true;
 	if ($local) {
 		$server = "localhost";
		$username = "root";
		$password = "";
		$database = "games_crud";
 	}else{
 		$server = "localhost";
		$username = "u315290390_root";
		$password = "Morelia1";
		$database = "u315290390_curso";
 	}
	
	$con = mysqli_connect($server, $username, $password, $database);
	mysqli_query($con, "SET NAMES 'utf8'");
?>