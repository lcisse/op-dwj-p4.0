<?php
require_once("model/Manager.php");

class CommentManager extends Manager
{
	public function getcomments($billetId)
	{
	    $bdd = $this->dbConnect();

	    // Récupération des commentaires
	    $comments = $bdd->prepare('SELECT * FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');

	    $comments->execute(array($billetId));

	    return $comments;

	}

	//Inserer commentaire
	public function postComment($billetId, $auteur, $commentaire)
	{
	    $bdd = $this->dbConnect();
	    $comments = $bdd->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES(?, ?, ?, NOW())');
	    $affectedLines = $comments->execute(array($billetId, $auteur, $commentaire));

	    return $affectedLines;
	}

	public function signaleCommentaire($idCommentaire)
	{
		$bdd = $this->dbConnect();
		$commentaireSignale = $bdd->prepare('UPDATE commentaires SET commentaires_signales = :signaler where id = :idCommentaire');
                $commentaireSignale->execute(array('signaler' => 'signaler', 'idCommentaire' => $idCommentaire));
        return $commentaireSignale;
	}

}