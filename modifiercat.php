<?php
include "core/produitc.php";
include "entity/produit.php";
session_start() ;
$categorieC=new produitc();
if(!isset($_POST["Modifier"])) {



    $nom = $_POST["nom"];
    $id = $_POST["id"];
    $prix = $_POST["prix"];
     $idm = $_POST["idm"];





$p=new produit($nom,$id,$prix,$idm);
var_dump($p);

  $categorieC->modifiercat($p,(int)$_GET["id"]);

}
else{
    echo "vous devez selectionée un produit  !!!" ;

}
//header location
header('Location:affichercat.php');
?>