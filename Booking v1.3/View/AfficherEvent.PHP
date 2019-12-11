<?PHP



include '../core/eventC.PHP';

 


$eventC=new eventC();
$Liste_events =$eventC->Afficher_Event();
?>
 
<table border="1">
<td>id</td>
<td>cin</td>
<td>nom</td>
<td>type</td>
<td>date</td>
<td>time</td>
<td>prix</td>
<td>statut</td>
<td>phone</td>

<td>Supprimer</td>
<td>Modifier</td>

<?php
    foreach ($Liste_events as $row){
?>
<tr>
    <td> <?PHP     echo $row['id']  ;   ?></td>
    <td> <?PHP     echo $row['cin']  ;   ?></td>
    <td> <?PHP     echo $row['nom']  ;   ?></td>
    <td> <?PHP     echo $row['type']  ;   ?></td>
    <td> <?PHP     echo $row['date']  ;   ?></td>
    <td> <?PHP     echo $row['time']  ;   ?></td>
    <td> <?PHP     echo $row['prix']  ;   ?></td>
    <td> <?PHP     echo $row['statut']  ;   ?></td>
    <td> <?PHP     echo $row['phone']  ;   ?></td>

    <td> <form method="POST" action="../core/Supprimer_event.PHP" >         
            <input     type ="hidden" name="nom" value="<?PHP  echo $row ['nom'] ?> "> 
            <input     type ="submit"  name="submit" value="Supprimer"  >

    </form>
</td>
            <td> <a href="modifierEmploye.php?nom=<?PHP  echo $row ['nom'] ;?>"> Modifier </a> </td>

    

</tr>

<?PHP 
}
?>
</table>
































 