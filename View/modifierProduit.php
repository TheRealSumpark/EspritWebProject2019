<?PHP
include "../core/ProduitC.php";
include_once "../config.php";

$pC=new ProduitC();
$listeproduits =$pC->afficherProduits($_GET['edit']);

/////
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Modification d'un produit</title>

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
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

<style type="text/css">
    .hide {
  display: none;
}
</style>
<script language="JavaScript" type="text/javascript">
 function CloseAndRefresh() 
  {
     opener.location.reload(true);
     self.close();
  }
</script>
</head>

<body>
<?PHP
 foreach($listeproduits as $row){
?>
<center>
<header>
<h1>Modification d'un produit<h1>
</header>
<form action="modifierP.php?edit=<?php echo $row['idpdt'];?>" method="POST" nctype="multipart/form-data"><br> <br>
<div>
<label>Id Produit</label>
<div>
    <input type="number" name="idpdt" value="<?php echo $row['idpdt'];?>">
</div>
</div>
<div>
    <label>Nom Produit</label>
    <div>
        <input type="text" name="nom" value="<?php echo $row['nom'];?>">
    </div>
</div>
<div>
    <label > Prix Produit</label>
    <div>
        <input type="number" name="prix" value="<?php echo $row['prix'];?>">
    </div>
</div>
<div>
    <label>Image</label>
    <div>
        <input type="file" name="image" value="<?php echo $row['image'];?>">
    </div>
</div><br> <br>
<div>
    <label >Catégorie </label>
    <div>
        <SELECT name="categorie" size="1" style ="text-align: center;" value="<?php echo $row['categorie'];?>">
            <OPTION selected> Cold Drink
            <OPTION> Hot Drink 
        </SELECT>
    </div>
</div><br><br>
<div>
    <label>Id catégorie </label>
    <div>
        <input type="number" name="idcat" value="<?php echo $row['idcat'];?>">
    </div>
</div>
<?PHP
}
?>
<hr>
<div class="card-footer" text_align="center">
    <button type="submit" class="btn btn-primary btn-sm" onsubmit="test();return:true;" >
    <i class="fa fa-dot-circle-o"></i> Modifier
    </button>
    <button type="reset" class="btn btn-danger btn-sm">
    <i class="fa fa-ban"></i> Annuler
    </button>
    <a href="afficherProduit.php" class="btn btn-secondary">Retour </a>
</div>
</center>


</form>

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
    <script src="js/ajouterP.js" ></script>
</body>

</html>
<!-- end document-->


