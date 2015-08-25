<div class="image_logement">
	<img src="images/image_hotel">
</div>
<div class="image_logement">
	<img src="image_gites">
</div>
<div class="logement">
	<span><?php echo TXT_GITES;?></br></span>
	<span><?php echo utf8_encode($hebergement_collectif["Nom"]);?></br></span>
	<span><?php echo utf8_encode($hebergement_collectif["adresse"]) . ' ' . utf8_encode($hebergement_collectif["code_postal"]) . ' ' . utf8_encode($hebergement_collectif["Commune"]);?></br></span>
	<span><?php	echo substr($hebergement_collectif['telephone'], 0, 14);?></br></span>
	<span><?php	echo $hebergement_collectif["mel"];?></br></span>	
	<span><?php	echo $hebergement_collectif["site"];?></br>
</div>