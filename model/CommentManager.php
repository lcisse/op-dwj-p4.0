<?php
class CommentManager
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

	//connexion a la bdd
	private function dbConnect()
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=billet_simple_pour_l\'alaska;charset=utf8', 'root', '');
	    return $bdd;
	    
	}
}