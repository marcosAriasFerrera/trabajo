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
			<img src="IMG/yuca1.jpg" width="100%">
			<img src="IMG/yuca2.jpg" width="100%">
		</div>
		
		<!-- Este div contiene el texto -->
		<div>
			<h2 style="text-align:center">Yuca</h2>

			<p>La yuca es un arbusto perenne que alcanza los dos metros de altura. Está adaptada a condiciones de la zona intertropical, por lo que no resiste las heladas. Requiere altos niveles de humedad —aunque no anegamiento— y de sol para crecer.</p>

			<p>Se reproduce mejor por esquejes que por semilla en las variedades actualmente cultivadas. El crecimiento es lento en los primeros meses, por lo que el control de hierbas es esencial para un correcto desarrollo. En su uso normal, la planta entera se desarraiga al año de edad para extraer las raíces comestibles; si alcanza mayor edad, la raíz se endurece hasta la incomestibilidad. De las plantas desarraigadas se extraen los esquejes para la replantación.

			<p>La raíz de la mandioca es cilíndrica y oblonga, y alcanza el metro de largo y los 10 cm de diámetro. La cáscara es dura, leñosa e incomestible. La pulpa es firme —incluso dura— antes de la cocción, surcada por fibras longitudinales más rígidas; muy rica en hidratos de carbono y azúcares, se oxida rápidamente una vez desprovista de la corteza. Según la variedad, puede ser blanca o amarillenta.</p>

			<p>La presencia de elementos cianogénicos, como por ejemplo la linamarina en la raíz, hace que la misma sea inutilizable y venenosa en algunas variedades, sin una prolongada cocción, necesaria además para reducir la rigidez de la pulpa. Aunque la variedad llamada Manihot aipi (considerada a veces una subespecie de M. esculenta) contiene concentraciones elevadas de elementos venenosos, estos desaparecen al hervirla.</p>

			<p>Alternativamente, la raíz puede rallarse en crudo, tras lo cual es prensada para extraer el jugo potencialmente tóxico (que contiene ácido cianhídrico - HCN). Una vez secada al fuego o al sol, se muele para obtener una harina fina y delicada de la que se obtiene, por sedimentación, el almidón de mandioca y de este se obtiene la tapioca, también llamada casabe. Mediante este procedimiento se hacen comestibles incluso las variedades "amargas" que tienen alto contenido de toxinas. Ciertas culturas africanas maceran la raíz en agua hasta su fermentación para eliminar las toxinas antes de secarla y molerla.</p>

			<p>La raíz fresca debe consumirse en un plazo breve, ya que debido a su alto contenido de almidones se descompone rápidamente por la acción de diversos microorganismos. Congelada o envasada al vacío se conserva durante meses en buen estado.</p>

			<?php 

				$planta = mysqli_query($conexion, "select * from planta where nombre = 'yuca'");
				
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
