<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Liste des Produits</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
</head>

<body >
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="logo.jpg" height="40"  alt="CoolBrand">    Azouzi_Shopping
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                     <div class="navbar-nav ms-auto">
                     <a href="logout.php" class="nav-item nav-link">Déconnexion</a>  
                     </div>
                     <?php
                  ?>
            </div>
        </div>
    </nav>
</div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <div class="page-body" >
        <div class="spacetop" style="color:white;">..</div>
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-md-3 g-4" >
                    <?php
                        $pdo = new PDO("mysql:host=localhost;dbname=azouzi_shop", "root", "");
                        $sql = 'SELECT idp, libelle, prix,image
                                FROM Produits';
                        $q = $pdo->query($sql);
                        $q->setFetchMode(PDO::FETCH_ASSOC);
                    ?>
                    <?php while ($row = $q->fetch()): ?>
                        <div class="col" >
                            <div class="card"style="height: 500px;">
                                <?php 
                                echo "<img  src='".$row['image']."' style='height: 400px;' /> ";
                                ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['libelle']; ?></h5>
                                    <p class="card-text">Prix: <?php echo $row['prix']. ' DT'; ?></p>
                                </div>
                            </div>
                            <a href="commande.html?idp=<?php echo $row['idp'] ?>">
                                    <button class="btn btn-warning">commander</button>
                                </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>