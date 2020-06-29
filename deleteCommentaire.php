<?php
session_start();
if(!$_SESSION['motDePasse']){
	header('location: connexion.php');
}

$bdd = new PDO('mysql:host=localhost;dbname=billet_simple_pour_l\'alaska;charset=utf8', 'root', '');

if(isset($_GET['id']) AND !empty($_GET['id'])){
    echo "ca va";
	$deleteCommentaire = $bdd->prepare('DELETE FROM commentaires WHERE id = ?');

    $deleteCommentaire->execute(array($_GET['id']));

    header('location: commentaireSignale.php');

}else{
	echo "commentaire introuvable...";
}
?>