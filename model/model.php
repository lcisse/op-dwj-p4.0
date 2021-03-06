<?php
function getBillets()
{ 
    $bdd = dbConnect();

    // On récupère tout le contenu de la table billets
    $req = $bdd->query('SELECT * FROM billets ORDER BY date_billet DESC');

    return $req;
}

function getBillet($billetId)
{
    $bdd = dbConnect();

    // On récupère tout le contenu de la table billets
    $req = $bdd->prepare('SELECT * FROM billets WHERE id = ?');

    $req->execute(array($billetId));

    $billet = $req->fetch();

    return $billet;

}

function getcomments($billetId)
{
    $bdd = dbConnect();

    // Récupération des commentaires
    $comments = $bdd->prepare('SELECT * FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');

    $comments->execute(array($billetId));

    return $comments;

}

//connexion a la bdd
function dbConnect()
{
    $bdd = new PDO('mysql:host=localhost;dbname=billet_simple_pour_l\'alaska;charset=utf8', 'root', '');
    return $bdd;
    
}

//Inserer commentaire
function postComment($billetId, $auteur, $commentaire)
{
    $bdd = dbConnect();
    $comments = $bdd->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($billetId, $auteur, $commentaire));

    return $affectedLines;
}


?>