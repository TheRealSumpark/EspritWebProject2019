<?php
    include "eventC.php";
    include "../entities/event.php";

    $eventC=new eventC ();
    $eventC->Supprimer_Event($_POST['nom']);

   echo "<script type='text/javascript'> document.location = '../View/AfficherEvent.PHP'; </script>"

?>