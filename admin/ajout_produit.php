<?php
$idp=$_POST["idp"];
$lib=$_POST["libelle"];
$prix=$_POST["prix"];
$img="images/".$_POST["image"];
$pdo = new PDO("mysql:host=localhost;dbname=azouzi_shop", "root", "");

$sql = "INSERT INTO Produits (`idp`, `libelle`, `prix`, `image`) VALUES ('$idp','$lib','$prix','$img')";
$q = $pdo->query($sql);
// $q->execute();
header ("Location: liste_produits.php");

?>