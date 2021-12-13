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
			<h2 style="text-align:center">Plantas de Fruto</h2>

			<p>Los árboles y arbustos frutales son especies perennes y leñosas, dividiéndose en dos grandes grupos de hojas caducas y de hojas perennes, cada una con un ciclo biológico diferente. A efectos de productividad de la plantación, se debe tener en cuenta la preparación del suelo y, si fuese necesario, dependiendo de la zona de cultivo, la preparación de un sistema de riego, en función de sus necesidades hídricas.</p>

			<p>La mayoría de los huertos se plantan para una sola variedad de fruta. Si bien se reconoce la importancia de introducir la biodiversidad en las plantaciones forestales, parecería beneficioso introducir algo de diversidad genética en las plantaciones de huertas, así como intercalando otros árboles a través de la huerta. La diversidad genética en un huerto proporcionaría resistencia a plagas y enfermedades al igual que en los bosques. Estudios de polinización y del clima también juegan un papel central en el desarrollo del huerto frutal, vigila en invierno las heladas tardías que pueden afectar a la floración de los árboles, y en verano, no se debe subestimar el riesgo de granizo repentino que puede dañar la maduración de la fruta. En zonas de clima frío, se pueden limitar los riesgos mediante la selección de variedades resistentes, plantas más rústicas o de floración más tardía.</p>

			<p>Los huertos a veces se concentran cerca de cuerpos de agua donde los extremos climáticos se moderan y el tiempo de floración se retrasa hasta que pasa el peligro de las heladas.Un árbol frutal es cualquier árbol productor de frutas, cuyas estructuras formadas por el óvulo maduro de una flor, contiene una o más semillas.</p>

			<p>Sin embargo ya que para poder saberlo tienen que relacionarse en una gran cantidad ya que todas las plantas con flores producen frutos, el término usado en horticultura designa a los árboles que proveen frutas como alimento del ser humano. Esta designación incluye también a los árboles que producen núculas (nueces), los llamados frutos secos. Aunque es botánicamente incorrecto, también suelen considerarse como árboles frutales los árboles que producen unas coberturas carnosas en ciertas semillas, llamadas arilo (falsos frutos).</p>

			<p>La disciplina científica y el cultivo de las frutas se denomina pomología, y se centra principalmente en el desarrollo de las técnicas de cultivo y los estudios fisiológicos en árboles frutales.</p>

		</div>

		<!-- Este div contiene las imágenes -->
		<div>
			<img src="IMG/fruto1.jpg" width="100%">
			<img src="IMG/fruto2.jpg" width="100%">
		</div>

	</div>

	<footer>
		<div> <p> <a href=""> Twitter </a> </p> </div>
		<div> <p> <a href=""> Instagram </a> </p> </div>
		<div> <p> <a href=""> Facebook </a> </p> </div>
	</footer>

</body>
</html>