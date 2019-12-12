<?PHP

include "../config.PHP";

class eventC
{

    function Afficher_Event ()

    {
        $sql = 'SELECT * FROM events';
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
$sql="INSERT into events (id,cin,nom,type,date,time,prix,phone) values(:id,:cin,:nom,:type,:date,:time,:prix,:phone)";
$db =config ::getConnexion();
try {
        $req =$db->prepare($sql);

        $id=$event->getId();
        $cin=$event->getCin();
        $nom=$event->getNom();
        $type=$event->getType();
        $date=$event->getDate();
        $time=$event->getTime();
        $prix=$event->getPrix();
        //$statut=$event->getStatut();
        $phone=$event->getPhone();



        $req->bindValue(':id',$id);
        $req->bindValue(':cin',$cin);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':type',$type);
        $req->bindValue(':date',$date);
        $req->bindValue(':time',$time);
        $req->bindValue(':prix',$prix);
        //$req->bindValue(':statut',$statut);
        $req->bindValue(':phone',$phone);

       

        $req->execute();

}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}


    }


    
    function Supprimer_Event($nom)
    {
   $sql='DELETE FROM events WHERE nom=:nom';
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




function modifierEvent($id)
{
    $sql = "UPDATE events SET id=:id, cin=:cin,nom=:nom,type=:type,date=:date,time=:time,prix=:prix,statut=:statut,phone=:phone WHERE id=:id";

    $db = config::getConnexion();
    try {
        $req = $db->prepare($sql);
        $id = $event->getId();
        $cin = $event->getCin();
        $nom = $event->getNom();
        $type = $event->getType();
        $date = $event->getDate();
        $time = $event->getTime();
        $prix = $event->getPrix();
        $statut = $event->getStatut();
        $phone = $event->getPhone();

        $datas = array(':id' => $id, ':cin' => $cin, ':nom' => $nom, ':type' => $type, ':date' => $date, ':time' => $time, ':prix' => $prix, ':statut' => $statut, ':phone' => $phone);
        $req->bindValue(':id', $id);
        $req->bindValue(':cin', $cin);
        $req->bindValue(':nom', $nom);
        $req->bindValue(':type', $type);
        $req->bindValue(':date', $date);
        $req->bindValue(':time', $time);
        $req->bindValue(':prix', $prix);
        $req->bindValue(':statut', $statut);
        $req->bindValue(':phone', $phone);





        $s = $req->execute();

        // header('Location: index.php');
    } catch (Exception $e) {
        echo " Erreur ! " . $e->getMessage();
        echo " Les datas : ";
        print_r($datas);
    }
}
function recupererEvent($id)
{
    $sql = "SELECT * FROM events WHERE id=:id";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        var_dump($liste);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

function validerEvent($id)
	{
		$statut="comfirmed";
		$sql="UPDATE events SET statut= :statut WHERE id= :id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
        $req=$db->prepare($sql);
        $req->bindvalue(':id',$id);
		$req->bindValue(':statut',$statut);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
    }

    function tri()
	{
		$statut="comfirmed";
		$sql="SELECT * FROM events ORDER BY date ASC";
		
		$db = config::getConnexion();
	
		
    }

}

?>