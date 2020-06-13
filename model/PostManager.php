<?php
class PostManager
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

	//connexion a la bdd
	private function dbConnect()
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=billet_simple_pour_l\'alaska;charset=utf8', 'root', '');
	    return $bdd;
	    
	}
}