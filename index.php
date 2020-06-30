<?php
require('controller/controller.php');

try{ 
	if (isset($_GET['action'])) {
	    if ($_GET['action'] == 'listBillets') {
	        listBillets();
	    }
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
			}else{
				throw new Exception('Commentaire non signalé...!');
			}
	    //}
	}
	else {
	    listBillets();
	}
}
catch(Exception $e) { // En cas d'erreur
    echo 'Erreur : ' . $e->getMessage();
}
