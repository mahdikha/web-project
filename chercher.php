<?PHP

include "../core/classeC.php";
$classeC= new classcC();
$listeEmployes=$classeC->rechercherListeEmployes($_POST['id']);

?>



<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>


<div class="sidenav">
    <a href="index.html">ADD</a>
    <a href="afficherEmploye.php">SELECT</a>
    <a href="start.php">DELETE</a>
    <a href="MODIFER.php">UPDATE</a>
    <a href="metier1.html"> CHERCHER</a>
    <a href="metier2.html"> TRIER</a>


  </div>

  <dir class="main">
    <div class="card-content">
      <div class="limiter">    
    <div class="container-login100">

<table border="1">
<caption>

<h2>Clients</h2>
</caption>
<tr>

<th>ID</th> 

<th>niveau</th>

<th>nom</th>

<th>prenom</th>

<th>login</th>

<th>mdp</th>

<td>supprimer</td>

<td>Editer</td>


</tr>
</div>
<?PHP
foreach($listeEmployes as $row){
  ?>
  <tr>
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['niveau']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['login']; ?></td>
  <td><?PHP echo $row['mdp']; ?></td>
  <td><form method="POST" action="supprime.php">
  <input type="submit" name="supprimer" class="btn btn-theme btn-block" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
  </form>
  </td>
  <td><form method="GET" action="modifierEmploye.php">
  <input type="submit" name="modifier" class="btn btn-theme btn-block" value="modifier">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
  </form>
  </td>
  
  </tr>
  <?PHP
}
?>
</table>


