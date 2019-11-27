<?PHP

include "../config.php" ;
include "../core/IngredientC.php" ;

$eC=new IngredientC();
$t=$eC->supprimerIngredient($_GET['delid']);
if ($t==1) {
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Ingredient supprimé avec succés.");
location="afficherIngredient.php";
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
alert("Impossible de supprimer cet ingredient ! ");
location="afficherIngredient.php";
</script>
<body>
</body>
</html>
<?php
}
?>