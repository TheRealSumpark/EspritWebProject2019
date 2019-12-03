<?php

include "EmployeC.php";
include "../Entities/Employe.PHP";


$EmployeC=new EmployeC();
$Employe=$EmployeC->Afficher_Employe_ByCin($_POST['Cin']);











?>