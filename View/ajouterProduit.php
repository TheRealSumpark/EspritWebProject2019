
<?PHP
include "../entities/produit.php";
include "../core/ProduitC.php";

include_once "../config.php";

$sql="INSERT into produit (idpdt,nom,prix,idcat,categorie,image) values (:idpdt,:nom,:prix,:idcat,:categorie,:image)";
		echo"test";
		$db = config::getConnexion();
		try{
        $req = $db->prepare($sql);
	
		$req->bindValue(':idpdt',$_POST['idpdt']);
		$req->bindValue(':nom',$_POST['nom']);
        $req->bindValue(':prix',$_POST['prix']);
        $req->bindValue(':idcat',$_POST['idcat']);
		$req->bindValue(':categorie',$_POST['categorie']);
		$req->bindValue(':image',$_FILES['image']['name']);

        $req->execute();
        header('Location: afficherProduit.php');

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

?>