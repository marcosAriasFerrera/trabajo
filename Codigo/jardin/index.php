<?php

session_start();

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
			<p>El término "jardinería" se conoce desde finales del siglo xiii (con él se designaba el conjunto de los jardines). Pero adquiere su rango de nobleza con el célebre tratado publicado por vez primera en 1709 titulado "Teoría y Práctica de la Jardinería", de Dézallier d’Argenville, abogado y secretario del rey, gran amante de los jardines. Hizo una síntesis de los conocimientos del Gran Siglo para el arte de los jardines y para las técnicas hortícolas. Por otra parte, Olivier de Serres, agrónomo, escribió en 1599 «El Teatro de la Agricultura y Cuidado de los Campos» detallando todo lo que se necesita para cuidar, enriquecer y embellecer la casa rústica. Se trata, indudablemente, de un manual agrícola en el que se explica la manera de gestionar una propiedad rural (la propiedad de O. de Serres era de 150 ha.) y en el que la finalidad económica primaba sobre el hecho estético y el placer, pero la obra contiene un capítulo titulado «La Jardinería», con unos subtítulos: «Para tener Hierbas y Frutos: las Hierbas y flores olorosas: las Hierbas medicinales: los Frutos de los Árboles: el Azafrán, el Lino, el Cáñamo, la Granza, los Cardos, los Rozeaux y, además: la Manera de hacer las Conservas para la conservación de los frutos en general».</p>

			<p>El término jardinería se usa, especialmente, para el uso, goce y consumición de los particulares mientras que el término horticultura designa la actividad profesional dedicada a la producción de frutos, flores, legumbres y otros productos vegetales. Sus principales denominaciones son: la horticultura para las legumbres, fruticultura para los frutos, floricultura para las flores y arboricultura para los árboles y arbustos. Pese a todo, puede ser utilizado para actividades de tipo lucrativo, si la producción no es muy importante, por ejemplo, cuando un horticultor vende, directamente, en un mercado. Esta situación es corriente en países donde los mercados continúan abasteciéndose por medio de pequeños productores que podrían denominarse "jardineros".</p>
		</div>

		<!-- Este div contiene las imágenes -->
		<div>
			<img src="IMG/jardin1.jpg" width="100%">
			<img src="IMG/jardin2.jpg" width="100%">
		</div>

	</div>

	<footer>
		<div> <p> <a href=""> Twitter </a> </p> </div>
		<div> <p> <a href=""> Instagram </a> </p> </div>
		<div> <p> <a href=""> Facebook </a> </p> </div>
	</footer>

</body>
</html>