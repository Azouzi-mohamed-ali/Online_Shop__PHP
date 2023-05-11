<?php
$idp=$_GET["idp"];
$libelle=$_GET["libelle"];
$prix=$_GET["prix"];
$img=$_GET["image"];


$pdo = new PDO("mysql:host=localhost;dbname=azouzi_shop", "root", "");

$sql = "UPDATE produits SET idp='".$idp."',  libelle='".$libelle."', prix='".$prix."' WHERE idp=$idp";

$q = $pdo->prepare($sql);
$q->execute();
header ("Location:liste_produits.php");

?>