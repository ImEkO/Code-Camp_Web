<?php
session_start();
include ("connexionbasededonne.php");


if ($_SESSION['role'] != 'administrateur')
{
	echo "<div class='alert alert-dismissable alert-danger'>
  		<strong>Oh non !</strong> Tu n\' a les droits !
  		<meta http-equiv='refresh' content='2 URL=../index.php'>
		</div>";
	exit();
}
?>