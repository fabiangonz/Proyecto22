

<!-- ARREGLAR POR QUE SE PERDIERON LOS ESTILOS-->

<!DOCTYPE html>
<html lang="es">
<head>
<meta name="Portafolio" content="Portafolio vehiculos">
<meta charset="utf-8">
	<title> Preguntas frecuentes, empresa </title>
</head>

<body>
<header>
	<link  href="./CSS/estilos.css" rel="stylesheet">
<link  href="./CSS/collapse.css" rel="stylesheet">
<link  href="./CSS/imagenes.css" rel="stylesheet">

	<nav>
		<ul>
			<?php
require_once('menu.php');
			 ?>

		</ul>
	</nav>

	<h1>Preguntas frecuentes</h1>
	</header>
	<main id="acordion">
	<?php
require_once ('conexionOracle.php');
$conn = new Conexion();
$llamarMetodo = $conn->Conectar();

$sql = "SELECT * FROM faq";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();
while ($row = $stmt->fetch()) {
echo '
	 <section id="item1">
	 	<a href="#item1"><h4>'.$row[0].'</h4></a>

		<p>'.$row[1].'</p>

	 </section>
';}
	  ?>
		 </main>
<!--	 <section id="item2">
		<a href="#item2"><h4>¿Cómo puedo encontrar un concesionario?</h4></a>
		<p> Puedes encontrar un mapa en la seccion del menu contactenos
			con nuestra ubicacion y nuestro numero de contacto.
	</p>
	 </section>
	 <section id="item3">
		<a href="#item3"><h4>¿A qué número debo llamar en caso de cualquier problema mecánico?</h4></a>
		<p>
Puedes contactar los siete días de la semana, 365 días al año,
 en todo el país, acerca de nuestras garantías vigentes para cada
 modelo. Para ello está disponible en el Centro de Atención
 al Cliente en Bogotá al 422 22 22 y  01 8000 (1) 22222  para el resto del país.

	</p>
	 </section>

 <section id="item4">
	<a href="#item4"><h4>	¿Cuál es el alcance y la duración de mi garantía?</h4></a>
	<p>
		La garantía cambia de acuerdo con el modelo. Puedes
		saber más sobre ella por medio de la seccion contactenos enviando su solicitud.
		</p>
 </section>-->

<footer>
	<?php
	require_once ('footer.php');
	 ?>

</footer>

</body>

</html>
