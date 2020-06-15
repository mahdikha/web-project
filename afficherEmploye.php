
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
<body>


	<div class="sidenav">
		<a href="index.html">ADD</a>
		<a href="#">SELECT</a>
		<a href="start.php">DELTE</a>
		<a href="MODIFER.php">UPDATE</a>
		<a href="metier1.html"> CHERCHER</a>
		<a href="metier2.html"> TRIER</a>
	</div>

	<dir class="main">
		<div class="card-content">
			<div class="limiter">	   
		<div class="container-login100">

	<?PHP
include "core/classeC.php";
$classeC= new classcC();
$listeEmployes=$classeC->affiche();

//var_dump($listeEmployes->fetchAll());
?>
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


</tr>
</div>





<?PHP
 if(!empty($listeEmployes)){
foreach($listeEmployes as $row){
	?>
	<tr scope="row">
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['niveau']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['login']; ?></td>
	<td><?PHP echo $row['mdp']; ?></td>
	
	</tr>
	<?PHP
} }
?>


</table>





