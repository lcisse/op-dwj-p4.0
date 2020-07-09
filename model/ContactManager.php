<?php
require_once("model/Manager.php");

class ContactManager extends Manager{

	public function postMessage($nom, $prenom, $email, $message){

		$bdd = $this->dbConnect();

		$insererMessage = $bdd->prepare('INSERT INTO contacts(nom, prenom, mail, messages, date_messages) VALUES(?, ?, ?, ?, NOW())');
        $messageInsere = $insererMessage->execute(array($nom, $prenom, $email, $message));

        return $messageInsere; 

	}

	public function getMessage(){

		$bdd = $this->dbConnect();

		$selectAllMessages = $bdd->query('SELECT * FROM contacts ORDER BY date_messages DESC');

		return $selectAllMessages;
		
	}
}

?>