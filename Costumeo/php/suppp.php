<?php
require('control-session.php');


$requete = $db->prepare("DELETE FROM annonce WHERE Description = :Description");
 $requete->bindValue(':Description',$_GET['desc'], PDO::PARAM_STR);
$requete->execute();
 //echo "<script type='text/javascript'>document.location.replace('paneladmin.php');</script>";



?>