<div class="image_logement">
	<img src="images/image_camping">
</div>
<div class="logement">
	<span><?php echo TXT_CAMPING;?></br></span>
	<span><?php echo utf8_encode($camping["Nom"]);?></br></span>
	<span><?php echo utf8_encode($camping["adresse"]) . ' ' . utf8_encode($camping["code_postal"]) . ' ' . utf8_encode($camping["Commune"]);?></br></span>
	<span><?php	echo substr($camping['telephone'], 0, 14);?></br></span>
	<span><?php	echo $camping["mel"];?></br></span>	
	<span><?php	echo $camping["site"];?></br>
</div>