<?php session_start(); ?>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/page_compte.css" />
<title>Compte</title>
<link rel="stylesheet" type="text/css" href="../css/demo2.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <script src="../Js/modernizr.custom.97074.js"></script>
  <script type="text/javascript" src="../Js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../Js/js.js"></script>
</head>

<body>
<div id="slideshow">
    <img src="../image/image1.jpg" class="active" />
    <img src="../image/image2.jpg"/>
    <img src="../image/image3.jpg"/>
 
</div>
<a href='../index.php'><img id='logo' src='../image/logo.png'></a>
	<h1>INFORMATION DU COMPTE</h1>

<center>
	<table class="information">
		<tr>
			<td>nom de compte :</td>
			<td> <?php echo $_SESSION['Nom'].'   '.$_SESSION['Prenom']; ?></td>
		</tr>

		<tr>
			<td>Adresse mail :</td>
			<td><?php echo $_SESSION['adresse_email']; ?> </td>
		</tr>

		<tr>
			<td>Genre :</td>
			<td><?php echo $_SESSION['genre']; ?></td>
		</tr>
	</table>
	</center>

<center>
	<table class="tableau">
		<tr>
			<td>Changement de Mot de passe</td>
			<td>Changement d'email</td>	
		</tr>

		<tr>
			<td><a href="Mdp_perdu.php"><img src="../image/cadenas3.jpg" alt= "mail" class="image1"></a></td>
			<td><a href="change_mail.php"><img src="../image/mail1.png" alt= "mot de passe" class="image2"></a></td>
		</tr>
	</table>
</center>
	
	<footer>
		<div class="footer"></div>
	</footer> 
</body>


