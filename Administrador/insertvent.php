<?php
require_once('conexionOracle.php');

$nombre_v = $_POST['nombre_v'];
$documento_v = $_POST['documento_v'];
$telefono_v = $_POST['telefono_v'];
$correo_v = $_POST['correo_v'];
$nombre_d = $_POST['nombre_d'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$modelo_v = $_POST['modelo_v'];
$precio_v = $_POST['precio_v'];

$conn = new Conexion();
$llamarMetodo= $conn->Conectar();



$sql =" INSERT INTO ventas VALUES ('','$nombre_v','$documento_v','$telefono_v','$correo_v',
  	'$nombre_d','$tipo','$marca','$modelo_v','$precio_v' )";
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
