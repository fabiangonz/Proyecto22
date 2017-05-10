<?php
//login_success.php
session_start();
if(isset($_SESSION["usuario"]))
{
		 echo '<h3>backend '.$_SESSION["usuario"].'</h3>';
		 echo '<br /><br /><a href="logout.php">cerra sesion</a>';
	 }
	 else
	 {
	 		 header("location:LoginP.php");
	 }
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
	<nav>
		<ul>
			<?php
require_once('menu.php');
			 ?>
		</ul>
	</nav>
	<h1>Comercializadora</h1>

</header>


<footer>
	<?php
	require_once ('footer.php');
	 ?>

</footer>
</body>

</html>
