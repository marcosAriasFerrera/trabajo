<?php 

require 'conexion.php';

$conexion = conectar();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$resultado = mysqli_query($conexion,"select * from usuario where usuario = '$usuario' and contrasena = '$password' ");

if (mysqli_num_rows($resultado))
{
	$usuario = mysqli_fetch_assoc($resultado);

	sesion($usuario);

	header('Location: index.php');
}

else
{
	header('Location: login.html');
}

//funcion para iniciar sesión
function sesion($usuario){
	session_id($usuario['dni']);
	session_start();

	foreach($usuario as $atributo=>$valor){
		$_SESSION[$atributo] = $valor;
		echo "$atributo : $valor <br>";
	}
}
?>