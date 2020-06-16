<?php
session_start();
if(!$_SESSION['motDePasse']){
	header('location: connexion.php');
}
?>