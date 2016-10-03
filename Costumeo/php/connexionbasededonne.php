<?php 
//$connect = mysql_connect('localhost', 'Test', '123')
//or die("Identifiant ou mdp incorrect");
 //mysql_select_db("Costumeo", $connect) or die ("Base de donÃ©e inexistante");

    try
  {
  
   $db = new PDO ('mysql:host=localhost;dbname=Costumeo', 'Test', '123');
   $db->exec("SET CHARACTER SET utf8");
  }
  catch (Exception $e)
{
    
        die('Erreur : ' . $e->getMessage());
}
?> 