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

<form action="#" method="post" accept-charset="utf-8" class="form-group">
    <h2>Buscar informacion de usuario</h2>
        <label>Usuario</label>
    <input type="text" name="usuario" placeholder= "usuario" required class="form-control" >
        <input type="submit"  value="Buscar" class="form-control">
</form>
<<?php
$conn = new Conexion();
$llamarMetodo= $conn->Conectar();


$sql =" SELECT * FROM usuarios WHERE usuario='$usuario'";
$stmt= $llamarMetodo->prepare($sql);
$stmt-> execute();
while ($row= $stmt->fetch()) {
echo '<form action="modif.php" method="post" accept-charset="utf-8" class="form-group">
    <h2>Actualizar datos usuario</h2>
        <label>Usuario</label>
    <input type="text" value='.$row[0]' required class="form-control" >
    <label>Constraseña</label>
    <input type="password" value='.$row[1]' required class="form-control required class="form-control" >
    <input type="text" value= '.$row[2]' required pattern="[A-z]+" class="form-control" >
    <label>Documento</label>
    <input type="text" value='.$row[3]' required  pattern="[0-9]+" class="form-control">
    <label>Numero de contacto</label>
    <input type="text" value='.$row[4]' required pattern="[0-9]+" class="form-control" >
    <label>Direccion</label>
    <input type="text" value='.$row[5]' required class="form-control"  >
    <label>Correo</label>
    <input type="email" value='.$row[6]'required class="form-control">
    <label>Tipo de usuario</label>
    <select name="rol" class="form-control">
    <option value="" >seleccione el tipo de usuario</option>
    <?php
        while ($row2 = $stmt2->fetch()) {
            echo '<option value = "'.$row[0].'"> '.$row[1].'</option> ';
        }
    ?>
    </select>
        <input type="submit"  value="Modificar" class="form-control">

</form>';
  echo '<form';
  echo $row[0]."<br />";
  echo $row[1]."<br />";
  echo $row[2]."<br />";
  echo $row[3]."<br />";
  echo $row[4]."<br />";
  echo $row[5]."<br />";
  echo $row[6]."<br />";
  echo $row[7]."<br />";


}
    # code...


 ?>

<footer>
	<?php
	require_once ('footer.php');
	 ?>
</footer>
</body>

</html>
