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
			<h2 style="text-align:center">Cerezo</h2>

			<p>Existen varias clases de cerezos, con distintas características. Por ejemplo, la variedad 'cola larga' tiene los rabitos de las cerezas largos y suelen ser pequeñas. Otras variedades son la 'Burlat', 'Lamber' y 'Ambrunés'. Cada una de ellas cuenta con ciertas particularidades, como la variación en su acidez, carnosidad y tiempo de maduración.</p>

			<p>En España son conocidas por su cantidad y calidad las cerezas del Valle del Jerte, donde se cultivan variedades autóctonas "Cereza del Jerte" con denominación de origen. En primavera se realiza en los pueblos de este valle la fiesta de El Cerezo en Flor, cuando se produce la floración de más de un millón y medio de cerezos. Declarada Fiesta de Interés Turístico Nacional.</p>

			<p>Es reconocida también por su exquisito sabor la cereza mediterránea, con cualidades excepcionales beneficiándose de la influencia del mar Mediterráneo, cultivada en poblaciones como Chiva, Gestalgar, Salsadella (Castellón), y en Terradas (Gerona); aunque la zona productiva más importante del Mediterráneo, es la de Vall de Gallinera por su precocidad y dulzura.</p>

			<p>El origen de este cultivo parece provenir de la antigua colonia griega de Kerasos (a la que muy posiblemente dio nombre), ubicada en la costa del Mar Negro. Las cerezas constituían un cultivo local muy importante, hasta que Lúculo, general romano que comandaba las tropas romanas en la guerra contra Mitrídates VI del Ponto, encuentra este cultivo y lo lleva a Roma, haciéndose muy popular por todo el Imperio. La antigua ciudad de Kerasos es la actual Giresun, cercana a Trebisonda.</p>

			<?php 

				$planta = mysqli_query($conexion, "select * from planta where nombre = 'cerezo'");
				
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

		<!-- Este div contiene las imágenes -->
		<div>
			<img src="IMG/cerezo1.jpg" width="100%">
			<img src="IMG/cerezo2.jpg" width="100%">
		</div>

	</div>

	<footer>
		<div> <p> <a href=""> Twitter </a> </p> </div>
		<div> <p> <a href=""> Instagram </a> </p> </div>
		<div> <p> <a href=""> Facebook </a> </p> </div>
	</footer>

</body>
</html>