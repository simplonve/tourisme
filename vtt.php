
<?php
	session_start();
    require('translate/language.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title><?php echo TXT_TOURISME;?></title>
    </head>
	<body>
		<header>
			<!-- <div class="m_contenu"> -->
				
			<div >
				<a href="index.php"><img class="picto_accueil" src="images/bouton_accueil.jpg"></a>
			</div>
			<!-- </div> -->
			<h1><font color="#0A0D0C"><?php echo TXT_VTT;?></font> </h1>
			<h2><font color="#0A0D0C"><?php echo TXT_VTT1;?> </font></h2>
			
			
			<img class="img_accueil" src="images/page_accueil_vtt.jpg">
		</header>
		<div class="vtt_presente_liens">
			<h2>Nos Liens pour vos sorties Cyclistes</h2>
			<h2>en Val'Eyrieux</h2>
		</div>
		<img class= "vtt" src="images/vtt2.jpg">
		<div class="liens">
			<ul>
				<li><a href="http://www.eyrieuxsport.fr" target= "blank"  >Eyrieux Sport</a></li>
				<li><a href="http://www.veloclublecheylard.com/" target= "blank"  >Velo club le Cheylard</a></li>
				<li><a href="http://www.raidvtt-ardeche.com/" target= "blank"  >Raid vtt des monts d'Ardèche</a></li>



				<li><a href="http://www.ardechepleincoeur.com/s-eclater/1744,cyclo-et-vtt.html" target= "blank" >Ardèche plein coeur</a></li>
				<li><a href="http://www.ardeche-verte.com/fr/faire/balades-et-randonnees/sur-deux-roues/itineraires-vtt/" target= blank >Ardèche verte</a></li>
				<li><a href="http://www.pmpv-ardeche.com/fr/sejours-pmpv-ardeche/les-hautes-routes-d-ardeche/18-4-jours-pour-decouvrir-les-plus-belles-routes-d-ardeche.htm" target= blank >Découvrir les plus belles routes d'Ardèche</a></li>
				<li><a href="http://www.cyclolavoulte07.fr/circuits/ardeche-plein-coeur/" target= "blank"  >circuits Ardèche plein coeur</a></li>
			</ul>
		</div>
		<div class="legende">
			<h2> <font color="#0A0D0C">Balades sur la <a href="http://www.dolce-via.com" target= "blank">Dolce Via</a> en rosalies</font></h2>
		</div>
		<div>
			<img class="velo_famille" src="images/velo_famille.jpeg">

		</div>
 
		
		<div class="footer_velo">
			<a href="hebergements" alt="hebergements"><img class="lit" src="images/lit.png"></a>
			<a href="patrimoine" alt="patrimoine"><img class="oeil" src="images/oeil.jpg"></a>
		</div>
	
 	</body>
 </html>
