<?php
class Manager 
{ 
	//connexion a la bdd
	protected function dbConnect()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=billet_simple_pour_l\'alaska;charset=utf8', 'root', '');
		return $bdd;
		    
	}
}