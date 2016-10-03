
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/form.css">
<title>Mot de passe</title>
</head>
<body>

	<center>
	<h1>Mot De Passe Perdu ?</h1>
	<h3> Pour changer votre mot de passe : </h3>
<form action="./inscription.php" method="post" class="tableau">
	<div>
        <label for="adress"></label>
        <p> Entrer votre Adresse Mail : </p><input name="adresse_email" type="email" placeholder="Adresse@email.com"></input> 
    </div>
    <div>
    	<p> Puis votre nouveau mot de passe : </p>
       <label for="mot de passe"></label>
       <input name="mot_de_passe" type="password" placeholder="Mot de passe"></input>
     </div>
     <div>
     	<p> Pour finir confirme le : </p>
        <label for="confirm"></label>
        <input name="confirm" type="password" placeholder="Confirmez mot de passe"></input>
    </div>
    <input type="submit" name="envoyer" value="Envoyer" class="button" />
</center>
<footer>
	<div class="footer"></div>
</footer> 
</body>
</html>