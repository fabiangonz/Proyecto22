 <?php
 //login_success.php
 session_start();
 if(isset($_SESSION["usuario"]))
 {
      echo '<h3>backend '.$_SESSION["usuario"].'</h3>';
      echo '<br /><br /><a href="logout.php">cerra sesion</a>';


require_once ('conexionOracle.php');

$conn = new Conexion();
$llamarMetodo = $conn->Conectar();

$sql = "SELECT titulo, foto, precio, descripcion  FROM auto";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();
while ($row = $stmt->fetch()) {


echo '<section class="im1">
	<h5>'.$row[0].'</h5>
	<img src='.$row[1].' alt="BMW6 Cabrio" width= "200" height="200">
	<hr>
	<p> '.$row[2].'
		<br>
		'.$row[3].'
	</p>
</section>';
}

 }
 else
 {
      header("location:LoginP.php");
 }
 ?>
