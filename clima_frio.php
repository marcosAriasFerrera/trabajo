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
			<h2 style="text-align:center">Clima Frío</h2>

			<p>Debido a las características especiales que presenta el clima frío, es importante que usted cuente con los elementos necesarios para que su producción no se vea afectada por las heladas, las fuertes lluvias o los vientos inclementes. Incluso en zonas del país donde predominan las temperaturas bajas, durante ciertos periodos del año se presentan condiciones mucho más agresivas que pueden poner en riesgo una producción de meses de trabajo.</p>

			<p>Poder ofrecer los cuidados que necesitan sus cultivos, lo ideal es contar con los insumos necesarios y los productos para el agro diseñados específicamente para este objetivo. En Agropinos contamos con una amplia variedad de artículos pensados para los productores colombianos, entre ellos, los que trabajan la tierra en climas fríos.</p>

			<p>Los cultivos de clima frío más comunes en Colombia son las frutas como la uchuva, la mora, el durazno, la pera, la papayuela, el tomate de árbol, la manzana, la frambuesa y la breva. En cuanto a hortalizas y verduras, los productos que más se cultivan en clima frío son la acelga, la espinaca, el brócoli, la lechuga, el perejil, el tomate, la alcachofa, repollo, ajo, coliflor, la arveja, el frijol, la habichuela, los espárragos, las habas y la cebolla larga y de bulbo.</p>

			<p>En cuanto a tubérculos se destacan la papa, la arracacha, la zanahoria, las ibias, los cubios, los rábanos, la remolacha y la papa criolla. Cereales como el trigo, la cebada, la quinua y la avena.</p>

		</div>

		<!-- Este div contiene las imágenes -->
		<div>
			<img src="IMG/frio1.jpg" width="100%">
			<img src="IMG/frio2.jpg" width="100%">
		</div>

	</div>

	<footer>
		<div> <p> <a href=""> Twitter </a> </p> </div>
		<div> <p> <a href=""> Instagram </a> </p> </div>
		<div> <p> <a href=""> Facebook </a> </p> </div>
	</footer>

</body>
</html>