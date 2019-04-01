<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/panier.php";
include "../core/panierC.php";
if (isset($_GET['id'])){
	$panierC=new panierC();
    $result=$panierC->recupererEmploye($_GET['id']);
	foreach($result as $row){
		$cin=$row['id'];
		$nom=$row['quantite'];

?>
<form method="POST">
<table>
<caption>Modifier Panier</caption>
<tr>
<td>ID</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Quantite</td>
<td><input type="text" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$panier=new panier($_POST['id'],$_POST['quantite']);
	$employeC->modifierEmploye($employe,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherEmploye.php');
}
?>
</body>
</HTMl>