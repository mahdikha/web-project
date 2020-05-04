<?php
//include config.php;

include "core/produitc.php";

include "entity/produit.php";
/*
$x=$_POST['categorie'];
$j=strpos($x,":");
$d=strlen($_POST['categorie']);
var_dump(substr($d,$j));*/
/*
if(isset($_POST["platform"])){
*/ $produitc=new produitc();
    $nom=$_POST["nom"];
    $id=$_POST["id"];
    $prix=$_POST["prix"];
    $idm=$_POST["idm"];

    // upload image
 



    //$cat=$_POST['categorie'];
    //$Catu=(int)$cat;

  //  $Message='produit Added';

    $plat=new produit($nom, $id, $prix, $idm);
      var_dump($plat);


    $platc->ajouterproduit($plat);

   // $notification=new notification($Message);
   // $notificationC->ajouternotification($notification);
    header('Location: affichplat.php');



//}
?>