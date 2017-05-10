<?php
require_once ('conexionOracle.php');

$conn = new Conexion();
$llamarMetodo = $conn->Conectar();
$sql = "SELECT * FROM departamentos";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();

$sql2 = "SELECT * FROM t_vehiculo";
$stmt2 = $llamarMetodo->prepare($sql2);
$stmt2->execute();


$sql3 = "SELECT * FROM marca";
$stmt3 = $llamarMetodo->prepare($sql3);
$stmt3->execute();

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



<form action="insertvent.php" method="post" class="form-group">
					<h2>Registrar ventas</h2>
					<label>Nombre</label>
					<input type="text" name="nombre_v" placeholder= "Nombre" required pattern="[A-z]+" class="form-control" >
					<label>Documento</label>
					<input type="text" name="documento_v" placeholder= "Documento" required  pattern="[0-9]+" class="form-control">
						<label>Numero de contacto</label>
						<input type="text" name="telefono_v" placeholder="Telefono" required pattern="[0-9]+"  class="form-control">

						<label>Correo</label>
						<input type="email" name="correo_v" placeholder="Correo" required class="form-control">
						<label>Departamento</label>
						<select name="nombre_d"  class="form-control">
							<option value="">seleccione el departamento</option>
					<?php
							while ($row = $stmt->fetch()) {
							echo '<option value = "'.$row[0].'"> '.$row[1].'</option> ';
							}
					?>
					</select>
					<label>Tipo de Vehiculo</label>
					<select name="tipo" class="form-control">
						<option value="">seleccione el tipo de vehiculo</option>
				<?php
						while ($row = $stmt2->fetch()) {
						echo '<option value = "'.$row[0].'"> '.$row[1].'</option> ';
						}
				?>
					</select>

					<select name="marca" class="form-control">
						<option value="">seleccione la marca</option>
				<?php
						while ($row = $stmt3->fetch()) {
						echo '<option value = "'.$row[0].'"> '.$row[1].'</option> ';
						}
				?>
					</select>

					<label>Modelo</label>
					<input type="text" name="modelo_v" placeholder="Modelo" required class="form-control">
					<label>Precio</label>
					<input type="text" name="precio_v" placeholder="Precio" required class="form-control">
					<input type="submit"  value="Enviar" class="form-control">
				</form>



<footer>
  <?php
  require_once ('footer.php');
   ?>

</footer>
</body>

</html>
