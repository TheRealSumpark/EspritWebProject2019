<?php
include "../Entities/Client.php";
include "../Core/ClientC.php";
 




if ( !empty($_POST['Cin']) &&  !empty($_POST['Nom'] )&& !empty($_POST['Prenom']) && !empty($_POST['Gender']) && !empty($_POST['Phone']) && !empty($_POST['Email']) && !empty($_POST['Pwd']) )
{ 
    $db=config::getConnexion();  
    $sql='SELECT Cin  FROM client WHERE Cin ='.$_POST['Cin'].'';
    
     if ($db->query($sql)->fetch()) 
        {   
            echo " Cin existant Veuillez choisir un autre";
            echo "</br>";

        }
       
    $sql='SELECT Email  FROM client WHERE Email ="'.$_POST['Email'].'"';
        if($db->query($sql)->fetch())
         {
             echo $_POST['Email']. "  existe déja";
        }
else 
    {if (empty($_POST['Newsletter']))
    {$Newsletter=0;}
    else{
        $Newsletter=1;
    }
    
    $Client=new Client($_POST['Nom'],$_POST['Prenom'],$_POST['Cin'],$_POST['Email'] , $_POST['Gender'] , $_POST['Date_Naissance'] ,$_POST['Phone'], 0,$Newsletter,$_POST['Pwd']);
    
    $ClientC=new ClientC();
    $ClientC->Ajouter_Client($Client);
    echo "<script type='text/javascript'> document.location = '../examples/Login/Login.html'; </script>";
   // header ('Location : ../View/AfficherClient.PHP');
    }
}
else {
    echo 'Verifier les champs';
}  

?>










 

