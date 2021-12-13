<?php 

require "conexion.php";

$conexion = conectar();

$usuario = $_POST['usuario'];
$contrasena = $_POST['password'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$nacimiento = $_POST['nacimiento'];
$postal = $_POST['postal'];
$provincia = $_POST['provincia'];
$poblacion = $_POST['poblacion'];

$insertar = "Insert into usuario values ('$usuario', '$contrasena', '$dni', '$telefono', '$mail', '$nacimiento', '$postal', '$provincia', '$poblacion', 'no')";

if (mysqli_query($conexion,$insertar))
{
	header("Location: login.html");
}

else
{
	header("Location: registro.html");
}


?>