<?php
require('control-session.php');

$requete = $db->prepare("UPDATE Utilisateurs SET role = :role WHERE adresse_email = :adresse_email");
 $requete->bindValue(':role',$_POST['role'], PDO::PARAM_STR);
 $requete->bindValue(':adresse_email',$_GET['mail'], PDO::PARAM_STR);
$requete->execute();
echo "<script type='text/javascript'>document.location.replace('paneladmin.php');</script>";



?>