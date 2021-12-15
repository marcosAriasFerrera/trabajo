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
		
		<!-- Este div contiene las imágenes -->
		<div>
			<img src="IMG/naranjo1.jpg" width="100%">
			<img src="IMG/naranjo2.jpg" width="100%">
		</div>
		
		<!-- Este div contiene el texto -->
		<div>
			<h2 style="text-align:center">Naranjo</h2>

			<p>Los naranjos tienen su origen en India, Pakistán, Vietnam y el sureste de China y fueron traídos a occidente por los árabes.</p>

			<p>El naranjo es en realidad un híbrido entre los árboles de limonzón (Citrus maxima) y mandarina (Citrus reticulata).</p>

			<p>Es un árbol frutal del género Citrus, que forma parte de la familia de las rutáceas. Se trata de un árbol de porte mediano -aunque en óptimas condiciones de cultivo. llega hasta los 13 m de altura-, perenne, de copa grande, redonda o piramidal, con hojas ovales de entre 7 a 10 cm de margen entero y frecuentemente estipuladas y ramas en ocasiones con grandes espinas (más de 10 cm). Sus flores blancas, llamadas azahar, nacen aisladas o en racimos y son sumamente fragantes. Su fruto es la naranja dulce.</p>

			<p>El naranjo es un árbol de tamaño mediano, de tres a cinco metros de altura, con copa redondeada y ramas regulares. Un solo tronco, derecho y cilíndrico, verdoso primero y gris después. Las ramas aparecen a un metro, poco más o menos, del suelo. Las hojas son perennes, medianas y alargadas, con base redondeada y terminadas en punta. Las flores aparecen en las axilas de las hojas, solitarias o en racimos.</p>

			<p>El naranjo puede reproducirse por germinación de una semilla, por trasplante de una estaca o por acodo, es decir, partiendo de una raíz. En cualquier caso ha de transcurrir un cierto tiempo en el vivero o plantel antes de pasar al huerto o naranjal.</p>

			<p>Es susceptible a las heladas, las cuales pueden acabar con el fruto e incluso con el propio árbol. Por ello se desaconseja su cultivo por encima de 250 metros sobre el nivel del mar en el interior o de los 400 metros en la costa. Es también importante la calidad de la tierra; la mejor es la de arena silícea con algo de arcilla y cal. Influye mucho también la orientación, que a ser posible será mirando hacia el ecuador, es decir, dándole la espalda al polo más cercano, para estar preservado de los fríos vientos de ese sector, así como recibir más horas de sol. También es preferible que el suelo esté inclinado para que la inestabilidad del aire evite escarchas y heladas, puesto que las capas de aire al enfriarse tienden siempre a desplazarse hacia abajo, y estos cambios evitan que los frutos se hielen, como ocurriría si las temperaturas bajas fueran estables. Algo decisivo es que el terreno pueda ser abundantemente regado, aunque sin formar charcos.</p>

			<?php 

				$planta = mysqli_query($conexion, "select * from planta where nombre = 'naranjo'");
				
					while ($plantaDatos = mysqli_fetch_array($planta))
					{
						$clima = mysqli_query($conexion, "select * from clima where idClima = '".$plantaDatos['clima']."'");
						$tipo_planta = mysqli_query($conexion, "select * from tipo_planta where idTipo_planta = '".$plantaDatos['tipo_planta']."'");
						while($categoria = mysqli_fetch_array($tipo_planta))
						{
							echo " <p> <strong>Categoria:</strong> ".$categoria['nombre']."  </p>";
						}

						while($clima = mysqli_fetch_array($clima))
						{
							echo " <p> <strong>Clima:</strong> ".$clima['nombre']."  </p>";
						}

					}

			?>

		</div>

	</div>

	<footer>
		<div> <p> <a href=""> Twitter </a> </p> </div>
		<div> <p> <a href=""> Instagram </a> </p> </div>
		<div> <p> <a href=""> Facebook </a> </p> </div>
	</footer>

</body>
</html>
