
<?php


$to = $_POST["mail_to"];
$subject = "réclamation";
$txt = "l'équipe de samaani école vous annonce que votre réclamation a éte  traiter";
$headers = "From: abassimarwen14@gamil.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
if(@mail){echo "cv";
header('Location: gestion_des_reclamation.php');
}
else{echo "non";}
?>

