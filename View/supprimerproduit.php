<?PHP

include "../config.php" ;
include "../core/ProduitC.php" ;

$eC=new ProduitC();
$t=$eC->supprimerProduit($_GET['delid']);
if ($t==1) {
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Produit supprimé avec succés.");
location="afficherProduit.php";
</script>
<body>
</body>
</html>
<?php
}
else {
echo "" ;
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Impossible de supprimer ce produit ! ");
location="afficherProduit.php";
</script>
<body>
</body>
</html>
<?php
}
?>