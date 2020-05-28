<?PHP
include "../core/avisC.php";
$avisC=new avisC();
if (isset($_POST["id_avis"])){
	$avisC->supprimerAvis($_POST["id_avis"]);
	header('Location: gestion_des_avis.php');
}

?>