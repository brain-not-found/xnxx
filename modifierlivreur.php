<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";
if (isset($_GET['cin'])){
	$livreurC=new livreurC();
    $result=$livreurC->recupererlivreur($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$datedenaissance=$row['datedenaissance'];
		$numerodetelephone=$row['numerodetelephone'];
		$adresse=$row['adresse'];
		$salaire=$row['salaire'];
		$heuredetravail=$row['heuredetravail'];
		$datedetravail=$row['datedetravail'];
?>
<form method="POST" accept="affiche.php">
<table>
<caption>modifier livreur</caption>
<tr>
<td>cin</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>date de naissance</td>
<td><input type="texy" name="datedenaissance" value="<?PHP echo $datedenaissance ?>"></td>
</tr>
<tr>
<td>nuemro de telephone</td>
<td><input type="number" name="numerodetelephone" value="<?PHP echo $numerodetelephone ?>"></td>
</tr>
<tr>
<td>adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>salaire</td>
<td><input type="number" name="salaire" value="<?PHP echo $salaire ?>"></td>
</tr>
<tr>
<td>heure de travail</td>
<td><input type="text" name="heuredetravail" value="<?PHP echo $heuredetravail ?>"></td>
</tr>
<tr>
<td>date de travail</td>
<td><input type="text" name="datedetravail" value="<?PHP echo $datedetravail ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['datedenaissance'],$_POST['numerodetelephone'],$_POST['adresse'],$_POST['salaire'],$_POST['heuredetravail'],$_POST['datedetravail']);
	$livreurC->modifierlivreur($employe,$_POST['cin']);
	echo $_POST['cin'];
	header('Location: affichelivreur.php');
}
?>
</body>
</HTMl>