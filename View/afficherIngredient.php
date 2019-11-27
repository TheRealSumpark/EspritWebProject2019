<!DOCTYPE html>
<html lang="en">

<head>
 <style type="text/css">  
.date
 { text-align: center ;}
 </style>
<meta charset="UTF-8">    
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="au theme template">
<meta name="author" content="Hau Nguyen">
<meta name="keywords" content="au theme template">

<!-- Title Page-->
<title>Afficher les  produits</title>
<!-- Fontfaces CSS-->
<link href="css/font-face.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<!-- Bootstrap CSS-->
<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
<!-- Vendor CSS-->
<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<!-- Main CSS-->
<link href="css/theme.css" rel="stylesheet" media="all>
</head>

<body class="animsition">
    <div class="page-wrapper">
        
<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
    <div class="container-fluid">
    <div class="header-mobile-inner">
    <img src="images/fresco.png" alt="Fresco" />
    <button class="hamburger hamburger--slider" type="button">
    <span class="hamburger-box">
    <span class="hamburger-inner"></span></span>
    </button>
    </div></div></div>
    <nav class="navbar-mobile">
    <div class="container-fluid">
       <ul class="navbar-mobile__list list-unstyled">
        <li class="has-sub">
        <a class="js-arrow" href="#">
        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
        </li>
        <li>
        <a href="gestionIngredient.html">
        <i class="fas fa-chart-bar"></i>Gestion des ingredients</a>
        </li>
        <li>
        <a href="gestionProduit.html">
        <i class="fas fa-table"></i>Gestion des produits</a>
        </li>
        <li>
        <a href="form.html">
        <i class="far fa-check-square"></i>Gestion des commandes</a>
        </li>
        <li class="active has-sub">
        <a class="js-arrow" href="#">
        <i class="fas fa-tachometer-alt"></i>Evenements</a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
        <a href="Gestions des evenements.php">Gestions des évenements</a>
        </li>
        </ul>
        </li>
        <li>
        <a href="Gestions des promotions.php">
        <i class="fas fa-bookmark"></i>Gestions des promotions</a>
        </li>
        <li>
        <a href="map.html">
        <i class="fas fa-map-marker-alt"></i>Gestion des publicitées</a>
        </li>
        <li>
        <a href="map.html">
        <i class="fas fa-map-marker-alt"></i>Gestion du service aprés vente</a>
        </li>
        <li>
        <a href="map.html">
        <i class="fas fa-map-marker-alt"></i>Gestion des promotions</a>
        </li>
        </ul>
    </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">  
       <center> <img src="images/fresco.png" alt="Fresco"/> </center>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
     <nav class="navbar-sidebar">
        <ul class="list-unstyled navbar__list">
        <li class="active has-sub">
            <a class="js-arrow" href="acceuil.php">
             <i class="fas fa-tachometer-alt"></i>Dashboard</a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
        </ul>
        </li>
        <li>
            <a href="gestionIngredient.html">
             <i class="fas fa-group (alias)"></i>Gestions des ingredients</a>
        </li>
        <li>
            <a href="afficherFornisseur.php">
             <i class="fas fa-chart-bar"></i>Gestion des fornisseurs</a>
        </li>
        <li>
            <a href="gestionProduit.html">
             <i class="fas fa-th-list"></i>Gestions des produits</a>
        </li>
        <li class="active has-sub">
            <a class="js-arrow" href="#">
             <i class="fas fa-shopping-cart"></i>Gestion  des commandes</a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
            <a href="Gcommande.php"><img src="images/o.png"  width="25px" height="20px">Liste des commandes</a>
        </li>
        <li>
            <a href="historique.php"><img src="images/his.png">historique des commandes</a>
        </li>
        <li>
            <a href="statistiques.php"> <img src="images/stat1.png">statistiques des commandes</a>
        </li>
        </ul>
        </li>
        <li class="active has-sub">
            <a class="js-arrow" href="#">
             <i class="fas fa-tachometer-alt"></i>Evenements</a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
            <a href="Gestions des evenements.php">Gestions des évenements</a>
        </li>
        </ul>
        </li>
        <li>
            <a href="Gestions des promotions.php">
             <i class="fas fa-bookmark"></i>Gestions des promotions</a>
        </li>
        <li>
            <a href="map.php">
            <i class="fas fa-bullhorn"></i>Gestions des publicitées</a>
        </li>
        <li class="active has-sub">
            <a class="js-arrow" href="#">
        <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
            <a href="statistiq.php"> Statistiques</a>
        </li>
        </ul>
        </li>
        <li>
            <a href="Greclamation.php.php">
             <i class="fas fa-suitcase"></i>Gestion des réclamations </a>
        </li>
        <li>
            <a href="Gsugg.php.">
             <i class="fas fa-suitcase"></i>Gestion des suggestions </a>
        </li>
        </ul>
     </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
<!-- PAGE CONTAINER-->
      <div class="page-container">
<!-- HEADER DESKTOP-->
<header class="header-desktop">
    <div class="section__content section__content--p30">
    <div class="container-fluid">
    <div class="header-wrap">
<center>
<form class="form-header" action="" method="POST">
<input class="au-input au-input--xl" type="text" name="keywords" placeholder="Recherche..." />
<button class="au-btn--submit" type="submit" name="search">
<i class="zmdi zmdi-search"></i>
</button>
</form></center>

<div class="header-button">
<div class="noti-wrap">
<div class="noti__item js-item-menu">
    <i class="zmdi zmdi-comment-more"></i>   
</div>
<div class="noti__item js-item-menu">
    <i class="zmdi zmdi-email"></i>
</div>
<div class="noti__item js-item-menu">
    <i class="zmdi zmdi-notifications"></i>
</div>
<div class="account-wrap">
<div class="account-item clearfix js-item-menu">
 <div class="content">
    <a class="js-acc-btn" href="#">Kenza khalfallah</a>
</div>
<div class="account-dropdown js-dropdown">
<div class="info clearfix">
<div class="content">
    <h5 class="name">
    <a href="#">Kenza khalfallah</a></h5>
    <span class="email">kenza.khalfallah@esprit.tn</span>
</div>
</div>
<div class="account-dropdown__body">
<div class="account-dropdown__item">
    <a href="#">
     <i class="zmdi zmdi-account"></i>Compte</a>
</div>
<div class="account-dropdown__item">
    <a href="#">
     <i class="zmdi zmdi-settings"></i>Paramétres</a>
</div>
<div class="account-dropdown__footer">
    <a href="logout.php">
     <i class="zmdi zmdi-power"></i>Deconexion</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>
<!-- END HEADER DESKTOP--> 
<!--  Data table-->
<br><br><br><br>
          
<?PHP
include "../entities/ingredient.php";
include "../core/IngredientC.php";

$IngredientC=new ingredientC();
$listeIngredients=$IngredientC->afficherIngredients();
?>
<table border="1" class="table table-bordered table-striped mb-none" id="myTable2" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
<thead>
<tr>
	<th onclick="sortTable(0)">Identifiant de l'ingrédient </th>
    <th onclick="sortTable(1)">Nom de l'ingrédient</th>
	<th onclick="sortTable(4)">Quantité</th>
</td>
</tr>
</thead>
<?PHP
foreach($listeIngredients as $row){
?>
<tbody>
<tr class="gradeX">

	<td><?PHP echo $row['iding']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo "<img src='images/".$row['image']."' >"; ?></td>
     
<td> 
<button class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
    <a href="../views/modifierIngredient.php?edit=<?php echo $row['iding'];?>">
    <i class="zmdi zmdi-edit"></i>
    </a>
</button>
</td>

<td> 
<button class="item" data-toggle="tooltip" data-placement="top" title="Supprimer">
    <a href="../views/supprimerIngredient.php?delid=<?php echo $row['iding'];?>">
    <i class="zmdi zmdi-delete"></i>
    </a>
</button>
</td>
</tr>
<?PHP
}
?>
</tr>
</tbody>
</table>
<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>
</html>
<!-- end document-->