<?php
 session_start();
 $host = "oci:dbname=xe";

 $username = "FABIAN";
 $password = "admin1015";

 $message = "";
 try
 {
      $connect = new PDO($host, $username, $password);
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if(isset($_POST["login"]))
      {
           if(empty($_POST["usuario"]) || empty($_POST["contrasena"]))
           {
                $message = '<label>campos obligatorios</label>';
           }
           else
           {
                $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena";
                $statement = $connect->prepare($query);
                $statement->execute(
                     array(
                          'usuario'     =>     $_POST["usuario"],
                          'contrasena'     =>     $_POST["contrasena"]
                     )
                );
                $count = $statement->rowCount();
                if($count > 0)
                {
                     $_SESSION["usuario"] = $_POST["usuario"];
                     header("location:login_success.php");
                }
                else
                {
                     $message = '<label>datos erroneos</label>';
                }
           }
      }
 }
 catch(PDOException $error)
 {
      $message = $error->getMessage();
 }
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 <meta name="Portafolio" content="Portafolio vehiculos">
 <meta charset="utf-8">
 <link  href="../Usuario/CSS/fondos.css" rel="stylesheet">

   <title> Venta de Carros, posventa de carros	</title>
 </head>
      <body>
           <br />
           <section >
                <?php
                if(isset($message))
                {
                     echo '<label class="text-danger">'.$message.'</label>';
                }
                ?>
                <h3 align="">login</h3><br />
                <section class="loginform">
              		<form  method="post">
              			<table>
              			<h2>Ingresar</h2>
              			<tr>
              				<td><label>Usuario:</label></td>
              			  <td><input type="text" name="usuario" placeholder= "Usuario" required pattern="[A-z]+" ></td>
              			</tr>
              			<tr>
              				<td><label>Contraseña:</label></td>
              				<td><input type="password" name="contrasena" placeholder="Contraseña" >	</td>
              			</tr>
              			</table>
              		   <input type="submit" name="login" class="btn btn-success" value="Login" />
              			</form>
              	</section>
           </section>
           <br />
      </body>
 </html>
