<?php
require_once ('conexionOracle.php');

$conn = new Conexion();
$llamarMetodo = $conn->Conectar();

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
	<!--<link  href="../Usuario/CSS/popup.css" rel="stylesheet">-->
	<nav>
		<ul>
			<?php
require_once('menu.php');
			 ?>
		</ul>
	</nav>
	<h1>Comercializadora</h1>
</header>

			<form action="eliminacionu.php" method="post" accept-charset="utf-8" class="form-group">
					<h2>Eliminar  usuario</h2>
					<label>Usuario</label>
					<input type="text" name="usuario" placeholder= "usuario" required class="form-control" >
					<input type="submit"  value="Borrar" class="form-control">
			</form>

<footer>
	<?php
	require_once ('footer.php');
	 ?>
</footer>
</body>

</html>
