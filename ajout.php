<?PHP
include "entity/produit.php";
include "core/produitc.php";

$nom=$_POST['nom'];
$id=$_POST['id'];
$prix=$_POST['prix'];
$idm=$_POST['idm'];

$inv=new produit($nom,$id,$prix,$idm);
var_dump($inv) ;
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$inv1c=new produitc();
$inv1c->ajouterproduit($inv);

	var_dump($inv1c);
	header('Location: affichercat.php');

//*/

?>
