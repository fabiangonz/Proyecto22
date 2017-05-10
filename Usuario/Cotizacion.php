<?php
require_once ('conexionOracle.php');

$conn = new Conexion();
$llamarMetodo = $conn->Conectar();
//Cotizacion
 $sql1 = "SELECT * FROM departamentos";
$stmt1 = $llamarMetodo->prepare($sql1);
$stmt1->execute();

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
	<title> Cotizacion, poscompra de carros y motos	</title>


</head>

<body>
<header>
<link  href="./CSS/estilos.css" rel="stylesheet">
<link href="./CSS/formulario.css" rel="stylesheet" />
	<nav>
		<ul>
      <?php
require_once('menu.php');
			 ?>

		</ul>
	</nav>
	<h1>Cotizacion de vehiculo</h1>

</header>

<!--
<section class="formulario">
 MODULO Cotizacion DESDE COL -6 -->
                        <form action="insertcot.php" method="post" class="form-group">

                                                  <h6>* La informacion aqui suministrada no equivale a una compra</h6>
                                	<label>Nombre</label>
                                  <input type="text" name="nombre" placeholder= "Nombre" required pattern="[A-z]+" class="form-control" >
                                	<label>Documento</label>
                                  <input type="text" name="documento_c" placeholder= "Documento" required  pattern="[0-9]+" class="form-control">
                                		<label>Numero de contacto</label>
                                		<input type="text" name="telefono" placeholder="Telefono" required pattern="[0-9]+"  class="form-control">

                                		<label>Correo</label>
                                		<input type="email" name=" correo" placeholder="Correo" required class="form-control">
                                    <label>Departamento</label>
                                    <select name="nombre_d"  class="form-control">
                                      <option value="">seleccione el departamento</option>
                                  <?php
                                      while ($row = $stmt1->fetch()) {
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
                                  <input type="text" name="modelo" placeholder="Modelo" required class="form-control">
                                  <textarea class="form-control" name="comentarios" placeholder="Comentarios"></textarea>
                                	<input type="submit"  value="Enviar" class="form-control">
                                </form><!--
</section>
-->

<p id="as">*Aplican condiciones y restricciones. Productos sujetos a cambio de precio
	y inventario sin previo aviso. Las imágenes son ilustrativas y pueden no coincidir
	con los productos exhibidos y ofrecidos. El precio sugerido de venta al público corresponde
	al precio vigente hasta el 1 de Marzo de 2017</p>

<footer >
  <?php
	require_once ('footer.php');
	 ?>

</footer>
</body>

</html>
