<?php 

class Connection{

	static public function connect(){

		try{

			$link = new PDO("mysql:host=localhost;dbname=allon2","root", "");

			$link->exec("set names utf8");

		}catch(PDOException $e){

			die("Error: ".$e->getMessage());

		}

		return $link;
		
	}

}

