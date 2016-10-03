<?php
require('control-session.php');


$requete = $db->prepare("DELETE FROM Utilisateurs WHERE adresse_email = :adresse_email");
 $requete->bindValue(':adresse_email',$_POST['adresse_email'], PDO::PARAM_STR);
$requete->execute();
echo "<script type='text/javascript'>document.location.replace('paneladmin.php');</script>";



?>