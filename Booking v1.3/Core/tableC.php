<?PHP

include "../config.PHP";

class tableC
{

    function Afficher_Table ()

    {
        $sql = 'SELECT * FROM desk';
        $db=config::getConnexion();
    try {
        
        $liste=$db->query ($sql);
        return $liste;

    }   catch (Exception $e) {
die ('Erreur' .$e->getMessage());
    }
    }


    function Ajouter_Table($desk)
    {
$sql="INSERT into desk (cin,nom,num,phone,time) values(:cin,:nom,:num,:phone,:time)";
$db =config::getConnexion();
try {
        $req =$db->prepare($sql);

        $cin=$desk->getCin();
        $nom=$desk->getNom();
        $num=$desk->getNum();
        $phone=$desk->getPhone();
        $time=$desk->getTime();



        $req->bindValue(':cin',$cin);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':num',$num);
        $req->bindValue(':phone',$phone);
        $req->bindValue(':time',$time);

 

       

        $req->execute();


}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}


    }


    
    function Supprimer_Table($nom)
    {
   $sql='DELETE FROM desk WHERE nom=:nom';
$db =config ::getConnexion();
try {   
       
        $req=$db->prepare($sql); 
        $req->bindValue(':nom',$nom);
        $req->execute();
       

}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}


    }


}


?>