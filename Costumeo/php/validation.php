<?php
require('control-session.php');

$requete = $db->prepare("UPDATE annonce SET verif = 1");
 $requete->bindValue(':verif',$_POST['verif'], PDO::PARAM_STR);
$requete->execute();
echo "<script type='text/javascript'>document.location.replace('paneladmin.php');</script>";

?>