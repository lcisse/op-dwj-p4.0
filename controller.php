<?php

require('model/model.php');

function listBillets()
{
    $req = getBillets();

    require('views/affichageArticles.php');
}

function billet()
{
    $billet = getBillet($_GET['billet']);
    $comments = getComments($_GET['billet']);

    require('views/article-commentaire.php');
}

//ajout commentaire
function addComment($billetId, $auteur, $commentaire)
{
    $affectedLines = postComment($billetId, $auteur, $commentaire);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=billet&id=' . $billetId);
    }
}
