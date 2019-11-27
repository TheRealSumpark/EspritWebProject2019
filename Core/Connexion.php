<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include '../config.php';
 
$db = config::getConnexion();
 
 
 
if (!empty($_POST['Email']) && !empty($_POST['Mdp']))
{
    
    $sql='select Role from client where  Email="'.$_POST['Email'].'" && Mdp="'.$_POST['Mdp'].'"';
     
    $Access=$db->query($sql)->fetch();
    var_dump($Access);
    if ($Access)
    {

        session_start();
        $_SESSION['Email']=$_POST['Email'];
        var_dump($_Session['Email']);
        $_SESSION['Mdp']=$_POST['Mdp'];
        var_dump($_Session['Mdp']);
        $_SESSION['Role']=$Access[0];
        var_dump($_Session['Role']);
        if ($_SESSION['Role']==0)
        {
            header("location:../examples/icons.html");
        }
        else if ($_SESSION['Role']==1)
            {
                header("location:../Tables/tables.php");
            }

    }

else {
    { 
        // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
       // echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
        // puis on le redirige vers la page d'accueil
        //echo '<meta http-equiv="refresh" content="0;URL=.html">'; 
     } 
}
	}
	
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="auth.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>



 