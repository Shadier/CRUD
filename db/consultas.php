<?php 
	require_once 'conexion.php';

	//Función que sirve para devolver la fila de una cosulta dada
	//observemos que solo sirve para cuando sabemos que el
	//resultado sera una y solo una fila de nuestra BD
	function getOneRow($sql=''){
		GLOBAL $con;
		if ($sql == '') return false;
		$rs = mysqli_query($con, $sql);
		if ($rs) $fila = mysqli_fetch_array($rs);
		if (isset($fila)) return $fila;
		return false;
	}

	function executeQuery($sql=''){
		GLOBAL $con;
		if ($sql == '') return false;
		$rs = mysqli_query($con, $sql);
		if ($rs) return true;
		return false;
	}
?>