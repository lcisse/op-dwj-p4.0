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

	public function lastBillet()
	{ 
	    $bdd = $this->dbConnect();

	    $article = $bdd->query('SELECT * FROM billets ORDER BY date_billet DESC LIMIT 1');

	    $derniereArticle = $article->fetch();

	    return $derniereArticle;
	}

	public function postBillets($titre, $contenu)
	{ 
	    $bdd = $this->dbConnect();

	    $addArticle = $bdd->prepare('INSERT INTO billets(titre, contenu, date_billet) VALUES(?,?, NOW())');
        $addArticle->execute(array($titre, $contenu));
        return  $addArticle;
	}

	public function getArticleAdim()
	{
		$bdd = $this->dbConnect();

		$selectAllArticles = $bdd->query('SELECT * FROM billets ORDER BY date_billet DESC');

		return $selectAllArticles; 
	}

	public function getOneArticleAdmin($idArticle)
	{
		$bdd = $this->dbConnect();

		$selectInfoArticle = $bdd->prepare('SELECT * FROM billets WHERE id = ?');

		$selectInfoArticle->execute(array($idArticle));

		$infoArticles = $selectInfoArticle->fetch();

		return $infoArticles;
	}

	public function getInfoArticle($idArticle)
	{
		$bdd = $this->dbConnect();

		$selectInfoArticle = $bdd->prepare('SELECT * FROM billets WHERE id = ?');

        $selectInfoArticle->execute(array($idArticle));

        $infoArticles = $selectInfoArticle->fetch();

        return $infoArticles;
	}

	public function modifierTitreArticle($titreModifie, $idArticle)
	{
		$bdd = $this->dbConnect();

		$updateTitreArticle = $bdd->prepare('UPDATE billets SET  titre = ? WHERE id = ?');

        $updateTitreArticle->execute(array($titreModifie, $idArticle));

        return $updateTitreArticle;
        
	}

	public function modifierContenuArticle($contenuModifie, $idArticle)
	{
		$bdd = $this->dbConnect();

		$updateContenuArticle = $bdd->prepare('UPDATE billets SET  contenu = ? WHERE id = ?');

        $updateContenuArticle->execute(array($contenuModifie, $idArticle));

        return $updateContenuArticle;
	}

	public function deleteArticle($idArticle)
	{
		$bdd = $this->dbConnect();

		$deleteArticle = $bdd->prepare('DELETE FROM billets WHERE id = ?');

    	$deleteArticle->execute(array($idArticle));

    	return $deleteArticle;
	}
}