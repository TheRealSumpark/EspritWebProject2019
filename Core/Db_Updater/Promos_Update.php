<?php

use PHPMailer\PHPMailer\Exception;

include "../../config.php";



$db=config::getConnexion();
$sql="select Debut_Promos, Fin_Promos, Id_Produit, Promos ,Prix_Reduction  from produit ";
$update="update produit set Debut_Promos=NULL, Fin_Promos=NULL,Promos=NULL,Prix_Reduction=NULL where Id_Produit=:Id ";
$Liste=$db->query($sql);

foreach($Liste as $row )
{
    
    
   
    if ($row['Fin_Promos']<date("Y-m-d h:i:s"))
    { try 
    { 
        $req=$db->prepare($update);
        $req->bindvalue(':Id',$row['Id_Produit']);
        $req->execute();

    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
}


}









?>