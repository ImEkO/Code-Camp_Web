
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/form.css">
<title>Inscription</title>
</head>
<body>
<h1>INSCRIPTION</h1>
<br>
<br>
<form action="./inscription.php" method="post" class="tableau">
    <div>
        <label for="Nom"></label>
        <input name="Nom" type="text" placeholder="Nom"></input>
    </div>
    <div>
        <label for="prenom"></label>
        <input name="Prenom" type="text" placeholder="Prenom"></input>
    </div>
    <div>
        <label for="message"></label>
        <select name="genre" size="1" placeholder="Genre"><option>Homme</option>>
<option>Femme</option>>
        </select>
    </div>
    <div>
        <label for="adress"></label>
        <input name="adresse_email" type="email" placeholder="Adresse@email.com"></input> 
    </div>
    <div>
        <label for="Date de naissance"></label>
        <input name="Date de naissance" type="text" placeholder="Annee/moi/jour"></input>
    </div>
    <div>
        <label for="mot de passe"></label>
        <input name="mot_de_passe" type="password" placeholder="Mot de passe"></input>
    </div>
    <div>
        <label for="confirm"></label>
        <input name="confirm" type="password" placeholder="Confirmez mot de passe"></input>
    </div>
    <div>
        <label for="Code postale"></label>
        <input name="Code postale" type="text" placeholder="Code postale"></input>
    </div>
    <div>
        <label for="Ville"></label>
        <input name="ville" type="text" placeholder="Ville"></input>
    </div>
    <div>
        <label for="Pays"></label>
        <input name="pays" type="text" placeholder="Pays"></input>
    </div>
    <br>
    <input type="submit" name="envoyer" value="Envoyer" class="button" />
</form>
<footer>
<div class="footer"></div>
</footer> 
</body>
</html>