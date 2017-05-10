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
<!--<section class="config-link-pop-up">
code
</section>
<a  href="#popup" class="popup-link">Registrar </a>

<section id="popup">
	<article class="popup-contenedor"> -->
			<form action="insertaru.php" method="post" accept-charset="utf-8" class="form-group">
					<h2>Registro de usuario</h2>
					<label>Nombre</label>
					<input type="text" name="nombre" placeholder= "Nombre" required pattern="[A-z]+" class="form-control" >
					<label>Documento</label>
					<input type="text" name="documento" placeholder= "Documento" required  pattern="[0-9]+" class="form-control">
					<label>Numero de contacto</label>
					<input type="text" name="telefono" placeholder="Telefono" required pattern="[0-9]+" class="form-control" >
					<label>Direccion</label>
					<input type="text" name="direccion" placeholder= "Direccion" required class="form-control"  >
					<label>Correo</label>
					<input type="email" name="correo" placeholder="Correo" required class="form-control">
					<label>Tipo de usuario</label>
					<select name="rol" class="form-control">
					<option value="" >seleccione el tipo de usuario</option>
					<?php
							while ($row = $stmt->fetch()) {
									echo '<option value = "'.$row[0].'"> '.$row[1].'</option> ';
							}
					?>
					</select>
					<label>Usuario</label>
					<input type="text" name="usuario" placeholder= "usuario" required class="form-control" >
					<label>Asignar contraseña</label>
					<input type="password" name="contrasena" placeholder= "Contraseña" required class="form-control" >
					<input type="submit"  value="insertar" class="form-control">
			</form>
<!--<a class="popup-cerrar" href="#">Cerrar</a>
	</article>
</section>
-->
<!--
<a href="IngresarActualizar.php"> <img src="../Usuario/imagenes/acu.png " alt="Acualizar/Editar" width= "500" height="250"></a>
<a href="Busuario.php"> <img src="../Usuario/imagenes/bou.png " alt="Borrar usuario" width= "500" height="250"></a>
-->
<footer>
	<?php
	require_once ('footer.php');
	 ?>
</footer>
</body>

</html>
