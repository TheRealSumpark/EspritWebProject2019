<?php

use PHPMailer\PHPMailer\Exception;

include "../config.php";

if (!empty($_POST['Promos'])&& isset($_POST['Check']))
{var_dump($_POST['Promos']);
$Liste = $_POST['Check'];
print_r($Liste);
$db = config::getConnexion();

for ($i = 0; $i < sizeof($Liste); $i++) {
    if ($Liste[$i])
        try {
            $sql = ('Select Prix from produit where Id_Produit=' . $Liste[$i] . '');

            $query = $db->query($sql)->fetch();
            $Prix = (float)$query[0];
            var_dump($Prix);
            $Prix = $Prix - $Prix * $_POST['Promos'] / 100;
            var_dump($Prix);
 
            $sql = 'UPDATE produit set Prix_Reduction=:Prix , Promos=:Promos,Debut_Promos=:Dt_d,Fin_Promos=:Dt_f where Id_Produit=:Id';
            $req = $db->prepare($sql);
            $req->bindvalue(':Prix', $Prix);
            $req->bindvalue(':Id', $Liste[$i]);
            $req->bindvalue(':Promos',$_POST['Promos']);
            $req->bindvalue(':Dt_d',$_POST['Debut_Promos']);
            $req->bindvalue(':Dt_f',$_POST['Fin_Promos']);
            $req->execute(); 
        } catch (Exception $e) {
            echo $e->getMessage();
        }
}}
else if (!isset($_POST['Check']))
{echo "Veuillez cocher un produit</br>";}
if (empty($_POST['Promos']))
{echo "Veuillez saisir Promos <br/>";}

 
 




 //echo ("<script> document.location='../Tables/tables.php' </script>");
