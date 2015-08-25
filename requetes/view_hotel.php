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