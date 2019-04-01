<?PHP
class Produit{
	private $id;
	private $title;
	private $prix;


	function __construct($id,$title,$prix){
		$this->id=$id;
		$this->title=$title;
		$this->prix=$prix;
	}

	function getId(){
		return $this->id;
	}

	function getTitle(){
		return $this->title;
	}

	function getPrix(){
		return $this->prix;
	}
	
}

?>