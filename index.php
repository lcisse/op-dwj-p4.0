<?php
require('controller/controller.php');

try{ 
	if (isset($_GET['action'])) {
	    if ($_GET['action'] == 'listBillets') {
	        listBillets();
	    }
	    elseif ($_GET['action'] == 'accueil') {
	    	lastBilletAccueil();
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
		elseif ($_GET['action'] == 'connexion') {

			if(isset($_POST['okConnexion'])) {
        
	            if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){

	            	checkUser();

	                $pseudo = htmlspecialchars($_POST['pseudo']);
	                $mdp = sha1($_POST['password']);

	                $connect->execute(array($pseudo, $mdp));

	                $dataConnect = $connect->fetch();
	                $motDePasse = 'mdp';
	                $motDePasseUt = 'mdpUt';
	                //$_SESSION['admin'] = '';
		                if($connect -> rowCount() > 0 AND $dataConnect['roles'] == 'administrateur'){
		                    $_SESSION['motDePasse'] = $motDePasse;
		                    $_SESSION['motDePasseUt'] = $motDePasseUt;
		                    $_SESSION['admin'] = 'Admin';
		                    $_SESSION['inscription'] = " ";
		                    $_SESSION['deconnecter'] = "Se deconnecter";
		                    $_SESSION['deconnection'] = "deconnexion";
		                    header('location: admin.php');
		                }elseif ($connect -> rowCount() > 0 AND $dataConnect['roles'] == 'visiteur') {
		                   $_SESSION['motDePasseUt'] = $motDePasseUt;
		                   $_SESSION['inscription'] = " ";
		                   $_SESSION['deconnecter'] = "Se deconnecter";
		                   $_SESSION['deconnection'] = "deconnexion";
		                    header('location: accueil.php');
		                }else{
		                    //echo "Pseudo ou mot de passe incorrect... !";
		                    throw new Exception('Pseudo ou mot de passe incorrect... !');
		                }
	            }else{
	                //echo "Veillez compléter tous les champs... !";
	                throw new Exception('Veillez compléter tous les champs... !');
	            }
        }
			
		}


		/*elseif ($_GET['action'] == 'message') {
	        listMessages();
	    }*/
	    
	}
	else {
	    listBillets();
	}
}
catch(Exception $e) { // En cas d'erreur
    echo 'Erreur : ' . $e->getMessage();
}
