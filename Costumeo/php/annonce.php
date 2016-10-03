<?php session_start(); ?>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/annonce.css" />
<title>Deposer une annonce</title>
</head>

<body>
<form method="post" enctype="multipart/form-data" action="annoncephp.php">
      <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
      mon fichier 
       <input type="file" name="image"/>

<input type="text" name="Libelle" placeholder="Nom du produit" class="libellé" /></label><br/>
<br>
<input type="text" name="Description" placeholder="Description" class="description" /></label><br/>
<br>
<input class="prix" type="text" name="Prix_vente" placeholder="Prix de vente" class="prix" /></label><br/>
<input class="prix" type="text" name="Nombres_produit" placeholder="Nombre de produits" class="nbr" /></label><br/> 
<br>
<select name="liste" size="1" class='liste'>
<OPTION>Costume
<OPTION>Decor
<OPTION>Accessoire
</select>
<input type="submit"/>
</form>
<footer>
		<div class="footer">
		<div>
		<a href="#" class="fb"><img class="fb2" src="../image/fb.png" onmouseover="this.src='../image/fb-c.png'" onmouseout="this.src='../image/fb.png'"/></a>

		<a href="#" class="twt"><img class="twt2" src="../image/twitter.png" onmouseover="this.src='../image/twitter-c.png'" onmouseout="this.src='../image/twitter.png'"/></a>
		</div>
		</div>
		</footer>
</body>
