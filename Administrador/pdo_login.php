<?php  
 session_start();  
 $host = "mysql:host=localhost;dbname=xe";
 
 $username = "root";  
 $password = "";  

 $message = "";  
 try  
 {  
      $connect = new PDO($host, $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>campos obligatorios</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
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
 <html>  
      <head>  
           <title>login</title>  
          
                      
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
                <form method="post">  
                     <label>Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-success" value="Login" />  
                </form>  
           </section>  
           <br />  
      </body>  
 </html>  