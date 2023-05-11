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
</head>

<body>
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
                     <a href="logoutad.php" class="nav-item nav-link">Déconnexion</a>  
                     </div>
                     <?php
                  ?>
            </div>
        </div>
    </nav>
</div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
            <div class="page-body" >
                <div class="container-fluid">
                    <div class="spacetop" style="color:white;">..</div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    
                                    <div class="card-header">
                                        <h5>Liste des produits</h5>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table">
                                           
                                            <thead>
                                                <tr>
                                                    <th scope="col">Idp</th>
                                                    <th scope="col">Libellé</th>
                                                    <th scope="col">Prix</th>
                                                    <th scope="col">Photo</th>
                                                    <th scope="col">Operation</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php

                                                $pdo = new PDO("mysql:host=localhost;dbname=azouzi_shop", "root", "");
                                                
                                                $sql = 'SELECT idp, libelle, prix,image
                                                        FROM Produits';
                                                
                                                $q = $pdo->query($sql);
                                                $q->setFetchMode(PDO::FETCH_ASSOC);
                                                ?>

                                                    <?php while ($row = $q->fetch()): ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $row['idp'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['libelle']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['prix']. ' DT'; ?>
                                                        </td>
                                                        <td>
                                                            <!-- <img src="<?php echo $row['image']; ?>" alt=""> -->
                                                            <?php 
                                                                echo 
                                                                "<img 
                                                                src='../".$row['image']."' style='height: 80px;width: 80px;border-radius: 100px;'
                                                                /> 
                                                                ";
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <a href="mod_prod.php?idp=<?php echo $row['idp'] ?>">
                                                        <button class="btn btn-warning">Modifier</button>
                                                        </a>
                                                        <a href="supp_prod.php?idp=<?php echo $row['idp'] ?>">
                                                        <button class="btn btn-danger">Supprimer</button>
                                                        </a>
                                                        </td>
                                                    </tr>
                                                    <?php endwhile; ?>

                                            </tbody>
                                        </table>
                                        <br><div class="text-center">
                                        <a href="ajout_produits.html">
                                        <button class="btn btn-primary">Ajouter Un Produit</button></a>
                                    <br>
                                </div>
                                    <div class="container-fluid">
                                    <div class="spacetop" style="color:white;">..</div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="²../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>