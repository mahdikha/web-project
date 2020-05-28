<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";

if (isset($_POST['nom_et_prenom']) and isset($_POST['id']) and isset($_POST['mail']) and isset($_POST['objet']) and isset($_POST['commentaire'])){
$rec=new reclamation($_POST['nom_et_prenom'],$_POST['id'],$_POST['mail'],$_POST['objet'],$_POST['commentaire']);
  var_dump($rec);

    $recC=new reclamationC();
    $recC->ajouterReclamation($rec);
    header("location:../views_front/index.html#contact");
    

}
else
{
    echo "faux";
}
?>