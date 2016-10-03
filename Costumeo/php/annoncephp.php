<?php
session_start();

include ("connexionbasededonne.php");
$i = 0;
$Nom = $_SESSION['Nom'];
$Prenom = $_SESSION['Prenom'];
$id = $_SESSION['ID'];

if (!empty($_FILES['image']['size']))
{

$maxsize = 100024;
$maxwidth = 2000;
$maxheight = 2000; 
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp' ); //Liste des extensions valides

if ($_FILES['image']['error'] > 0)
{
echo "Erreur lors du transfert de l'image : ";
}

if ($_FILES['image']['size'] > $maxsize)
{
$i++;
echo "Le fichier est trop gros : (<strong>".$_FILES['image']['size']." Octets</strong> contre <strong>".$maxsize." Octets</strong>)";
}

$image_sizes = getimagesize($_FILES['image']['tmp_name']);

if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight)
{
$i++;
echo "Image trop large ou trop longue :
(<strong>".$image_sizes[0]."x".$image_sizes[1]."</strong> contre <strong>".$maxwidth."x".$maxheight."</strong>)";
}

$extension_upload = strtolower(substr( strrchr($_FILES['image']['name'], '.') ,1));

if (!in_array($extension_upload,$extensions_valides) )
{
$i++;
echo "Extension de l'image incorrecte";
}

}

if ($i==0)
{

$nomimage=(!empty($_FILES['image']['size']))?move_image($_FILES['image']):'';

			$req = $db->prepare("INSERT INTO annonce (Nom , Prenom, Libelle, Description, Prix_vente, Nombres_produit, verif, image, ID_utilisateur, type) 
								VALUES (:Nom , :Prenom , :Libelle, :Description, :Prix_vente, :Nombres_produit, 0, :image, :id, :type)");
			$req->bindValue(':Nom', $_SESSION["Nom"], PDO::PARAM_STR);
			$req->bindValue(':Prenom', $Prenom, PDO::PARAM_STR);
			$req->bindValue(':Libelle', $_POST['Libelle'], PDO::PARAM_STR);
			$req->bindValue(':Description', $_POST['Description'], PDO::PARAM_STR);
			$req->bindValue(':Prix_vente', $_POST['Prix_vente'], PDO::PARAM_INT);
			$req->bindValue(':Nombres_produit', $_POST['Nombres_produit'], PDO::PARAM_INT);
			$req->bindValue(':image', $nomimage, PDO::PARAM_STR);
			$req->bindValue(':id', $_SESSION['ID'], PDO::PARAM_INT);
			$req->bindValue(':type', $_POST['liste'], PDO::PARAM_STR);
			$req->execute();

	$_SESSION['image'] = $nomimage;
	$_SESSION['Prix_vente'] = $_POST['Prix_vente'];
	$_SESSION['Libelle'] = $_POST['Libelle'];
    $_SESSION['Description'] = $_POST['Description'];
    $_SESSION['Nombres_produit'] = $_POST['Nombres_produit'];
    $_SESSION['ID_utilisateur'] = $_SESSION['ID'];
    $_SESSION['type'] = $_POST['liste'];
			 echo "<script type='text/javascript'>document.location.replace('page_compte.php');</script>";
		}

else
{
echo 'Echec de l\'upload !';
}
?>

<?php
function move_image($image)
{
$extension_upload = strtolower(substr( strrchr($image['name'], '.') ,1));
$name = time();
$nomavatar = str_replace(' ','',$name).".".$extension_upload;
$name = "../images/".str_replace(' ','',$name).".".$extension_upload;
move_uploaded_file($image['tmp_name'],$name);
return $nomavatar;
}
?> 