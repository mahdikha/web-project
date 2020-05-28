function con_saisie()
{
var id_value=document.getElementById('id').value;
var n=document.getElementById('nom_et_prenom').value;
if((id_value.length)!=4){alert("l'id doit comporter 4 chifres exactement");}
else{alert("votre reclamation a éte prise en consideration"" "+n);}
}
function con_saisie2()
{
var id_value2=document.getElementById('id_avis').value;
var n2=document.getElementById('nom_et_prenom_avis').value;
if((id_value2.length)!=4){alert("l'id doit comporter 4 chifres exactement");}
else{alert("votre reclamation a éte prise en consideration"" "+n2);}
}