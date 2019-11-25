<?php
    include "EmployeC.php";
    include "../Entities/Employe.php";

    $EmployeC=new EmployeC ();
    $EmployeC->Supprimer_Employe($_POST['Cin']);

echo "<script type='text/javascript'> document.location = '../Tables/tables.php'; </script>";



?>