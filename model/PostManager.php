<?php
require_once("model/Manager.php");

class PostManager extends Manager
{
	public function getBillets()
	{ 
	    $bdd = $this->dbConnect();

	    // On récupère tout le contenu de la table billets
	    $req = $bdd->query('SELECT * FROM billets ORDER BY date_billet DESC');

	    return $req;
	}

	public function getBillet($billetId)
	{
	    $bdd = $this->dbConnect();

	    // On récupère tout le contenu de la table billets
	    $req = $bdd->prepare('SELECT * FROM billets WHERE id = ?');

	    $req->execute(array($billetId));

	    $billet = $req->fetch();

	    return $billet;

	}

	/*public function lastBillet()
	{ 
	    $bdd = $this->dbConnect();

	    $article = $bdd->query('SELECT * FROM billets ORDER BY date_billet DESC LIMIT 1');

	    $derniereArticle = $article->fetch();

	    return $derniereArticle;
	}*/
}