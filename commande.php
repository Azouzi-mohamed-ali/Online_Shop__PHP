<?php
$idc=$_POST["idc"];
$idp=$_POST["idp"];
$nom_prenom=$_POST["nom_prenom"];
$telephone=$_POST["telephone"];
$adresse=$_POST["adresse"];
$pdo = new PDO("mysql:host=localhost;dbname=azouzi_shop", "root", "");

$sql = "INSERT INTO commandes (`idc`, `idp`, `nom_prenom`, `telephone`,'adresse') VALUES (`$idc`, `$idp`, `$nom_prenom`, `$telephone`,'$adresse')";

$q = $pdo->query($sql);

header ("Location: listCardClient.php");

?>