<?php

include_once "../config.php";

class produitC
{

	function afficherProduit ($produit)
	{
		echo "Id Product : ".$produit->get_idpdt()."<br>";
		echo "Nom : ".$produit->get_nom()."<br>";
		echo "Prix : ".$produit->get_prix()."<br>";
		echo "Id categorie : ".$produit->get_idcat()."<br>";
		echo "Category : ".$produit->get_categorie()."<br>";
		echo "picture : ".$produit->get_image()."<br>";
	}

    function ajouterProduit($produit)
	{
		$sql = "INSERT into produit (idpdt,nom,prix,idcat,categorie,image) values (:idpdt, :nom, :prix, :idcat, :categorie, :image)";
		$db = config::getConnexion();
		try {
            $req = $db->prepare($sql);

			$idpdt = $produit->get_idpdt();
			$nom = $produit->get_nom();
			$prix = $produit->get_prix();
			$idcat = $produit->get_idcat();
			$categorie = $produit->get_categorie();
			$image = $produit->get_image();
    
            $req->bindValue(':idpdt', $idpdt);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':prix', $prix);
			$req->binValue(':idcat',$idcat);
			$req->bindValue(':categorie', $categorie);
			$req->bindValue(':image', $image);
        /* bindValue: Associe une valeur à un nom correspondant (paramètre fictif) 
   dans la requête SQL qui a été utilisé pour préparer la requête. */
            $req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function afficherProduits()
	{
		$sql = "SELECT * FROM produit ";
		$db = config::getConnexion();
		try {
            $liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
    
	function supprimerProduit($idpdt)
	{
		$sql="DELETE FROM produit where idpdt=:idpdt";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':idpdt',$idpdt);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierProduit($produit, $idpdt)
	{
		$sql = "UPDATE produit SET idpdt=:idpdt, nom=:nom, prix=:prix, idcat=:idcat, categorie=:categorie, image=:image WHERE idpdt=:idpdt";

		$db = config::getConnexion();
		try {
            $req = $db->prepare($sql);
            $idpdt = $produit->get_idpdt();
			$nom = $produit->get_nom();
			$idcat = $produit->get_idcat();
			$prix = $produit->get_prix();
			$categorie = $produit->get_categorie();
			$image = $produit->get_image();
			$datas = array(':idpdt' => $idpdt, ':nom' => $nom, ':prix' => $prix, ':idcat' =>$idcat, ':categorie' => $categorie, ':image' => $image);
            $req->bindValue(':idpdt', $idpdt);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':prix', $prix);
			$req->bindValue(':idcat',$idcat);
			$req->bindValue(':categorie', $categorie);
			$req->bindValue(':image', $image);

			$req->execute($produit);

			// header('Location: index.php');
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			echo " Les datas : ";
			print_r($datas);
		}
    }
    
	function recupererProduit($idpdt)
	{
		$sql = "SELECT * from produit where idpdt=$idpdt";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
}

?>