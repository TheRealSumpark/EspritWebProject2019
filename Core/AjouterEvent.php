<?php

include 'eventC.PHP';
include '../Entities/event.php';



if ( !empty($_POST['nom']) &&  !empty($_POST['type'] )&& !empty($_POST['phone']) && !empty($_POST['date'] )  )
{ 

    $Employe=new event($_POST['nom'],$_POST['type'],$_POST['phone'],$_POST['date']);
    
    $eventC=new eventC();
    $eventC->Ajouter_Event($event);
    echo "<script type='text/javascript'> document.location = '../Tables/tables.php'; </script>";
   // header ('Location : ../View/AfficherEmploye.PHP');

}
else {
    echo 'Verifier les champs';
}  

?>