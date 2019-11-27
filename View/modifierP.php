<?PHP
include "../core/ProduitC.php";
include "../entities/produit.php";
include_once "../config.php";

$dbcon= config::getConnexion();

$idpdt = $_GET['idpdt'] ;
$nom = $_POST['nom'] ;
$prix = $_POST['prix'] ;
$idcat = $_POST['idcat'] ;
$categorie = $_POST['categorie'] ;
$image = $_FILES['image']['name'] ;

try {
	$stmt = $dbcon->prepare("UPDATE produit SET idpdt=:idpdt,nom=:nom,prix=:prix,idcat=:idcat,categorie=:categorie,image=:image WHERE idpdt=:idpdt") ;
    
    $stmt->bindValue(":idpdt", $idpdt) ;
	$stmt->bindValue(":nom",$nom) ;
    $stmt->bindValue(":prix",$prix) ;
    $stmt->bindValue(":idcat", $idcat) ;
	$stmt->bindValue(":categorie",$categorie) ;
	$stmt->bindValue(":image",$image) ;
	
	$stmt->execute() ;
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Produit modifié avec succés. ");
location="afficherProduit.php";
</script>
<body>
</body>
</html>
 
 <?php
}
catch (PDOException $e) {
  print "Error !" .$e->getMessage() . "<br/>" ;
  die() ;
?>

<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Une erreur c'est produite lors de la modification de ce produit veuillez verifier les champs saisie !");
location="afficherProduit.php";
</script>
<body>
</body>
</html>
<?php
}

?>	