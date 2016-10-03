<?php require('control-session.php'); ?>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/pannel admin.css" />
<title>Pannel admin</title>
<script type="text/javascript" src="../Js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../Js/js.js"></script>
<link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <script src="../Js/modernizr.custom.97074.js"></script>
    <link rel='stylesheet' type='text/css' href='../css/panel_utilisateurs.css' media='all'/>
</head>

<body>

<div id="slideshow">
    <img src="../image/image1.jpg" class="active" />
    <img src="../image/image2.jpg"/>
    <img src="../image/image3.jpg"/>
 
</div>

<h1>MENU</h1>
<form method="POST" action="#">
<input type="submit" value="utilisateur" name="utilisateur" class='utilisateur'/>
<input type="submit" value="annonce" name="annonce" class='annonce'/>
<input type="submit" value="gestion" name="gestion" class='gestion'/>
</form>
<?php 

if(isset($_POST['utilisateur']))
	{
	$requete = $db->query("SELECT * FROM Utilisateurs");

	while ($data = $requete->fetch())
		{
							
?> <head>
	<TITLE> Costumeo </TITLE>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <link rel='stylesheet' type='text/css' href='panel_utilisateurs.css' media='all'/>
    <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <script src="../Js/modernizr.custom.97074.js"></script>
    <link rel='stylesheet' type='text/css' href='../css/panel_utilisateurs.css' media='all'/>
</head>
<body>
<h2><?php echo$data['Nom']."       ".$data['Prenom']; ?></h2><h2><?php echo$data['genre'];?></h2>
<h2><?php echo$data['role'];?></h2>
<h2><?php echo$data['ville'];?></h2>
<h2><?php echo$data['Code_postale'];?></h2>
	<div class='Utilisateur1'>
	
		<form method="post"  action='suppr.php'>
		<select class="select"  name="adresse_email">
		<option> <?php echo $data['adresse_email']; ?></option>
		</select>
			<input type="submit" value="Supprimer" class='supputil'/> 
		</form>
		<form method="post" action='droit.php?mail=<?php echo $data['adresse_email']; ?>'>
		</select>
		<select class="select" name="role" action='droit.php' size='1'>
		<option>utilisateur</option>
		<option>administrateur</option>
		</select>
		<input type="submit" value="Changer les Droits" class='supputil'/> 
		</form>
		</div>
		<div class='separ'>
		</div>
	</div>
</body>
<?php
}
}
if(isset($_POST['annonce']))
{
		$requete = $db->query("SELECT * FROM annonce");

	while ($data = $requete->fetch())
	{
		if ($data['verif'] == '0')
	{
?>
	<head>
	<TITLE> Costumeo </TITLE>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <link rel='stylesheet' type='text/css' href='../css/panel_annonce.css' media='all'/>
<link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <script src="../Js/modernizr.custom.97074.js"></script>
    <link rel='stylesheet' type='text/css' href='../css/panel_utilisateurs.css' media='all'/>
	<body>
	<center><h1> Annonces </h1>
	<hr>
	<div class='Annonce1'>
	<div>
	<p class='descc'>Description :<?php echo $data['Description']; ?></p>
	</div>
	<div>
	<p> Nom du produit :<?php echo $data['Libelle']; ?></p>
	<img class='img' src='../images/<?php echo $data['image']; ?>'/>
	</div>
	<div>
	<form action='validation.php' method="post">
	<input  class='suputil' type='submit' name='validation' value='Valider annonce'/>
	</form>
	<form action='suppp.php?desc=<?php echo $data['Description']; ?>' method="post">
	<input class='suputi' type='submit' name='suppr' value='Supprimer annonce'/>
	</form>	
	</div>
	</div>
	</hr>
	</center>
	</body>
<?php
}
}
}
?>