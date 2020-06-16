<?php
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listBillets()
{
    //$req = getBillets();
    $postManager = new PostManager(); 
    $req = $postManager->getBillets();

    require('views/articles.php');
}

function billet()
{
    //$billet = getBillet($_GET['billet']);
    //$comments = getComments($_GET['billet']);
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $billet = $postManager->getBillet($_GET['billet']);
    $comments = $commentManager->getComments($_GET['billet']);

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
