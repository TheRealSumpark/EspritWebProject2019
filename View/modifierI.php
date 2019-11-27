<?PHP
include "../core/IngredientC.php";
include "../entities/ingredient.php";
include_once "../config.php";

$dbcon= config::getConnexion();

$iding = $_GET['iding'] ;
$nom = $_POST['nom'] ;
$quantite = $_POST['quantite'] ;

try {
	$stmt = $dbcon->prepare("UPDATE ingredient SET iding=:iding,nom=:nom,quantite=:quantite WHERE iding=:iding") ;
    
    $stmt->bindValue(":iding", $iding) ;
	$stmt->bindValue(":nom",$nom) ;
    $stmt->bindValue(":quantite",$quantite) ;
	
	$stmt->execute() ;
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("ingredient modifié avec succés. ");
location="afficherIngredient.php";
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
alert("Une erreur c'est produite lors de la modification de cet ingrédient veuillez verifier les champs saisie !");
location="afficherIngredient.php";
</script>
<body>
</body>
</html>
<?php
}

?>	