<?PHP
include "../entities/avis.php";
include "../core/avisC.php";

if (isset($_POST['nom_et_prenom_avis']) and isset($_POST['id_avis']) and isset($_POST['age']) and isset($_POST['note']) ){
$av=new avis($_POST['nom_et_prenom_avis'],$_POST['id_avis'],$_POST['age'],$_POST['note']);
  var_dump($av);

    $avC=new avisC();
    $avC->ajouterAvis($av);
    header("location:../views_front/index.html#avis");
    

}
else
{
    echo "faux";
}
?>