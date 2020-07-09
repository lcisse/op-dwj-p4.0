<?php
session_start();
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/ContactManager.php');
require_once('model/ConnexionManager.php');
require_once('model/User.php');

function listBillets()
{
    //$req = getBillets();
    $postManager = new PostManager(); 
    $req = $postManager->getBillets();

    require('views/articles.php');
}

function lastBilletAccueil()
{
    //$req = getBillets();
    $postManager = new PostManager(); 
    $derniereArticle = $postManager->lastBillet(); 

    require('accueil.php');
}

function billet()
{
    //$billet = getBillet($_GET['billet']);
    //$comments = getComments($_GET['billet']);
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $billet = $postManager->getBillet($_GET['billet']);
    $comments = $commentManager->getComments($_GET['billet']);

    //$commentaireSignale = $commentManager->signaleCommentaire($_GET['idCom']);

    require('views/articleCommentaire.php');
}

//ajout commentaire
function addComment($billetId, $auteur, $commentaire)
{
    //$affectedLines = postComment($billetId, $auteur, $commentaire);
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
    //require('views/articleCommentaire.php');
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
        header('Location: contact.php?');
    }

}

function listMessages()
{
    $contactManager = new  ContactManager();

    $selectAllMessages = $contactManager ->getMessage();

    require('message.php');
}

function checkUser($pseudo, $mdp)
{
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
        header('location: admin.php');
    }elseif ($connect -> rowCount() > 0 AND $dataConnect['roles'] == 'visiteur') {
        $_SESSION['motDePasseUt'] = $motDePasseUt;
        $_SESSION['inscription'] = " ";
        $_SESSION['deconnecter'] = "Se deconnecter";
        $_SESSION['deconnection'] = "deconnexion";
        header('location: index.php?action=accueil');
    }else{
        //echo "Pseudo ou mot de passe incorrect... !";
        throw new Exception('Pseudo ou mot de passe incorrect... !');
    }

   require('connexion.php');
}

function addBillet($titre, $contenu)
{
   $postManager = new PostManager();
   
   $addArticle =  $postManager->postBillets($titre, $contenu);

   require('ajoutArticle.php');
}

function listAdminComments()
{
  $commentManager = new CommentManager();
  
  $selectCommentaires =  $commentManager->adminGetcomments();

   require('commentaires.php');
}

function listCommentaireSignale()
{
   $commentManager = new CommentManager();
   
   $selectCommentaireSignale = $commentManager->getCommentaireSignale();

   require('commentaireSignale.php');

}

function listMembres()
{
    $user = new User();

    $selectAllMembres = $user->getmembres();

    require('gererMembres.php');
}

function infoMembre($pseudoModifie, $idMembre)
{
    $user = new User();

    $infoMembres = $user->getInfoMembre($idMembre);

    if(isset($_POST['modifierMembre'])){
        $updatePseudoMembre = $user->modifieMembre($pseudoModifie, $idMembre);
                header('location: gererMembres.php');

    }

    require('modifierMembre.php');
}

/*function membreUpdate($pseudoModifie, $idMembre)
{
    $user = new User();

    $updatePseudoMembre = $user->modifieMembre($pseudoModifie, $idMembre);

    require('modifierMembre.php');
}*/
