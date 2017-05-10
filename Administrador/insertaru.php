<?php
require_once('conexionOracle.php');

$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$rol = $_POST['rol'];

$conn = new Conexion();
$llamarMetodo= $conn->Conectar();


$sql =" INSERT INTO usuarios VALUES ('$usuario','$contrasena','$nombre','$documento','$telefono','$correo','$direccion','$rol')";
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

}
    # code...


 ?>
