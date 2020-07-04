<?php
require('controller/controller.php');

try{ 
	if (isset($_GET['action'])) {
	    if ($_GET['action'] == 'listBillets') {
	        listBillets();
	    }
	    /*elseif ($_GET['action'] == 'accueil') {
	    	lastBilletAccueil();
	    }*/
	    elseif ($_GET['action'] == 'billet') {
	        if (isset($_GET['billet']) && $_GET['billet'] > 0) {
	            billet();
	        }
	        else {
	            throw new Exception('Aucun identifiant de billet envoyé');
	        }
	    }
	    elseif ($_GET['action'] == 'addComment') {
	        if (isset($_GET['id']) && $_GET['id'] > 0) {
	            if (!empty($_POST['auteur']) && !empty($_POST['commentaire'])) {
	                addComment($_GET['id'], $_POST['auteur'], $_POST['commentaire']);
	            }
	            else {
	                throw new Exception('Tous les champs ne sont pas remplis !');
	            }
	        }
	        else {
	            throw new Exception('Aucun identifiant de billet envoyé');
	        }
	    }
	    elseif($_GET['action'] == 'signale'){
				commentaireSignale();
		}
		elseif ($_GET['action'] == 'contact'){

			    $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

			if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['message'])){

                addMessage($nom, $prenom, $email, $message);
			}			
		}
	    
	}
	else {
	    listBillets();
	}
}
catch(Exception $e) { // En cas d'erreur
    echo 'Erreur : ' . $e->getMessage();
}
