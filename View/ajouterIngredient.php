<?PHP
include "../entities/ingredient.php";
include "../core/IngredientC.php";

include_once "../config.php";

$sql="INSERT into produit (iding,nom,quantite) values (:iding,:nom,:quantite)";
		echo"test";
		$db = config::getConnexion();
		try{
        $req = $db->prepare($sql);
	
		$req->bindValue(':iding',$_POST['iding']);
		$req->bindValue(':nom',$_POST['nom']);
        $req->bindValue(':quantite',$_POST['quantite']);
        $req->execute();
        header('Location: afficherIngredient.php');

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

?>