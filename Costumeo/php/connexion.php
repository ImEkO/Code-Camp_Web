<?php

session_start();
include ("connexionbasededonne.php");


if (empty($_POST['adresse_email']) || empty($_POST['mot_de_passe']) ) //Oublie d'un champ
{ 
 echo '<div class="alert alert-dismissable alert-success">
   Une erreur c\'est produit ! Merci de recommencer ! <meta http-equiv="refresh" content="1; URL=../index.php">
</div>';;
}
else //On check le mot de passe
{
$query=$db->prepare('SELECT * FROM Utilisateurs WHERE adresse_email = :adresse_email');
$query->bindValue(':adresse_email',$_POST['adresse_email'], PDO::PARAM_STR);
$query->execute();
$data=$query->fetch();
  if ($data['mot_de_passe'] == md5($_POST['mot_de_passe'])) // Acces OK !
    {
    $_SESSION['ID'] = $data['ID'];
    $_SESSION['Nom'] = $data['Nom'];
    $_SESSION['Prenom'] = $data['Prenom'];
    $_SESSION['genre'] = $data['genre'];
    $_SESSION['adresse_email'] = $data['adresse_email'];
    $_SESSION['Date_de_naissance'] = $data['Date_de_naissance'];
    $_SESSION['Code_postale'] = $data['Code_postale'];
    $_SESSION['ville'] = $data['ville'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['pays'] = $data['pays'];

echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
  }
else // Acces pas OK !
{ 
echo "<div class='alert alert-dismissable alert-danger'>
  <strong>Oh Non !</strong> Mauvais login / password. Merci de recommencer !
  <meta http-equiv='refresh' content='2 URL=../index.php'>
</div>";
}
$query->CloseCursor();

}

?>