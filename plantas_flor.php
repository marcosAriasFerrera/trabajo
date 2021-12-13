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
			<h2 style="text-align:center">Plantas de Flor</h2>

			<p>Las angiospermas (nombre científico Angiospermae, del griego: αγγειον, angíon- vaso, ánfora, y σπέρμα, sperma, semilla; sinónimo del taxón Magnoliophyta sensu Cronquist), comúnmente llamadas plantas con flores o plantas florales, son las plantas con semilla cuyas flores tienen verticilos o espirales ordenados de sépalos, pétalos, estambres y carpelos; los carpelos encierran a los óvulos y reciben el polen en su superficie estigmática en lugar de recibirlo directamente en el óvulo como las gimnospermas, y al madurar el fruto se encuentran sus "semillas envasadas", es decir la semilla madura se encuentra encerrada en el fruto (como antes el óvulo en el carpelo), carácter distintivo que le da el nombre al grupo. En algunos textos se considera que únicamente las angiospermas son plantas con flores, ya que la floración de otras espermatofitas es diferente.nota El nombre significa semilla vestida, en alusión a la presencia de frutos. En esto difieren de las gimnospermas.</p>

			<p>Magnoliophyta es el nombre del taxón ubicado en la categoría taxonómica de división, que en el sistema de clasificación de Cronquist (1981, 1988) coincide en su circunscripción con las que en otros sistemas de clasificación son las llamadas angiospermas (Angiospermae en el sistema de clasificación de Engler y el moderno sistema de clasificación APG III de 2009 coincidente con el sistema de clasificación APG II de 2003). El nombre deriva del género Magnolia, el cual necesariamente está incluido dentro del grupo, seleccionado por algunos autores para dar el nombre al grupo por ser un género representativo de las que en su momento se creyeron las angiospermas con más caracteres ancestrales retenidos.</p>

			<p>Su estructura particular y la aparición del fruto como órgano nuevo no es la única diferencia que poseen con el resto de las espermatofitas; otros caracteres morfológicos distintivos son: la reducción del gametófito femenino a solo unas pocas células, la doble fecundación (con la formación de un tejido nutritivo característico, triploide, llamado endosperma, al tiempo que se fecunda al óvulo), y un xilema y floema distintivos, más recientes que los del resto de las traqueofitas, y más eficientes en muchos aspectos (aunque el xilema parece haber evolucionado ya dentro del clado, siendo las angiospermas más primitivas similares en sus tubos xilemáticos a las gimnospermas).</p>

			<p>Las angiospermas son un grupo de espermatofitas reconocido como monofilético desde hace mucho tiempo debido a sus caracteres morfológicos distintivos, y cuya monofilia fue sostenida posteriormente por los análisis moleculares de ADN.</p>

		</div>

		<!-- Este div contiene las imágenes -->
		<div>
			<img src="IMG/flor1.jpg" width="100%">
			<img src="IMG/flor2.jpg" width="100%">
		</div>

	</div>

	<footer>
		<div> <p> <a href=""> Twitter </a> </p> </div>
		<div> <p> <a href=""> Instagram </a> </p> </div>
		<div> <p> <a href=""> Facebook </a> </p> </div>
	</footer>

</body>
</html>