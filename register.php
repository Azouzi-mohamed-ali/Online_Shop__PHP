
<!DOCTYPE html>
<html>
<head>
<title>User Register</title>
</head>
<body>
<?php
require("userstyle.php");
require('admin/connexiondb.php');
if (isset($_POST['username'], $_POST['email'], $_POST['password'])){
// récupérer le nom d'utilisateur
$username = stripslashes($_POST['username']);
$username = mysqli_real_escape_string($conn, $username);
// récupérer l'email
$email = stripslashes($_POST['email']);
$email = mysqli_real_escape_string($conn, $email);
// récupérer le mot de passe
$password = stripslashes($_POST['password']);
$password = mysqli_real_escape_string($conn, $password);
$query = "INSERT into `users` (username, email, password)
VALUES ('$username', '$email', '$password')";
$res = mysqli_query($conn, $query);
if($res){
echo "<div class='sucess'>
<h3>Vous êtes inscrit avec succès.</h3>
<p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
</div>";
}
}else{
?>
<form class="box" action="" method="post">

</h1>
<h1 class="box-title">S'inscrire</h1>
<input type="text" class="box-input" name="username"
placeholder="Nom d'utilisateur" required />
<input type="text" class="box-input" name="email"
placeholder="Email" required />
<input type="password" class="box-input" name="password"
placeholder="Mot de passe" required />
<input type="submit" name="submit"
value="S'inscrire" class="box-button" />
<p class="box-register">Déjà inscrit?
<a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>