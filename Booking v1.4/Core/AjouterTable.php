<?php

include 'tableC.PHP';
include '../Entities/table.php';



{ 

    $desk=new desk("09630707",$_POST['nom'],$_POST['num'],$_POST['phone'],$_POST['time']);
    $tableC=new tableC();
    $tableC->Ajouter_Table($desk);
    echo "<script type='text/javascript'> document.location = '../View/AfficherTable.PHP'; </script>";

    //echo "<script type='text/javascript'> document.location = '../Tables/tables.php'; </script>";
   // header ('Location : ../View/AfficherEmploye.PHP');

}

 

?>