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
			<h2 style="text-align:center">Girasol</h2>

			<p>Los girasoles son plantas anuales (como lo indica su nombre específico latín: annuus) que pueden medir tres metros de alto. Los tallos son generalmente erectos e hispidos. La mayoría de las hojas son caulinares, alternas, pecioladas, con base cordiforme y bordes aserrados. La cara inferior es usualmente más o menos hispida, a veces glandulosa y la superior glabra. El involucro es hemiesférico o anchado y mide 15-40 mm y hasta más de 20 cm. Las brácteas involúcrales llamadas filiaros se encuentran en número de 20-30, y hasta más de 100, ovaladas a lanceoladas —brutalmente estrechadas en el ápice— nerviadas longitudinalmente, con el borde generalmente hispido o hirsuto, al igual que sus caras exteriores, raramente son glabras. Receptáculo con escamas centimétricas tridentadas, con el diente mediano más grande y la punta hirsuta. Las lígulas, en número de 15-30, y hasta 100, de color amarillo a anaranjado hasta rojas, miden 2,5-5 cm; los flósculos, de 150 hasta 1000, del mismo color con los estambres pardos-rojizos. Los frutos son aquenios ovalados, algo truncados en la base, de 3-15 mm de largo, glabros o casi, estriados por finísimos surcos verticales, de color oscuro, generalmente casi negras —aunque pueden ser también blanquecinas, rojizas, de color miel o bien moteados o con bandas longitudinales más claras—. El vilano consiste en dos escamas lanceoladas de 2-3,5 mm acompañadas, o no, de hasta cuatro escamitas obtusas de 0,5-1 mm, todas tempranamente caedizas.</p>

			<p>Hay distintos tipos de girasoles: oleaginosos, de confitura o confitería, de alto contenido de ácido oleico y ornamentales.</p>

			<p>El girasol contiene hasta un 58 % de aceite en su fruto, aceite usado para cocinar, y en la producción de biodiésel. El aceite de girasol virgen —obtenido del prensado de las pipas—, aunque no posee las cualidades del aceite de oliva, sí posee una cantidad cuatro veces mayor de vitamina E natural que este.</p>
			<p>El "orujo" que queda después de la extracción del aceite se utiliza como alimento para el ganado.</p>
			<p>Los tallos contienen una fibra que puede ser usada en la elaboración del papel, y las hojas pueden servir también de alimento para el ganado.</p>

			<?php 

				$planta = mysqli_query($conexion, "select * from planta where nombre = 'girasol'");
				
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
			<img src="IMG/girasol1.jpg" width="100%">
			<img src="IMG/girasol2.jpg" width="100%">
		</div>

	</div>

	<footer>
		<div> <p> <a href=""> Twitter </a> </p> </div>
		<div> <p> <a href=""> Instagram </a> </p> </div>
		<div> <p> <a href=""> Facebook </a> </p> </div>
	</footer>

</body>
</html>