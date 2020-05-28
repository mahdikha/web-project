<?PHP
class avis
{
	private $nom_et_prenom_avis;
	private $id_avis;
	private $age;
	private $note;
	
	function __construct($nom_et_prenom_avis,$id_avis,$age,$note)
	{
		$this->nom_et_prenom_avis=$nom_et_prenom_avis;
		$this->id_avis=$id_avis;
		$this->age=$age;
		$this->note=$note;
	}
	function getnom_et_prenom_avis(){
		return $this->nom_et_prenom_avis;
	}
	function getid_avis(){
		return $this->id_avis;
	}
	function getage(){
		return $this->age;
	}
	function getnote(){
		return $this->note;
	}

	function setnom_et_prenom_avis($nom_et_prenom_avis){
		$this->nom_et_prenom_avis=$nom_et_prenom_avis;
	}
	function setid_avis($id_avis){
		$this->id_avis=$id_avis;
	}
	function setage($age){
		$this->age=$age;
	}
	function setnote($note){
		$this->note=$note;
	}

}

?>