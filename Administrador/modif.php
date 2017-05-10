<?php
require_once('conexionOracle.php');


$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$conn = new Conexion();
$llamarMetodo= $conn->Conectar();


$sql =" UPDATE usuarios SET contrasena='$contrasena' WHERE usuario='$usuario'";
$stmt= $llamarMetodo->prepare($sql);
$stmt-> execute();
if ($stmt) {
echo "datos modificados";  # code...
}else {

  echo "datos modificados";
}
    # code...


 ?>
