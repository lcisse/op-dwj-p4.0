<?php
require_once("model/Manager.php");

class ConnexionManager extends Manager{

	public function connectUser(){

		$bdd = $this->dbConnect();

		$connect = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = ? and mot_de_passe = ?');

		return $connect;
	}

}