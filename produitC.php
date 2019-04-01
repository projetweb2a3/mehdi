<?PHP
include "../config.php";
class ProduitC {

	function afficherProduit($id){
		$sql = "select * from produit where id = :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id',$id);
		$req->execute();
	}

}

?>