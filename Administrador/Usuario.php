<?php
require_once ('conexionOracle.php');

$conn = new Conexion();
$llamarMetodo = $conn->Conectar();

$sql = "SELECT * FROM t_usuario";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta name="Portafolio" content="Portafolio vehiculos">
<meta charset="utf-8">
	<title> Venta de Carros, posventa de carros	</title>
</head>

<body>
<header>
	<link  href="../Usuario/CSS/estilos.css" rel="stylesheet">
	<link  href="../Usuario/CSS/formulario.css" rel="stylesheet">

	<nav>
		<ul>
			<?php
require_once('menu.php');
			 ?>
		</ul>
	</nav>
	<h1>Comercializadora</h1>
</header>


<a href="Rusuario.php"> <img src="../Usuario/imagenes/acu.png " alt="Acualizar/Editar" width= "500" height="250"></a>
<a href="eliminaru.php"> <img src="../Usuario/imagenes/bou.png " alt="Borrar usuario" width= "500" height="250"></a>
<a href="Editaru.php"> <img src="../Usuario/imagenes/Rus.png " alt="Editar usuario" width= "500" height="250"></a>

<footer>
	<?php
	require_once ('footer.php');
	 ?>
</footer>
</body>

</html>
