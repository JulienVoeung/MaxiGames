<?php

	class Connexion {

		protected static $bdd;

	   	public static function init_connexion(){
	   		$login = "root";
	   		$dbname = "maxigames";
	   		$password= "";
	   		$dns="localhost";
			self::$bdd = new PDO("mysql:host=$dns;dbname=$dbname;charset=utf8", $login, $password);
	   	}
	}
?>
