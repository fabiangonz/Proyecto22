<?php
require_once('conexionOracle.php');
$nombre = $_POST['nombre'];
$documento_c = $_POST['documento_c'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$nombre_d = $_POST['nombre_d'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$comentarios = $_POST['comentarios'];

$conn = new Conexion();
$llamarMetodo= $conn->Conectar();


#<!-- '$id_cotizacion', -->
$sql =" INSERT INTO cotizacion VALUES ('','$nombre','$documento_c','$telefono','$correo',
  	'$nombre_d','$tipo','$marca','$modelo','$comentarios' )";
$stmt= $llamarMetodo->prepare($sql);
$stmt-> execute();
while ($row= $stmt->fetch()) {
  echo $row[0]."<br />";
  echo $row[1]."<br />";
  echo $row[2]."<br />";
  echo $row[3]."<br />";
  echo $row[4]."<br />";
  echo $row[5]."<br />";
  echo $row[6]."<br />";
  echo $row[7]."<br />";
  echo $row[9]."<br />";
  echo $row[10]."<br />";
}
    # code...


 ?>
