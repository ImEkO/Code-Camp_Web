	<head>
		<TITLE> Costumeo </TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      	<link rel="stylesheet" type="text/css" href="css/pagesite.css" media="all"/>
    </head>
	<body>
		<center>
			<p>
				<input class="search" type="search" placeholder="Recherche"></input> 
				<input class="button" type="button" value="Rechercher"></input>
				<input class="filtre" type="button" value="filtre"></input>
			</p>	
			<table class="table" width="850px">
				<td>
					<h4><center> Slogan </center></h4>
				</td>
			</table>

			<div class="resaux">
				<table class="table">
				<td>
					<h4><center> Costumeo ici pour la beauté de vos spectacles !</center></h4>
				</td>
			</table>
			</div>

			<div class="divbouton">
				<a href='php/costume.php'><div class="bouton1"><img src="image/Costume.jpg" class="img"/></div></a>
				<a href='php/decors.php'><div class="bouton2"><img src="image/decor_image.jpg" class="img"/></div></a>
				<a href='php/accesoire.php'><div class="bouton3"><img src="image/Decor.jpg" class="img"/></div></a>

				<?php
				 if (!isset($_SESSION['adresse_email']))
				 {
					echo "<div class='bouton4'><img src='image/logo_compte.png' class='img'/></div>";
				 }
				 else
				 {
				 	echo "<a href='php/page_compte.php'><div class='bouton4'><img src='image/logo_compte.png' class='img'/></div></a>";
				 }
?>
			</div>

			<?php
			if (!isset($_SESSION['adresse_email']))
			{
				echo "<input type='submit' class='annonce'  value='Poster sont annonce'>";
			}
			else
			{
				echo "<a href='php/annonce.php'><input type='submit' class='annonce' value='Poster sont annonce'></a>";
			}
			?>
		</center>
		<footer>
		<div class="footer">
		<div>
		<a href="#" class="fb"><img class="fb2" src="image/fb.png" onmouseover="this.src='image/fb-c.png'" onmouseout="this.src='image/fb.png'"/></a>

		<a href="#" class="twt"><img class="twt2" src="image/twitter.png" onmouseover="this.src='image/twitter-c.png'" onmouseout="this.src='image/twitter.png'"/></a>
		</div>
		<div class='hhh'><h13>Copyright by Costumeo 2015/2016</h13></div>
		<div class='hth'><a href='php/nouscontacter.php'><h13>Nous contacter</h13></a></div>
		</div>
		</footer>
	</body>