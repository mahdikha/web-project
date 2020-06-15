<?PHP

include "core/produitc.php";
$classeC= new produitc();
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




  <dir class="main">
    <div class="card-content">
      <div class="limiter">    
    <div class="container-login100">

<table border="1">
<caption>

<h2>produits</h2>
</caption>
<tr>

<th>nom</th> 

<th>id</th>

<th>prix</th>

<th>id_m</th>






</tr>
</div>
<?PHP
foreach($listeEmployes as $row){
  ?>
  <tr>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['id_m']; ?></td>
  
  
  
  </tr>
  <?PHP
}
?>
</table>


