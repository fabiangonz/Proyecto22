<!DOCTYPE html>
<html lang="es">
<head>
<meta name="Portafolio" content="Portafolio vehiculos">
<meta charset="utf-8">
	<title> Portafolio, Inventario	</title>
</head>

<body>
<header>
	<link  href="../Usuario/CSS/estilos.css" rel="stylesheet">
	<link  href="../Usuario/CSS/imagenes.css" rel="stylesheet">

	<nav>
		<ul>
			<?php
require_once('menu.php');
			 ?>

		</ul>
	</nav>
	<h1>Comercializadora</h1>
</header>
<section class="hlinks">
	<h4>Portafolio</h4>
	<a href="Motos.php"> <img src="../Usuario/imagenes/Estilos/PMotos.jpg " alt="Portafolio Motos" width= "500" height="250" ></a>
<a href="Carros.php"> <img src="../Usuario/imagenes/Estilos/PCarro.jpg " alt="Portafolio Carros" width= "500" height="250"></a>
</section>
<footer>
	<?php
	require_once ('footer.php');
	 ?>
</footer>
</body>

</html>
