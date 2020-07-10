<?php/*
session_start();
if(!$_SESSION['motDePasse']){
	header('location: connexion.php');
}

$bdd = new PDO('mysql:host=localhost;dbname=billet_simple_pour_l\'alaska;charset=utf8', 'root', '');

if(isset($_GET['id']) AND !empty($_GET['id'])){
    
	$deleteCommentaire = $bdd->prepare('DELETE FROM commentaires WHERE id = ?');

    $deleteCommentaire->execute(array($_GET['id']));

    if (isset($_GET['commentaire'])){
    	header('location: commentaires.php');
    }else{
    	header('location: commentaireSignale.php');
    }

}else{
	echo "commentaire introuvable...";
}*/
?>