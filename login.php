<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
</head>
<?php
session_start();
require("userstyle.php");
//connect to db
require('admin/connexiondb.php');
$message="";
if(isset($_POST['username'])){
  $pass=$_POST['password'];
  $usernme=$_POST['username'];
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=azouzi_shop","root","");
        $req="SELECT * from users WHERE username=? AND password=?";
        $pdostat=$pdo->prepare($req);
        $pdostat->execute([$usernme,$pass]);
        $count=$pdostat->rowCount();
        if($count)
              {
                $_session["username"]=$_POST['username'];
                header("location:listCardClient.php");
              }
            else
              { 
                $message="verifier login et password";
              }
        }
      
        catch(Exception $e){
          echo "ERREUR :".$e->getMessage();} 
    }
   
?>

<body>
<form class="box" action="" method="POST" name="login">
 
    <h1 class="box-title">Connexion</h1>
    <?php
    if($message!="")
    echo "<p>$message</p>";
    ?>
  <input type="text" class="box-input" name="username" 
  placeholder="Nom d'utilisateur" required />
    <input type="password" class="box-input" name="password" 
  placeholder="Mot de passe" required />
    <input type="submit" name="submit" 
  value="Connexion" class="box-button" />
  
    <p class="box-register">vous etes nouveau ici? 
  <a href="register.php">s'inscrire</a></p>
</form>
</body>
</html>