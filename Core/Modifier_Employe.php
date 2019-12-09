<?php

include "EmployeC.php";
include "../Entities/Employe.PHP";


$EmployeC=new EmployeC();
$Employe=new Employe($_POST['Cin'],$_POST['Nom'],$_POST['Prenom'],$_POST['Salaire']);
$EmployeC->Modifier_Employe($Employe);
echo "<script type='text/javascript'>  document.location='../View/Tables.php'; </script>";










?>