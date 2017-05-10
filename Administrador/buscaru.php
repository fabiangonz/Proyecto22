<?php
require_once('conexionOracle.php');


$usuario = $_POST['usuario'];


$conn = new Conexion();
$llamarMetodo= $conn->Conectar();


$sql =" SELECT * FROM usuarios ";
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

}
    # code...


 ?>
