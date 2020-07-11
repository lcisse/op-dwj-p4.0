<?php
require_once("model/Manager.php");

class User extends Manager
{
	public function getmembres()
	{
		$bdd = $this->dbConnect();

		$selectAllMembres = $bdd->query('SELECT * FROM utilisateurs');

		return $selectAllMembres;
	}

	public function getInfoMembre($idMembre)
	{
		$bdd = $this->dbConnect();

		$selectInfoMembre = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');

        $selectInfoMembre->execute(array($idMembre));

        $infoMembres = $selectInfoMembre->fetch();

        return $infoMembres;
	}

	public function modifieMembre($pseudoModifie, $idMembre)
	{
		$bdd = $this->dbConnect();

		$updatePseudoMembre = $bdd->prepare('UPDATE utilisateurs SET  pseudo = ? WHERE id = ?');

        $updatePseudoMembre->execute(array($pseudoModifie, $idMembre));

        return $updatePseudoMembre;

	}

	public function deleteMembe($idMembre)
	{
		$bdd = $this->dbConnect();

		$deleteMembre = $bdd->prepare('DELETE FROM utilisateurs WHERE id = ?');

    	$deleteMembre->execute(array($idMembre));

    	return $deleteMembre;
	}

	public function addUser($pseudo, $email, $mdp)
	{
		$bdd = $this->dbConnect();

		$insererMembre = $bdd->prepare('INSERT INTO utilisateurs(pseudo, mail, mot_de_passe, roles, date_inscription) VALUES(?, ?, ?, ?, NOW())');

        $insererMembre->execute(array($pseudo, $email, $mdp, ('visiteur')));

        return $insererMembre;
	}
}