<?php

include 'EmployeC.PHP';
include '../Entities/Employe.php';



if ( !empty($_POST['Cin']) &&  !empty($_POST['Nom'] )&& !empty($_POST['Prenom']) && !empty($_POST['Salaire'] )  )
{ 

    $Employe=new Employe($_POST['Cin'],$_POST['Nom'],$_POST['Prenom'],$_POST['Salaire']);
    
    $EmployeC=new EmployeC();
    $EmployeC->Ajouter_Employe($Employe);
    echo "<script type='text/javascript'> document.location = '../Tables/tables.php'; </script>";
   // header ('Location : ../View/AfficherEmploye.PHP');

}
else {
    echo 'Verifier les champs';
}  

?>