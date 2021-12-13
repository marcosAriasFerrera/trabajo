<?php 

function conectar()
{
	$server= "127.0.0.1:3306";
    $usuario= "Marcos";
    $password= "password";
    $BD= "jardin";

    $conexion = mysqli_connect($server,$usuario, $password, $BD);

    if($conexion)
    {
        return $conexion;
    }

    else
    {
        echo "<h2>ERROR. Se ha producido un error de conexión.</h2>";
        echo "<p> ".mysqli_connect_error()." </p>";
        return false;
    }
}

?>