
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/form.css">
<title>Change Mail </title>
</head>
<body>
	<center>
	<h1>Nouvelle Adresse Mail ? </h1>
	<h3> Pour changer votre Adresse Mail : </h3>
<form action="./inscription.php" method="post" class="tableau">
	<div>
        <label for="adress"></label>
        <h4> Entrez votre adresse mail avec motre de passe :</h4> <input name="adresse_email" type="email" placeholder="Adresse@email.com"></input>
    </div>
    <div> 
       <label for="mot de passe"></label>
       <input name="mot_de_passe" type="password" placeholder="Mot de passe"></input>
     </div>
    <div>
        <label for="New_adress"></label>
        <p> Entrez votre nouvelle adresse mail : </p><input name="adresse_email" type="email" placeholder="Adresse@email.com"></input>
    </div>
    <input type="submit" name="envoyer" value="Envoyer" class="button" />
</center>
<footer>
	<div class="footer"></div>
</footer> 
</body>
</html>