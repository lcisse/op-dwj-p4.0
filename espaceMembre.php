<?php
session_start();
if(!$_SESSION['motDePasseUt']){
	header('location: connexion.php');
}
?>
