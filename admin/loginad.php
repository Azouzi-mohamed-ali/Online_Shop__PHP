<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
</head>
<?php
session_start();
require("../userstyle.php");
//connect to db
require('connexiondb.php');
$message="";
if(isset($_POST['admname'])){
  $pass=$_POST['password'];
  $usernme=$_POST['admname'];
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=azouzi_shop","root","");
        $req="SELECT * from admins WHERE admname=? AND password=?";
        $pdostat=$pdo->prepare($req);
        $pdostat->execute([$usernme,$pass]);
        $count=$pdostat->rowCount();
        if($count)
              {
                $_session["admname"]=$_POST['admname'];
                header("location:liste_produits.php");
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
 
    <h1 class="box-title">Admin </h1>
    <?php
    if($message!="")
    echo "<p>$message</p>";
    ?>
  <input type="text" class="box-input" name="admname" 
  placeholder="Nom" required />
    <input type="password" class="box-input" name="password" 
  placeholder="Mot de passe" required />
    <input type="submit" name="submit" 
  value="Connexion" class="box-button" />
</form>
</body>
</html>