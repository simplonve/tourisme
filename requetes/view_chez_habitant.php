<div class="image_logement">
	<img src="images/image_chez_habitant">
</div>
<div class="logement">
	<span><?php echo TXT_CHEZ_HABITANT;?></br></span>
	<span><?php echo utf8_encode($hebergement_locatif["Nom"]);?></br></span>
	<span><?php echo utf8_encode($hebergement_locatif["adresse"]) . ' ' . utf8_encode($hebergement_locatif["code_postal"]) . ' ' . utf8_encode($hebergement_locatif["Commune"]);?></br></span>
	<span><?php	echo substr($hebergement_locatif['telephone'], 0, 14);?></br></span>
	<span><?php	echo $hebergement_locatif["mel"];?></br></span>	
	<span><?php	echo $hebergement_locatif["site"];?></br>
</div>