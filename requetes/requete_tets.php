<?php
	include('procedure_connexion.php');
	$request_hotel = $bdd->prepare(
	   'SELECT *
		FROM hotellerie
		WHERE code_postal = ?');
	$request_hotel->execute(array(
		$_POST['code_postal']
		));
	while($hotel = $request_hotel->fetch()){
		
		<div class="image_logement">
			<img src="images/image_hotel">
		</div>
		<div class="logement">
			<span><?php echo TXT_HOTEL;?></br></span>
			<span><?php echo utf8_encode($hotel["Nom"]);?></br></span>
			<span><?php echo utf8_encode($hotel["adresse"]) . ' ' . utf8_encode($hotel["code_postal"]) . ' ' . utf8_encode($hotel["Commune"]);?></br></span>
			<span><?php	echo substr($hotel['telephone'], 0, 14);?></br></span>
			<span><?php	echo $hotel["mel"];?></br></span>	
			<span><?php	echo $hotel["site"];?></br>
		</div>

	}
	$request_hotel->closeCursor();
?>
<!-- $request_hotel = $bdd->prepare(
	   'SELECT *
		FROM hotellerie
		WHERE code_postal = ?');
	$request_hotel->execute(array(
		$_POST['code_postal']
		));
	while($hotel = $request_hotel->fetch()){
		include('view_hotel.php');
	}
	$request_hotel->closeCursor(); -->