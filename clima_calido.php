<?php

session_start();

require 'conexion.php';

$conexion = conectar();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Guía Jardinería</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body style="background-color:#C7E590;">

	<!-- Este div contiene la cabecera con el menú desplegable -->
	<div id="cabecera">
		<header>
			<h1> <a href="index.php"> Guía Jardinería </a> </h1>
		</header>
		<nav id="menu">
			<ul>
  				<li><a href="#">Login</a>
    				<ul>
      					<li><a href="login.html">Iniciar Sesión</a></li>
      					<li><a href="registro.html">Registrarse</a></li>
      					<?php if ($_SESSION['admin'] == 'si')
      					{
      						echo "<li><a href='gestion.php'>Gestión</a></li>";
      					}
      					?>
      					<?php if ($_SESSION['admin'] == 'si' || $_SESSION['admin'] == 'no')
      					{
      						echo "<li><a href='desconectar.php'> ".$_SESSION['usuario']." : Cerrar Sesión</a></li>";
      					}

      					?>
    				</ul>
  				</li>

  				<li><a href="#">Plantas</a>
    				<ul>
      					<li><a href="girasol.php">Girasol</a></li>
      					<li><a href="yuca.php">Yuca</a></li>
      					<li><a href="naranjo.php">Naranjo</a></li>
      					<li><a href="cerezo.php">Cerezo</a></li>
    				</ul>
  				</li>

  				<li><a href="#">Categoría</a>
    				<ul>
      					<li><a href="plantas_flor.php">Plantas de Flor</a></li>
      					<li><a href="plantas_fruto.php">Plantas de Fruto</a></li>
    				</ul>
  				</li>

  				<li><a href="#">Clima</a>
    				<ul>
      					<li><a href="clima_calido.php">Cálido</a></li>
      					<li><a href="clima_frio.php">Frío</a></li>
    				</ul>
  				</li>
  				
  				<li><a href="consejos.php">Consejos</a></li>
			</ul>
		</nav>
	</div>

	<!-- Este div contiene los principales contenidos de la página -->
	<div id="contenido">
		
		<!-- Este div contiene el texto -->
		<div>
			<h2 style="text-align:center">Clima Cálido</h2>

			<p>Comparado con áreas frías, el uso de cultivos de cobertura es especialmente importante en lugares cálidos porque la materia orgánica del suelo se volatiliza con más rapidez.

			<p>Por lo general, las áreas más frías tienen más materia orgánica pero son más sensible a perder esa materia orgánica cuando suben las temperaturas. Por ejemplo, cuando la temperatura media sube 1° Celsius en una zona fresca uno puede esperar pérdidas del 10% de materia orgánica, pero en una región más cálida sólo el 3% de pérdida. Esto sugiere una estratificación de la resiliencia de la materia orgánica del suelo.</p>

			<p>Considere, por ejemplo, los materiales leñosos: toman más tiempo para descomponerse que las hojas. Entonces, al depositar la materia orgánica en el suelo, los materiales más resistentes son los últimos en descomponerse, mientras que los otros materiales—en orden descendente de resistencia—se descomponen a tasas aceleradas en relación directa con el aumento de la temperatura.</p>

			<p>Entonces, en los suelos más calientes hay menos materia orgánica, pero no son tan sensibles a los aumentos de temperatura como suelos más fríos. Esto es muy importante porque como los suelos de las regiones más frías pierden materia orgánica, también pierden la capacidad de retener agua, lo que contribuye a temperaturas más cálidas (Kirschbaum, 1995).</p>

			<p>Debido a que la descomposición en suelos cálidos y húmedos es tan rápido, se requiere aproximadamente el doble de la materia orgánica para reemplazar la materia orgánica perdida mediante volatilización y cosecha de cultivos. Los productores en áreas cálidos y húmedos están luchando contra tres batallas. Primero está el calor, que mina la materia orgánica del suelo. Lo siguiente es la gran cantidad de material requerida para restaurar la fertilidad del suelo cada temporada o ciclo de cultivo. Y tercero es el mantenimiento de suficiente humedad del suelo para retener la materia orgánica presente. En sistemas de cero labranza, aproximadamente la mitad de la materia orgánica del suelo se pierde por descomposición comparado con la labranza convencional (Vieira et al., 2009).</p>

		</div>

		<!-- Este div contiene las imágenes -->
		<div>
			<img src="IMG/calor1.jpg" width="100%">
			<img src="IMG/calor2.jpg" width="100%">
		</div>

	</div>

	<footer>
		<div> <p> <a href=""> Twitter </a> </p> </div>
		<div> <p> <a href=""> Instagram </a> </p> </div>
		<div> <p> <a href=""> Facebook </a> </p> </div>
	</footer>

</body>
</html>