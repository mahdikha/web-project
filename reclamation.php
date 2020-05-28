<?PHP
class reclamation
{
	private $nom_et_prenom;
	private $id;
	private $mail;
	private $objet;
	private $commentaire;
	function __construct($nom_et_prenom,$id,$mail,$objet,$commentaire)
	{
		$this->nom_et_prenom=$nom_et_prenom;
		$this->id=$id;
		$this->mail=$mail;
		$this->objet=$objet;
		$this->commentaire=$commentaire;
	}
	function getnom_et_prenom(){
		return $this->nom_et_prenom;
	}
	function getid(){
		return $this->id;
	}
	function getmail(){
		return $this->mail;
	}
	function getobjet(){
		return $this->objet;
	}
	function getcommentaire(){
		return $this->commentaire;
	}

	function setnom_et_prenom($nom_et_prenom){
		$this->nom_et_prenom=$nom_et_prenom;
	}
	function setid($id){
		$this->id=$id;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function setobjet($objet){
		$this->objet=$objet;
	}
	function setcommentaire($commentaire){
		$this->commentaire=$commentaire;
	}

}

?>