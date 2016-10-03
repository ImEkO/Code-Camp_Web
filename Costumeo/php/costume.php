<?php  session_start();
include ("connexionbasededonne.php");  ?>
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Produits</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Direction-Aware Hover Effect with CSS3 and jQuery" />
        <meta name="keywords" content="hover, css3, jquery, effect, direction, aware, depending, thumbnails" />
        <meta name="author" content="Codrops" />
   		<link href='http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic' rel='stylesheet' type='text/css' />
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



			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="">
							<img src="../image/00.jpg" />
							<div><span>Costumeo</span></div>
						</a>
					</li>
					<li>
						<a href="">
							<img src="../image/01.jpg" />
							<div><span>Costumeo</span></div>
						</a>
					</li>
					<li>
						<a href="">
							<img src="../image/02.jpg" />
							<div><span>Costumeo</span></div>
						</a>
					</li>
					<li>
						<a href="">
							<img src="../image/03.jpg" />
							<div><span>Costumeo</span></div>
						</a>
					</li>
					<li>	
						<a href="">
							<img src="../image/04.jpg" />
							<div><span>Costumeo</span></div>
						</a>
					</li>
					<li>
						<a href="">
							<img src="../image/05.jpg" />
							<div><span>Costumeo</span></div>
						</a>
					</li>
<?php

						$query=$db->prepare(" SELECT * FROM annonce");
						$query->execute();
						while ($result = $query->fetch())
						{
							if ($result['verif'] != '0')
				 	 	{

				 	 		if ($result['type'] == 'Costume')
				 	 		{
				 	 ?> <li>
						<a href='#'>
							<img src='../images/<?php echo $result['image'];?>'/>
							<div><p><?php echo $result['Nom']."  ".$result['Prenom']; ?></p><span><?php echo $result['Libelle']; ?></span><p><?php echo $result['Description']; ?></p><p><?php echo $result['Prix_vente'].'€'; ?></p><p><?php echo $result['Nombres_produit']; ?></p></div>
						</a>
					</li>
					<?php
}
}
}
?>

				</ul>
 			</section>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="../Js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>



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
