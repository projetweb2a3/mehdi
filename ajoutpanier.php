
<?PHP
include "../entities/panier.php";
include "../core/panierC.php";

//$employe2=new commande("3445","tujuj","a@a.com","2222","11-11-1111","trhtrht");
//$employe2C=new CommandeC();
//$employe2C->ajouterEmploye($employe2);
if(isset($_POST['test'])){
    echo"AAAAAAAAAAAAAAAA";
}
if (isset($_POST['id']) and isset($_POST['quantite'])){
$employe1=new panier($_POST['id'],$_POST['quantite']);

//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$employe1C=new panierC();
$employe1C->ajouterEmploye($employe1);
echo "panier ajoute avec succes";
    header( 'Location: http://localhost/caverne/views/afficherpanier.php' ) ;
//echo '<script>alert("commande ajoutee avec succes");window.location.replace("http://localhost/caverne/views/order-form.html")</script>';

}else{
	echo "vérifier les champs";
}
//*/

?>