<?PHP
include "../config.php";
class reclamationC{
 function ajouterReclamation($reclamation){
		$sql="insert into reclamation (nom_et_prenom,id,mail,objet,commentaire) values (:nom_et_prenom,:id,:mail,:objet,:commentaire)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom_et_prenom=$reclamation->getnom_et_prenom();
        $id=$reclamation->getid();
        $mail=$reclamation->getmail();
        $objet=$reclamation->getobjet();
        $commentaire=$reclamation->getcommentaire();
		$req->bindValue(':nom_et_prenom',$nom_et_prenom);
		$req->bindValue(':id',$id);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':objet',$objet);
		$req->bindValue(':commentaire',$commentaire);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
  function afficherReclamation(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function trierReclamation(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation ORDER BY objet";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerReclamation($id){
		$sql="DELETE FROM reclamation where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercherReclamation($id_r1){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation WHERE id=$id_r1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function modifierReclamation($reclamation,$id_mod){
		$sql="UPDATE reclamation SET nom_et_prenom=:nom_et_prenom, id=:id,mail=:mail,objet=:objet,commentaire=:commentaire WHERE id=:id_mod";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom_et_prenom=$reclamation->getnom_et_prenom();
        $id=$reclamation->getid();
        $mail=$reclamation->getmail();
        $objet=$reclamation->getobjet();
        $commentaire=$reclamation->getcommentaire();
		$datas = array(':id_mod'=>$id_mod,':nom_et_prenom'=>$nom_et_prenom, ':id'=>$id, ':mail'=>$mail,':objet'=>$objet,':commentaire'=>$commentaire);
		$req->bindValue(':id_mod',$id_mod);
		$req->bindValue(':nom_et_prenom',$nom_et_prenom);
		$req->bindValue(':id',$id);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':objet',$objet);
		$req->bindValue(':commentaire',$commentaire);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
}
?>
