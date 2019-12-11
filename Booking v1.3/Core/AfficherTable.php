<?PHP



include '../core/tableC.PHP';

 


$tableC=new tableC();
$Liste_tabless =$tabletC->Afficher_Table();
?>
 
<table border="1">
<td>cin</td>
<td>nom</td>
<td>phone</td>
<td>time</td>

<td>Supprimer</td>
<td>Modifier</td>

<?php
    foreach ($Liste_tables as $row){
?>
<tr>
    <td> <?PHP     echo $row['cin']  ;   ?></td>
    <td> <?PHP     echo $row['nom']  ;   ?></td>
    <td> <?PHP     echo $row['phone']  ;   ?></td>
    <td> <?PHP     echo $row['time']  ;   ?></td>
   

    <td> <form method="POST" action="../core/Supprimer_table.PHP" >         
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






