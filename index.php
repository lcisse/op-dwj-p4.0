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
				commentaireSignale($_GET['idCom']);
		}

		elseif ($_GET['action'] == 'commentaireSignale') {
	        listCommentaireSignale();
	    }

		elseif ($_GET['action'] == 'contact'){

			    $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

            if(isset($_POST['okmessage'])){ 
				if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['message'])){

	                addMessage($nom, $prenom, $email, $message);
				}
			}			
		}
		elseif ($_GET['action'] == 'connexion') {
				
			if(isset($_POST['okConnexion'])) {
        		
	            if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){

	                $pseudo = htmlspecialchars($_POST['pseudo']);
	                $mdp = sha1($_POST['password']);
	                
		            checkUser($pseudo, $mdp);
	            }else{
	                throw new Exception('Veillez compléter tous les champs... !');
	            }
	        }else{
	        	require('views/frontend/connexion.php');
	        }			
		}

		elseif ($_GET['action'] == 'message') {
	        listMessages();
	    }

	    elseif ($_GET['action'] == 'postArticle') {
	        if(isset($_POST['publication'])){
	            if(!empty($_POST['titre']) AND !empty($_POST['contenu'])){
	                $titre = htmlspecialchars($_POST['titre']);
	                $contenu = htmlspecialchars($_POST['contenu']);

					addBillet($titre, $contenu);
					echo "L'article a bien été publié...";               
	            }else{
	                throw new Exception('Veullez complétez tous les champs...');
	            }
        	}else{
        		require('views/backend/ajoutArticle.php');
        	}
	    }

	    elseif ($_GET['action'] == 'commentaires') {
	        listAdminComments();
	    }

	    elseif ($_GET['action'] == 'membres') {
	        listMembres();
	    }

	    elseif ($_GET['action'] == 'membreUpdate') {
	        if(isset($_GET['id']) AND !empty($_GET['id'])){
	            if(isset($_POST['modifierMembre'])){
	                $pseudoModifie = htmlspecialchars($_POST['pseudo']);

	                membreUpdate($pseudoModifie, $_GET['id']);

	            }else{
	            	infoMembre($_GET['id']);
		        }
	        }else{
	            throw new Exception("L'utilisateur est introuvable...");
	        }
	    }

	    elseif ($_GET['action'] == 'deleteCommentaire') {	        
	        if(isset($_GET['id']) AND !empty($_GET['id'])){
   			
   				commentaireSupprime($_GET['id'], $_GET['commentaire']);			

			}else{
				throw new Exception("commentaire introuvable...");
			}
	    }

	    elseif ($_GET['action'] == 'deleteMembre') {
	        if(isset($_GET['id']) AND !empty($_GET['id'])){
   
	        	deleteUser($_GET['id']);

			}else{
				throw new Exception("l'utilisateur est introuvable...");
			}
	    }

	    elseif ($_GET['action'] == 'gererArticle') {
	        listArticleAdmin();
	    }

	    elseif ($_GET['action'] == 'articleAdmin') {	        
	        if(isset($_GET['id']) AND !empty($_GET['id'])){
				oneArticle($_GET['id']);
			}else{
				throw new Exception("Article introuvable...");
			}
	    }

	    elseif ($_GET['action'] == 'modifierArticle') {
	        if(isset($_GET['id']) AND !empty($_GET['id'])){

	        	if(isset($_POST['pubModification'])){

	        		$titreModifie = htmlspecialchars($_POST['titre']);

                	$contenuModifie =htmlspecialchars($_POST['contenu']);

                	UpdateArticle($titreModifie, $contenuModifie, $_GET['id']);

	        	}else{
	        		infoArticle($_GET['id']);
	        	}
	        }else{
            	throw new Exception("Article introuvable...");
        	}
	    }

	    elseif ($_GET['action'] == 'deleteArticle') {
	        if(isset($_GET['id']) AND !empty($_GET['id'])){
    			
    			deleteBillet($_GET['id']);

			}else{
				throw new Exception("Article introuvable...");
			}
	    }

	    elseif ($_GET['action'] == 'inscription') {
	        if (isset($_POST['validez'])) {
                if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['conf-password'])){

                    if ($_POST['password'] == $_POST['conf-password']) {

                        $pseudo = htmlspecialchars($_POST['pseudo']);
                        $email = htmlspecialchars($_POST['email']);
                        $mdp = sha1($_POST['password']);
                        $log = '';
                        addMembre($pseudo, $email, $mdp);

                    }else{
                        throw new Exception("Les mots de passe ne correspondent pas... !");
                    }
                }else{                    
                    throw new Exception("Veillez remplir tous les champs... !");
                }
             }else{
             	require('views/frontend/inscription.php');
             }
	    }

	    elseif ($_GET['action'] == 'about') {
	        require('views/frontend/about.php');
	    }

	    elseif ($_GET['action'] == 'pageContact') {
	        require('views/frontend/contact.php');
	    }

	    elseif ($_GET['action'] == 'gererCommentaires') {
	        require('views/backend/gererCommentaires.php');
	    }

	    elseif ($_GET['action'] == 'admin') {
	        require('views/backend/admin.php');
	    }
	    
	}
	else {
	   
	    lastBilletAccueil();
	}
}
catch(Exception $e) { // En cas d'erreur
    echo 'Erreur : ' . $e->getMessage();
}
