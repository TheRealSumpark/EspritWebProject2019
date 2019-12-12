<?php

include 'eventC.PHP';
include '../Entities/event.php';



{ 
    if($_POST['type']=="Anniversary")
    {
    $event=new event("","",$_POST['nom'],$_POST['type'],$_POST['date'],$_POST['time'],250,$_POST['phone']);
    
    $eventC=new eventC();
    $eventC->Ajouter_Event($event);
    }
    else
    {
        $event=new event("","",$_POST['nom'],$_POST['type'],$_POST['date'],$_POST['time'],150,$_POST['phone']);
    
        $eventC=new eventC();
        $eventC->Ajouter_Event($event);  
    }
    echo "<script type='text/javascript'> document.location = '../View/AfficherEvent.PHP'; </script>";

    //echo "<script type='text/javascript'> document.location = '../Tables/tables.php'; </script>";
   // header ('Location : ../View/AfficherEmploye.PHP');

}

 

?>