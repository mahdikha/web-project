<?PHP
include "entity/promotion.php";
include "core/promotionc.php";

$id=$_POST['id'];
$idp=$_POST['idp'];
$pourcentage=$_POST['pourcentage'];
$newprice=$_POST['newprice'];

$inv=new promotion($id,$idp,$pourcentage,$newprice);
var_dump($inv) ;
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$inv1c=new promotionc();
$inv1c->ajouterpromotion($inv);

	var_dump($inv1c);
	header('Location: afficherpromo.php');

//*/

?>