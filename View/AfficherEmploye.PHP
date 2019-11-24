<?PHP



include '../core/EmployeC.PHP';

 


$EmployeC=new EmployeC();
$Liste_Employes =$EmployeC->Afficher_Employe();
?>
 
<table border="1">
<td>CIN</td>
<td>Nom</td>
<td>Prenom</td>
<td>Nb_Heures</td>
<td>Tarif_Horaire</td>
<td>Supprimer</td>
<td>Modifier</td>

<?php
    foreach ($Liste_Employes as $row){
?>
<tr>
    <td> <?PHP     echo $row['CIN']  ;   ?></td>
    <td> <?PHP     echo $row['Nom']  ;   ?></td>
    <td> <?PHP     echo $row['Prenom']  ;   ?></td>
    <td> <?PHP     echo $row['Nb_Heures']  ;   ?></td>
    <td> <?PHP     echo $row['Tarif_Horaire']  ;   ?></td>
    <td> <form method="POST" action="SupprimerEmployer.PHP" >         
            <input     type ="submit"  name="Submit" value="Supprimer"  >
            <input     type ="hidden" name="CIN" value="<?PHP  echo $row ['CIN'] ?> ">
    </form>
</td>
            <td> <a href="modifierEmploye.php?CIN=<?PHP  echo $row ['CIN'] ;?>"> Modifier </a> </td>

    

</tr>

<?PHP 
}
?>
</table>
































 