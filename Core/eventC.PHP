<?PHP

include "../config.PHP";

class eventC
{

    function Afficher_Employe ()

    {
    $sql ='SELECT * FROM fresco';
    $db=config::getConnexion();
    try {
        
        $liste=$db->query ($sql);
        return $liste;

    }   catch (Exception $e) {
die ('Erreur' .$e->getMessage());
    }
    }


    function Ajouter_Event($event)
    {
$sql="INSERT into events (id,cin,nom,type,date,prix,statut,phone) values(:id,:cin,:nom,:type,:date,:prix,:statut,:phone)";
$db =config ::getConnexion();
try {
        $req =$db->prepare($sql);

        $id=$event->getId();
        $cin=$event->getCin();
        $nom=$event->getNom();
        $type=$event->getType();
        $date=$event->getDate();
        $prix=$event->getPrix();
        $statut=$event->getStatut();
        $phone=$event->getPhone();



        $req->bindValue(':id',$id);
        $req->bindValue(':cin',$cin);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':type',$type);
        $req->bindValue(':date',$date);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':statut',$statut);
        $req->bindValue(':phone',$phone;

       

        $req->execute();

}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}


    }

    
 /*   function Supprimer_Employe($Cin)
    {
   $sql='DELETE FROM employe Where Cin=:Cin';
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



    function Modifier_Employe($Employe)
    {
                
            




    }






}

*/




?>