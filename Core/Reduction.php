<?php

use PHPMailer\PHPMailer\Exception;

include "../config.php";

var_dump($_POST['Promos']);
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
 
            $sql = ('UPDATE produit set Prix=:Prix where Id_Produit=:Id');
            $req = $db->prepare($sql);
            $req->bindvalue(':Prix', $Prix);
            $req->bindvalue(':Id', $Liste[$i]);
            $req->execute(); 
        } catch (Exception $e) {
            echo $e->getMessage();
        }
}
 
 




//echo ("<script> document.location='../Tables/tables.php' </script>");
