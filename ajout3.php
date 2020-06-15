<?PHP
include "entity/marque.php";
include "core/marquec.php";

$id=$_POST['id'];
$nom=$_POST['nom'];


$inv=new marque($id,$nom);
var_dump($inv) ;
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$inv1c=new marquec();
$inv1c->ajoutermarque($inv);

	var_dump($inv1c);
	header('Location: affichermarque.php');

//*/

?>