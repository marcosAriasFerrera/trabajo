<?php 

	require 'conexion.php';

	$conexion = conectar();

	$id = $_GET['dni'];
	
	$usuario = mysqli_query($conexion, "delete from usuario where dni= '$id'");

	if ($usuario)
	{
		header('Location: gestion.php');
	}
	else{
		header('Location: gestion.php');
	}
?>