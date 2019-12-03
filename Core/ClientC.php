<?php



include "../config.PHP";

class ClientC
{
 
    function Afficher_Client ()

    {
    $sql ='SELECT * FROM client';
    $db=config::getConnexion();
    try {
        
        $liste=$db->query ($sql);
        return $liste;

    }   catch (Exception $e) {
die ('Erreur' .$e->getMessage());
    }
    }


    function Ajouter_Client($Client)
    {
$sql="INSERT into client (Cin,Nom,Prenom,Date_Naissance,Gender,Email,Phone,Newsletter,Statu,Pwd) values(:CIN,:Nom,:Prenom,:Date_Naissance,:Gender,:Email,:Phone,:Newsletter,:Statu,:Pwd)";
$db =config::getConnexion();
try { $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        $req =$db->prepare($sql);

        $CIN=$Client->getCin(); 
        $Nom=$Client->getNom();
        $Prenom=$Client->getPrenom();
        $Date_Naissance=$Client->getDate_Naissance();
        $Phone=$Client->getPhone();
        $Gender=$Client->getGender();
        $Email=$Client->getEmail();
        $Newsletter=$Client->getNewsletter();
        $Statu=$Client->getRole();
        $Pwd=$Client->getPwd();
        
        $req->bindValue(':CIN',$CIN); 
        $req->bindValue(':Nom',$Nom); 
        $req->bindValue(':Prenom',$Prenom); 
        $req->bindValue(':Date_Naissance',$Date_Naissance); 
        $req->bindValue(':Email',$Email); 
        $req->bindValue(':Gender',$Gender); 
        $req->bindValue(':Phone',$Phone); 
        $req->bindValue(':Newsletter',$Newsletter); 
        $req->bindValue(':Statu',$Statu); 
        $req->bindValue(':Pwd',$Pwd); 
        $req->execute();
     
}catch (PDOException $e)
{
    echo "Erreur ".$e->getMessage();
}


    }

    
    function Supprimer_Client($Cin)
    {
   $sql='DELETE FROM client Where Cin=:Cin';
$db =config ::getConnexion();
try {   
       
        $req=$db->prepare($sql); 
        $req->bindValue(':Cin',$Cin);
        $req->execute();
       

}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}

    }
}
?>