
<!DOCTYPE html>
<html lang="es">
<head>
<meta name="Portafolio" content="Portafolio vehiculos">
<meta charset="utf-8">
	<title> Portafolio, Inventario de motos	</title>
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
	<h2>Motos</h2>
	</header>

	<?php
	require_once('conexionOracle.php');

	$conn = new Conexion();
	$llamarMetodo= $conn->Conectar();


	$sql =" SELECT * FROM vehiculo WHERE tipo='2' ";
	$stmt= $llamarMetodo->prepare($sql);
	$stmt-> execute();

	    # code...


	 ?>

<?php
		while ($row= $stmt->fetch()) {


echo '<section class="im1">
	<h5>'.$row[2].'</h5>
<img src="../Usuario/'.$row[7].'" alt="Ducati Diavel" width= "200" height="200">
<hr>
<p> $'.$row[5].'
	<br>
	'.$row[3].'
</p>
</section>';
}
 ?>

<footer>
	<?php
	require_once ('footer.php');
	 ?>

</footer>

</body>

</html>
