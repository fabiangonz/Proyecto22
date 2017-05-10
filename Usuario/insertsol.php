<?php
require_once('conexionOracle.php');

$nombre = $_POST['nombre'];
$n_telefono = $_POST['n_telefono'];
$correo = $_POST['correo'];
$t_solicitud = $_POST['t_solicitud'];
$comentarios = $_POST['comentarios'];


$conn = new Conexion();
$llamarMetodo= $conn->Conectar();


$sql =" INSERT INTO contactenos VALUES ('','$nombre','$n_telefono','$correo','$t_solicitud','$comentarios')";
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
