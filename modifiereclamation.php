<?PHP
include "core/reclamationC.php";
include "entities/reclamation.php";
if ( isset($_POST['id_mod']) and isset($_POST['nom_et_prenom']) and isset($_POST['id']) and isset($_POST['mail']) and isset($_POST['objet']) and isset($_POST['commentaire'])){
	$reclamation=new reclamation($_POST['nom_et_prenom'],$_POST['id'],$_POST['mail'],$_POST['objet'],$_POST['commentaire']);
	echo "imchi";
	$reclaC=new reclamationC();
	$reclaC->modifierReclamation($reclamation,$_POST['id_mod']);
	//echo $_POST['id_mod'];
	header('Location: gestion_des_reclamation.php');
}
?>