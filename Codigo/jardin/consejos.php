<?php
    session_start();

    if(empty($_SESSION['admin'] == 'si' || $_SESSION['admin'] == 'no'))
    {
        header("Location: login.html");
    }

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
            <p>Cualquiera que sea el tipo de suelo del jardín, es necesario removerlo cada año mediante una cava, para obtener un terreno limpio al empezar cada periodo de cultivo.</p>

            <p>Las mejores épocas para sembrar el césped son primavera y otoño, ya que la tierra no está ni demasiado seca ni demasiado húmeda. No conviene remover la tierra si está muy húmeda, ya que es perjudicial para las plantas. Para saber si la tierra está en condiciones basta con coger un poco de tierra en las manos y notarla suelta, es decir, que no esté compacta.</p>

            <p> Se puede abonar en cualquier época del año, aunque es el otoño la más adecuada ya que desde principios de septiembre hasta mediados de octubre las condiciones climáticas acostumbran a ser mejores. Durante la primavera, corremos el riesgo de la proliferación de malas hierbas y en verano que sea demasiado caluroso.</p>

            <p> Antes de comenzar con el abonado del suelo, lo primero de todo es realizar una buena limpieza del terreno. Para ello, recomendamos aplicar Fertiberia Jardín "Herbicida Maleza" ya que vamos a eliminar las malas hierbas y la vegetación existente, lo que va a favorecer el establecimiento del nuevo césped.</p>

            <p> Después de una semana y media, que ya ha hecho efecto el producto, preparamos el suelo con una labor de labranza. En esta operación removemos la tierra y aflojamos las capas superficiales, a la vez que los restos de hierbas quedan volteadas y dispuestos para la descomposición, que añadirá materia orgánica al suelo. El labrado nos aportará oxigenación al suelo y drenaje para los excesos de agua. La tierra debe quedar fina y sin conglomerados, con una textura esponjosa. Esto facilitará además el crecimiento de las raíces.</p>

            <p>A continuación, se debe rastrillar la tierra para uniformizar la superficie. De esta manera, el terreno queda preparado para el abonado de fondo, que siempre se realiza antes de la plantación del césped. Posteriormente conviene volver a rastrillar la superficie abonada para incorporar el fertilizante al terreno. Recomendamos aplicar un abono sólido granulado de lenta liberación que fortalece y estimula el crecimiento de las semillas y céspedes jóvenes. Para ello aplicaremos "CespedPLUS Siembra y regeneración", unos 20-30 gramos por cada metro cuadrado. La gama de fertilizantes de lenta liberación de Fertiberia incorporan la tecnología de la molécula Metién-Urea, que permite suministrar a la planta los nutrientes que necesita para la germinación, y posteriormente va liberando gradualmente el resto de nutrientes, tal y como la planta los va necesitando para su crecimiento. De esta forma, nos aseguramos que nuestro fertilizante va a ser completamente aprovechado por nuestro césped.</p>
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