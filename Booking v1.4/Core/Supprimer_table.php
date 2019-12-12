<?php
    include "tableC.php";
    include "../entities/table.php";

    $tableC=new tableC ();
    $tableC->Supprimer_table($_POST['nom']);

   echo "<script type='text/javascript'> document.location = '../View/AfficherTable.PHP'; </script>"

?>