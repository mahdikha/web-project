<?PHP

include "core/classeC.php";
include "entity/classe.php";

foreach ($_POST['a'] as $selected)
if (isset($_POST['id']) and isset($selected) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['login']) and isset($_POST['mdp']) ){

$classe1=new classe(($_POST['id']),$selected, $_POST['nom'], $_POST['prenom'], $_POST['login'], $_POST['mdp']);

$classeC= new classcC();
$classeC-> ajouterclasse($classe1);
echo"Client ajouté !";
	

}
var_dump($classe1);
	header('Location: afficherEmploye.php');
//*/

?>