<?php 

function conectar()
{
	$server= $(hostname -I);
    $usuario= "debianDB";
    $password= "debianDB";
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
