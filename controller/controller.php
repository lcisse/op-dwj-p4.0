<?php
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/ContactManager.php');
require_once('model/ConnexionManager.php');
require_once('model/User.php');

function listBillets()
{
    $postManager = new PostManager(); 
    $req = $postManager->getBillets();

    require('views/frontend/articles.php');
}

function lastBilletAccueil()
{
    $postManager = new PostManager(); 
    $derniereArticle = $postManager->lastBillet(); 

    require('views/frontend/accueil.php');
}

function billet()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $billet = $postManager->getBillet($_GET['billet']);
    $comments = $commentManager->getComments($_GET['billet']);

    require('views/frontend/articleCommentaire.php');
}

//ajout commentaire
function addComment($billetId, $auteur, $commentaire)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($billetId, $auteur, $commentaire);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=billet&id=' . $billetId . '&billet='. $billetId);
    }
}

function commentaireSignale()
{
    $commentManager = new CommentManager();
    $commentaireSignale = $commentManager->signaleCommentaire($_GET['idCom']);

    header('Location: index.php?action=billet&billet='.$_GET['billet']);
}

function addMessage($nom, $prenom, $email, $message)
{
    $contactManager = new  ContactManager();

    $messageInsere = $contactManager ->postMessage($nom, $prenom, $email, $message);

    if ($messageInsere === false) {
        throw new Exception('Impossible d\'ajouter le message !');
    }
    else {
        header('Location: index.php?action=pageContact');
    }

}

function listMessages()
{
    $contactManager = new  ContactManager();

    $selectAllMessages = $contactManager ->getMessage();

    require('views/backend/message.php');
}

function checkUser($pseudo, $mdp)
{
   session_start();
   $connexionManager = new ConnexionManager();
   
   $connect =  $connexionManager ->connectUser($pseudo, $mdp);

   $dataConnect = $connect->fetch();

   $motDePasse = 'mdp';
   $motDePasseUt = 'mdpUt';
                   
    if($connect -> rowCount() > 0 AND $dataConnect['roles'] == 'administrateur'){
        $_SESSION['motDePasse'] = $motDePasse;
        $_SESSION['motDePasseUt'] = $motDePasseUt;
        $_SESSION['admin'] = 'Admin';
        $_SESSION['inscription'] = " ";
        $_SESSION['deconnecter'] = "Se deconnecter";
        $_SESSION['deconnection'] = "deconnexion";
        header('location: index.php?action=admin');
    }elseif ($connect -> rowCount() > 0 AND $dataConnect['roles'] == 'visiteur') {
        $_SESSION['motDePasseUt'] = $motDePasseUt;
        $_SESSION['inscription'] = " ";
        $_SESSION['deconnecter'] = "Se deconnecter";
        $_SESSION['deconnection'] = "deconnexion";
        header('location: index.php?action=accueil');
    }else{
        throw new Exception('Pseudo ou mot de passe incorrect... !');
    }

   require('connexion.php');
}

function addBillet($titre, $contenu)
{
   $postManager = new PostManager();
   
   $addArticle =  $postManager->postBillets($titre, $contenu);

   require('views/backend/ajoutArticle.php');
}

function listAdminComments()
{
  $commentManager = new CommentManager();
  
  $selectCommentaires =  $commentManager->adminGetcomments();

  require('views/backend/commentaires.php');
}

function listCommentaireSignale()
{
   $commentManager = new CommentManager();
   
   $selectCommentaireSignale = $commentManager->getCommentaireSignale();

   require('views/backend/commentaireSignale.php');

}

function listMembres()
{
    $user = new User();

    $selectAllMembres = $user->getmembres();

    require('views/backend/gererMembres.php');
}

function infoMembre($idMembre)
{
    $user = new User();

    $infoMembres = $user->getInfoMembre($idMembre);

    require('views/backend/modifierMembre.php');
}

function membreUpdate($pseudoModifie, $idMembre)
{
    $user = new User();

    $updatePseudoMembre = $user->modifieMembre($pseudoModifie, $idMembre);

    header('location: index.php?action=membres');
}

function commentaireSupprime($idCommentaire, $commentaire)
{
    $commentManager = new CommentManager();

    $deleteCommentaire = $commentManager->deletecommentaire($idCommentaire); 

    if (isset($commentaire)){
        header('location: index.php?action=commentaires');
    }else{
        header('location: index.php?action=commentaireSignale');
    }
}

function deleteUser($idMembre)
{
    $user = new User();

    $deleteMembre = $user->deleteMembe($idMembre);

    header('location: index.php?action=membres');
}

function listArticleAdmin()
{
    $postManager = new PostManager();

    $selectAllArticles = $postManager->getArticleAdim();

    require('views/backend/gererArticles.php');
}

function oneArticle($idArticle)
{
    $postManager = new PostManager();

    $infoArticles = $postManager->getOneArticleAdmin($idArticle);

    require('views/backend/contenuArticle.php');
}

function infoArticle($idArticle)
{
    $postManager = new PostManager();

    $infoArticles = $postManager->getInfoArticle($idArticle);

    require('views/backend/modifierArticle.php');
}

function UpdateArticle($titreModifie, $contenuModifie, $idArticle)
{
    $postManager = new PostManager();

    $updateTitreArticle = $postManager->modifierTitreArticle($titreModifie, $idArticle);

    $updateContenuArticle = $postManager->modifierContenuArticle($contenuModifie, $idArticle);

    header('location: index.php?action=gererArticle');
}

function deleteBillet($idArticle)
{
    $postManager = new PostManager();

    $deleteArticle = $postManager->deleteArticle($idArticle);

    header('location: index.php?action=gererArticle');
}

function addMembre($pseudo, $email, $mdp)
{
    $user = new User();

    $insererMembre = $user->addUser($pseudo, $email, $mdp);

    require('views/frontend/inscription.php');
}
