<?php

class Conexion{

private $db='oci:dbname=xe';
//private $db='mysql:host=localhost;dbname=xehhh';
  private $user='FABIAN';
private $pass='admin1015';

public function Conectar(){

try {
  $base = new PDO($this->db,$this->user,$this->pass);
  $base->exec("SET CARACTER SET utf8");
if ($base) {
//  echo "conexion realizada";
return $base;  # code...
}

} catch (Exception $e) {
echo "Error de conexion con oracle  " .$e-> getMessage();
}

}

}

 ?>
