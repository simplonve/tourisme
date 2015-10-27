<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=tourisme', 'root', 'oim', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	};
?>