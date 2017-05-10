<?php
require_once('conexionOracle.php');

$conn = new Conexion();
$llamarMetodo= $conn->Conectar();
$usuario = $_POST['usuario'];
$sql =" DELETE FROM usuarios WHERE usuario = '$usuario' ";
$stmt= $llamarMetodo->prepare($sql);
$stmt-> execute();
if ($stmt) {
  echo "datos borrados";
}else {
  echo "datos no borrados";
}

/*
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


*/
 ?>
