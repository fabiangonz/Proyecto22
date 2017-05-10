<?php
require_once ('conexionOracle.php');

$conn = new Conexion();
$llamarMetodo = $conn->Conectar();

$sql = "SELECT * FROM contacto_sol";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();
 ?>




<!DOCTYPE html>
<html lang="es">
<head>
<meta name="Portafolio" content="Portafolio vehiculos">
<meta charset="utf-8">
	<title> Contacto, Empresa	</title>
</head>

<body>
<header>
  <link  href="./CSS/formulario.css" rel="stylesheet">
	<link  href="./CSS/estilos.css" rel="stylesheet">
		<link  href="./CSS/imagenes.css" rel="stylesheet">
	<nav>
		<ul>
      <?php
require_once('menu.php');
			 ?>

		</ul>
	</nav>
	<h1>Contactanos</h1>
<!--<h2>vacio</h2> -->

</header>

<h2>Horario</h2>
<p>
de lunes a viernes las 24 horas
Toda solicituda se radicara o respondera en el termino de 3 dias habiles, si en este termino no se ha respondido porfavor comuniquese con nosotros a los siguientes telefonos :   Bogota (57+1) 424 9393 Linea nacional   -
</p>

<form action="insertsol.php" method="post" accept-charset="utf-8" class="form-group">
  <!--<h2>vacio</h2>
  <label>Numero de solicitud</label>
      <input class="form-control" type="text" name="n_solicitud" placeholder= "Ingrese numero de solicitud" required > -->
  <label>Nombre</label>
  <input class="form-control" type="text" name="nombre" placeholder= "Nombre" required pattern="[A-z]+" class="name">
   <label>Numero de contacto</label>
   <input class="form-control" type="text" name="n_telefono" placeholder="Telefono" pattern="[0-9]+">
  <label>Correo</label>
  <input class="form-control" type="email" name="correo" placeholder="Correo" required>
    <label>Tipo de solicitud</label>
    <select class="form-control" name="t_solicitud" >
      <option value="">seleccione el tipo de solicitud</option>
  <?php
      while ($row = $stmt->fetch()) {
      echo '<option value = "'.$row[0].'"> '.$row[1].'</option> ';
      }
  ?>
    </select>
      <textarea class="form-control" name="comentarios" placeholder="Comentarios"></textarea>
  <input class="form-control" type="submit"  value="Enviar">

</form>

<section class="mapa">
<h5>Ubicacion</h5>
<br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d836.0520743472911!2d-74.07937665837481!3d4.601849201860584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99098822d0f3%3A0x90e06de55bacdce7!2sCl.+12+%2312-12%2C+Bogot%C3%A1%2C+Colombia!5e0!3m2!1ses!2ses!4v1488550184887" width="400" height="300"  style="border:0" allowfullscreen></iframe>
</section>

<footer>
  <?php
	require_once ('footer.php');
	 ?>

</footer>

</body>

</html>
