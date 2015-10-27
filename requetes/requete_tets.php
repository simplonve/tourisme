<?php
$request_hotel = $bdd->prepare(
	   'SELECT *
		FROM hotellerie
		WHERE code_postal = ?');
	$request_hotel->execute(array(
		$_POST['code_postal']
		));
	while($hotel = $request_hotel->fetch()){
		include('view_hotel.php');
	}
	$request_hotel->closeCursor();
?>