<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/event.php";
include "../core/eventC.php";
if (isset($_GET['cin'])){
	$eventC=new eventC();
    $result=$eventC->recuperer_event($_GET['cin']);
	foreach($result as $row){
		$id=$row['id'];
		$cin=$row['cin'];
		$nom=$row['nom'];
		$type=$row['type'];
		$date=$row['date'];
		$time=$row['time'];
		$prix=$row['prix'];
		$statut=$row['statut'];
		$phone=$row['phone'];

?>
<form method="POST">
<table>
<caption>Modifier Evenement</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>" disabled="disabled" ></td>
</tr>
<tr>
<td>cin</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>" disabled="disabled" ></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>type</td>
<td><input type="text" name="type" value="<?PHP echo $type ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="date" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<tr>
<td>time</td>
<td><input type="time" name="time" value="<?PHP echo $time ?>"></td>
</tr>
<tr>
<tr>
<td>prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>" disabled="disabled" ></td>
</tr>
<tr>
<td>statut</td>
<td><input type="text" name="statut" value="<?PHP echo $statut ?>" disabled="disabled" ></td>
</tr>
<tr>
<td>phone</td>
<td><input type="number" name="phone" value="<?PHP echo $phone ?>"></td>
</tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$event=new event($_POST['id'],$_POST['cin'],$_POST['nom'],$_POST['type'],$_POST['date'],$_POST['time'],$_POST['type'],$_POST['prix'],$_POST['phone']);
	$eventC>modifier_event($event,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherEvent.php');
}
?>
</body>
</HTMl>