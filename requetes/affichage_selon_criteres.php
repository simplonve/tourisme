<?php
	$request_hotel = $bdd->prepare(
	   'SELECT *
		FROM hotellerie
		WHERE code_postal = ?');
	$request_hotel->execute(array(
		$_POST['code_postal']
		));
	while($hotel = $request_hotel->fetch()){
		include('requetes/view_hotel.php');
	}
	$request_hotel->closeCursor();

	$request_camping = $bdd->prepare(
	   'SELECT *
		FROM hotellerie_plein_air
		WHERE code_postal = ?');
	$request_camping->execute(array(
		$_POST['code_postal']
		));
	while($camping = $request_camping->fetch()){
		include('requetes/view_camping.php'); 	
	}
	$request_camping->closeCursor();

	$request_hebergement_locatif = $bdd->prepare(
	   'SELECT *
		FROM hebergement_locatifs
		WHERE code_postal = ?');
	$request_hebergement_locatif->execute(array(
		$_POST['code_postal']
		));
	while($hebergement_locatif = $request_hebergement_locatif->fetch()){
		include('requetes/view_chez_habitant.php'); 
	}
	$request_hebergement_locatif->closeCursor();

	$request_hebergement_collectif = $bdd->prepare(
	   'SELECT *
		FROM hebergements_collectifs
		WHERE code_postal = ?');
	$request_hebergement_collectif->execute(array(
		$_POST['code_postal']
		));
	while($hebergement_collectif = $request_hebergement_collectif->fetch()){
			include('requetes/view_gites.php');
	}
	$request_hebergement_collectif->closeCursor();
?>