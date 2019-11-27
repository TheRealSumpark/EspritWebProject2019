<?php

include_once "../config.php";

class ingredientC
{

	function afficherIngredient ($ingredient)
	{
		echo "Id Ingredient : ".$ingredient->get_iding()."<br>";
		echo "Nom : ".$ingredient->get_nom()."<br>";
		echo "Quantity : ".$ingredient->get_quantite()."<br>";
	}

    function ajouterIngredient($ingredient)
	{
		$sql = "insert into ingredient (iding,nom,quantite) values (:iding, :nom, :quantite)";
		$db = config::getConnexion();
		try {
            $req = $db->prepare($sql);

			$iding = $ingredient->get_iding();
			$nom = $ingredient->get_nom();
			$quantite = $ingredient->get_quantite();
    
            $req->bindValue(':iding', $iding);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':quantite', $quantite);
        /* bindValue: Associe une valeur à un nom correspondant (paramètre fictif) 
   dans la requête SQL qui a été utilisé pour préparer la requête. */
            $req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function afficherIngredients()
	{
		$sql = "SElECT * From ingredient";
		$db = config::getConnexion();
		try {
            $liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
    
	function supprimerIngredient($iding)
	{
		$sql="DELETE FROM ingredient where iding= :iding";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':iding',$iding);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierIngredient($ingredient, $iding)
	{
		$sql = "UPDATE ingredient SET iding=:iding, nom=:nom, quantite=:quantite WHERE iding=:iding";

		$db = config::getConnexion();
		try {
            $req = $db->prepare($sql);
            $iding = $ingredient->get_iding();
			$nom = $ingredient->get_nom();
			$quantite = $ingredient->get_quantite();
			$datas = array(':iding' => $iding, ':nom' => $nom, ':quantite' => $quantite);
            $req->bindValue(':iding', $iding);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':quantite', $quantite);

			$s = $req->execute();

			// header('Location: index.php');
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			echo " Les datas : ";
			print_r($datas);
		}
    }
    
	function recupererIngredient($iding)
	{
		$sql = "SELECT * from ingredient where iding=$iding";
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
