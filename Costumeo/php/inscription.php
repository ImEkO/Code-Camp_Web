
<?php include("connexionbasededonne.php");
session_start();
$mdp_erreur = NULL;
$email_erreur1 = NULL;
$email_erreur2 = NULL;


$i = 0;

$Nom = $_POST['Nom'];
$Prenom = $_POST['Prenom'];
$genre = $_POST['genre'];
$adresse_email = $_POST['adresse_email'];
$Date_de_naissance = $_POST['Date_de_naissance'];
$confirm = md5($_POST['confirm']);
$mot_de_passe = md5($_POST['mot_de_passe']);
$Code_postale = $_POST['Code_postale'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
 
    
     $query=$db->prepare('SELECT COUNT(*) AS nbr FROM Utilisateurs WHERE adresse_email = :adresse_email');
    $query->bindValue(':adresse_email',$adresse_email, PDO::PARAM_STR);
    $query->execute();
    $adresse_email_free=($query->fetchColumn()==0)?1:0;
    $query->CloseCursor();
    if(!$adresse_email_free)
    {
        echo "<div class='alert alert-dismissable alert-danger'>
  <strong>Oh Non !</strong> Cette adresse email est deja utilise !
  <meta http-equiv='refresh' content='2 URL=../index.php'>
</div>";
        $i++;
    }

    //Vérification du mdp
    if ($mot_de_passe != $confirm || empty($confirm) || empty($mot_de_passe))
    {
        echo "<div class='alert alert-dismissable alert-danger'>
 Votre mot de passe et votre confirmation diffèrent, ou sont vides !
  <meta http-equiv='refresh' content='2 URL=../index.php'>
</div>";
        $i++;
    }
    if (empty($Nom) || empty($Prenom) || empty($genre) || empty($adresse_email) || empty($Date_de_naissance) || empty($Code_postale) || empty($ville) || empty($pays))
    {
        echo "<div class='alert alert-dismissable alert-danger'>
  <strong>Oh Non !</strong>Impossible de ce s\' enregistrer, vous avez louper un champs! Merci de recommencer !
  <meta http-equiv='refresh' content='2 URL=../index.php'>
</div>";
        $i++;
    }


   if ($i==0)
   {
	echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
	
        //La ligne suivante sera commentée plus bas
   
        $query=$db->prepare('INSERT INTO Utilisateurs (Nom, Prenom, genre, adresse_email, Date_de_naissance, mot_de_passe, Code_postale, ville, pays)
        VALUES (:Nom, :Prenom, :genre, :adresse_email, :Date_de_naissance, :mot_de_passe, :Code_postale, :ville, :pays)');
	$query->bindValue(':Nom', $_POST['Nom'], PDO::PARAM_STR);
	$query->bindValue(':Prenom', $_POST['Prenom'], PDO::PARAM_STR);
	$query->bindValue(':genre', $_POST['genre'], PDO::PARAM_STR);
	$query->bindValue(':adresse_email', $_POST['adresse_email'], PDO::PARAM_STR);
	$query->bindValue(':Date_de_naissance', $_POST['Date_de_naissance'], PDO::PARAM_INT);
	$query->bindValue(':mot_de_passe', md5($_POST['mot_de_passe']), PDO::PARAM_STR);
	$query->bindValue(':Code_postale', $_POST['Code_postale'], PDO::PARAM_INT);
	$query->bindValue(':ville', $_POST['ville'], PDO::PARAM_STR);
	$query->bindValue(':pays', $_POST['pays'], PDO::PARAM_STR);
    $query->execute();

	//Et on définit les variables de sessions
    /*$_SESSION['Nom'] = $Nom;
    $_SESSION['Prenom'] = $Prenom;
    $_SESSION['genre'] = $genre;
    $_SESSION['adresse_email'] = $adresse_email;
    $_SESSION['Date_de_naissance'] = $Date_de_naissance;
    $_SESSION['Code_postale'] = $Code_postale;
    $_SESSION['Ville'] = $ville;
    $_SESSION['pays'] = $pays;
    $sujet = "Activer votre compte" ;
    $entete = "From: inscription@votresite.com" ;
    $message = 'Bienvenue'.$_SESSION['Nom'].$_SESSION['Prenom'].'sur Costumeo,
 
Le site de costume et de decors numeros 1 !
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
 mail($adresse_email, $sujet, $message, $entete);*/
        $query->CloseCursor();
    }
    else
    {
        echo'<h1>Inscription interrompue</h1>';
        echo'<p>Une ou plusieurs erreurs se sont produites pendant l incription</p>';
        echo'<p>'.$i.' erreur(s)</p>';
        echo'<p>'.$mdp_erreur.'</p>';
        echo'<p>'.$email_erreur1.'</p>';
        echo'<p>'.$email_erreur2.'</p>';

        echo'<p>Cliquez <a href="form.php">ici</a> pour recommencer</p>';
    }

?>