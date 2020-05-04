<?PHP
include "entity/event.php";
include "core/eventC.php";

$nom=$_POST['nom'];
$theme=$_POST['theme'];
$id=$_POST['id'];


$inv=new event($nom,$theme,$id);
var_dump($inv) ;
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$inv1c=new eventc();
$inv1c->ajouterproduit($inv);

	var_dump($inv1c);
	header('Location: affichplat.php');

//*/

?>