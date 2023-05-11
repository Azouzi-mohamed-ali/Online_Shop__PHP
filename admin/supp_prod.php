
<?php
$idp=$_GET["idp"];
$pdo = new PDO("mysql:host=localhost;dbname=azouzi_shop", "root", "");
$sql = "DELETE FROM Produits WHERE idp=$idp";
$q = $pdo->query($sql);
header ("Location:liste_produits.php");

?>