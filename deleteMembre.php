<?php/*
session_start();
if(!$_SESSION['motDePasse']){
	header('location: connexion.php');
}

$bdd = new PDO('mysql:host=localhost;dbname=billet_simple_pour_l\'alaska;charset=utf8', 'root', '');

if(isset($_GET['id']) AND !empty($_GET['id'])){
   
	$deleteMembre = $bdd->prepare('DELETE FROM utilisateurs WHERE id = ?');

    $deleteMembre->execute(array($_GET['id']));

    header('location: gererMembres.php');

}else{
	echo "l'utilisateur est introuvable...";
}*/
?>