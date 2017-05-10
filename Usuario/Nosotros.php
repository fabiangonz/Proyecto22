<!DOCTYPE html>
<html lang="es">
<head>
<meta name="Portafolio" content="Portafolio vehiculos">
<meta charset="utf-8">
	<title> Informacion, Empresarial	</title>
</head>

<body>
<header>
	<link  href="./CSS/estilos.css" rel="stylesheet">
	<nav>
		<ul>
			<?php
require_once('menu.php');
			 ?>

		</ul>
	</nav>
	<h1>Comercializadora RUBYSHOP CARS</h1>
</header>

<?php
require_once ('conexionOracle.php');

$conn = new Conexion();
$llamarMetodo = $conn->Conectar();

$sql = "SELECT * FROM Informacion";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();
while ($row = $stmt->fetch()) {


echo '<section class="prf">
	<h3>Info empresarial</h3>
	<p>
	'.$row[2].'
	</p>
</section>';}
 ?>
<footer>
	<?php
	require_once ('footer.php');
	 ?>

</footer>

</body>

</html>
