
<head>
    <title>Costumeo</title>
    <meta charset="UTF-8">
    <link href='Js/jquery.js' rel='stylesheet' type='text/css'>


        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="description" content="A Collection of Dialog Effects" />
        <meta name="keywords" content="dialog, effect, modal, overlay, animation, web design" />
        <meta name="author" content="Codrops" />
     
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <!-- common styles -->
        <link rel="stylesheet" type="text/css" href="css/dialog.css" />
        <!-- individual effect -->
        <link rel="stylesheet" type="text/css" href="css/dialog-cathy.css" />
        <script src="Js/modernizr.custom.js"></script>

    <style>
      
        header {
            max-width: 1905px;
            min-height: 671px;
            max-height: 671px;
            min-width: 1905px;
        }
        body{
            margin: 0;
            background-image: url("baro2.jpg");
        }
     header h2 {}
        
        h7 {
color: white;
position: absolute;
top: 25px;
right: 120px;
font-size: 20px;
font-family: Arial;
font-family: Garamond;
text-shadow: 0px 0px 12px #ccc; 
}

h10 {
color: white;
position: absolute;
top: 25px;
right: 15px;
font-size: 20px;
font-family: Arial;
font-family: Garamond;
text-shadow: 0px 0px 12px #ccc; 
}

h11 {
color: white;
position: absolute;
top: 25px;
right: 160px;
font-size: 20px;
font-family: Arial;
font-family: Garamond;
text-shadow: 0px 0px 12px #ccc; 
}
h12 {
color: white;
position: absolute;
top: 25px;
right: 300px;
font-size: 20px;
font-family: Arial;
font-family: Garamond;
text-shadow: 0px 0px 12px #ccc; 
}


h8 
{
color: white;
position: absolute;
top: 25px;
right: 20px;
font-size: 20px;
font-family: Arial;
font-family: Garamond;
text-shadow: 0px 0px 12px #ccc; 

}


h1 {
color: white;
position: absolute;
font-size: 80px;
margin-top: 14.3%;
font-family: Garamond;
text-shadow: 0px 0px 12px #ccc; 
top: -7px;
left: 700px;



}

h2 {
color: white;
position: absolute;
top: -7px;
left: 10px;
font-size: 20px;
 text-shadow:
   -1px -1px 0 #000,  
    1px -1px 0 #000,
    -1px 1px 0 #000,
     1px 1px 0 #000;
font-family: Garamond;
  


}







        .credits {
            color: #888888;
            font-size: 14px;
            text-align: center;
        }
        .credits a {
            color: black;
        }
        

        
        .aslide {
            display: none;
            background: #ffffff;
        }
        .aslide img {
            max-width: 1905px;
            min-height: 771px;
            max-height: 771px;
            min-width: 1905px;
        }
        #slider {
            position: absolute;
            width: 1905px;
            height: 771px;
            margin-top: -1px;
        }
        .aslide .text {
            color: #f8f8f8;
            text-shadow: 0 0 2px #000;
            font-weight: bold;
            font-size: 36px;
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: 30px;
            font-family: sans-serif;            
        }
        @media screen and (max-width: 700px) {
            .aslide .text {
                font-size: 24px !important;
            }
                        h6 {
                font-size: 60px !important;
           
            }
            
        }
        @media screen and (max-width: 500px) {
           
            .aslide .text {
                font-size: 16px !important;
            }
            h6 {
                font-size: 25px !important;
           
            }

           
        }
        #logo{
    top: 2%;
right: 94%;
min-width: 120px;
position: absolute;
z-index: 2;
}

#overlay6{
    display: none;
    position: fixed;
    top: 45%;
    bottom: 30%;
    left: 30%;
    right: 30%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
    border-radius: 7em;
}
#modalCheck6{
    display: none;
    position: center;
}
#modalCheck6:checked + #overlay6{
    display: block;
}
.email{
margin-left: 35%;
margin-top: 5%;

}
.mdp{
margin-left: 35%;
margin-top: 5%;
}

.confirmer{
margin-top: 3%;
margin-left: 35%;
border: none;
}

        
    </style>



</head>
<body>








    <script src="Js/aslider.js"></script>
<section class="">
   


    <div id="slider" class="aslider" data-duration="10">
 
  <div class="aslide" data-duration="5">
            <img src="image/3.jpg"/>
            <div class="text"></div>
        </div>


        <div class="aslide" data-duration="5">
            <img src="image/6.jpg"/>
            <div class="text"></div>
        </div>
        <div class="aslide" data-duration="5">
            <img src="image/4.jpg"/>
            <div class="text"></div>
        </div>
        <div class="aslide" data-duration="6">
            <img src="image/5.jpg"/>
            <div class="text"></div>
        </div>
        <div class="aslide" data-duration="4">
            <img src="image/h.jpg"/>
            <div class="text"></div>
        </div>

   
  <div class="aslide" data-duration="5">
            <img src="image/t.jpg"/>
            <div class="text"></div>
        </div>
 
 <div class="aslide" data-duration="5">
            <img src="image/m.jpg"/>
            <div class="text"></div>
        </div>

    </div>

<div class="container">
            <div class="content">
        

<div class="button-wrap"><button data-dialog="somedialog" class="trigger">Mode d'emploi</button></div>

                
                <div id="somedialog" class="dialog">
                    <div class="dialog__overlay"></div>
                    <div class="dialog__content">
                        <div><button class="action" data-dialog-close>Fermer</button></div>


        <div>
            <div class="pr">
                <img src="image/pr.png"/>
                <h16>Trouvez le costume de vos rêve</h16>
            </div>


            <div class="mal">
                <img src="image/mal.png"/>
                <h17>Valorisez votre stock</h17>
            </div>
            <div class="fl">
                <img src="image/fl.png"/>
                <h18>
                    Vendez  <br> 
                    Louez <br>
                    Troquez <br>
                </h18>
            </div>
        </div>

                    </div>
                </div>
        
            </div>
        </div>


<img id='logo' src='image/logo.png'>
    <h1>COSTUMEO</h1>
 <?php  
    if (!isset($_SESSION['adresse_email']))
    {     
            echo "</section>
<a href='php/form.php'style='text-decoration:none;'><h7>Inscription</h7></a>
<h8>
<form action='php/connexion.php'  method='post'>
<div class='panneau'>
    <label for='modalCheck6'>Connexion</label><input type='checkbox' id='modalCheck6'/>
    <div id='overlay6'>
        <div class='popup_block'>
        <div class='email'>
                    <label for='adresse_email'>Adresse mail :</label>
                    <input name='adresse_email' type='text' placeholder='Adresse@email.com'/> 
                </div>  
                <div class='mdp'>
                    <label for='mot de passe'>Mot de passe :</label>
                    <input name='mot_de_passe' type='password' placeholder='Mot de passe'/>
                </div>
               <button type='submit' value='envoyer' name='go' class='confirmer'> Go !</button></a>

        </div>
    </div>
</div>
</form>
</h8>
";
}
else
{
echo "<h11>Bienvenue
  ".$_SESSION['Prenom']."</h11><a href='php/deconnexion.php' style='text-decoration:none;'><h10>Deconnexion</h10></a>
";
}
if (isset($_SESSION['role']))
{
if (($_SESSION['role']) == 'administrateur')
{
echo "<a href='php/paneladmin.php'><h12>Admin</h12></a>";

}
}
?>
<script src="Js/classie.js"></script>
        <script src="Js/dialogFx.js"></script>
        <script>
            (function() {

                var dlgtrigger = document.querySelector( '[data-dialog]' ),
                    somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
                    dlg = new DialogFx( somedialog );

                dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

            })();
        </script>

<script>
    function resize() {
        $('#slider').height($('#slider').children('.aslide').height());
    }
    $(window).resize(resize);
    $(window).load(resize);
</script>
 </body>
