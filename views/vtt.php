<?php
	session_start();
    require('../translate/language.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <title><?php echo TXT_TOURISME;?></title>
    </head>
	<body>
		<header>	
			<?php
            	include('layout/header.php');
            	include('layout/nav.php');
        	?>
			<div class="page_accueil_vtt">
				<h1><?php echo TXT_VTT1;?></h1>
				<h2>Des circuits VTT balisés et balades en famille !</h2>
			</div>
		</header>
		<div class="entete_vtt">
			<h2>Nos Liens pour vos sorties Cyclistes</h2>
			<h2>VTT & Route en Val'Eyrieux</h2>
		</div>
		<img class= "vtt_accueil" src="../images/vtt2.jpg">
		<div class="liens_vtt">
			<ul class="url_vtt">
				<li><a href="http://www.raidvtt-ardeche.com/" target= "blank" title="Organisation de Sorties hebdomadaires en val'Eyrieux et alentour & club UFOLEP" >Cyclo Randonneurs des Boutières</a></li>
				<li><a href="http://www.http://blog.ardechoise.com/parcours/" target= "blank" title="la mythique Ardéchoise dont la majorité des parcours emprunte Val Eyrieux"  >L'Ardechoise & ses parcours</a></li>
				<li><a href="http://www.veloclublecheylard.com/" target= "blank" title="Club cycliste FFC & ecole de cyclisme Cheylaroise"  >Velo club le Cheylard</a></li>
				<li><a href="http://www.raidvtt-ardeche.com/" target= "blank" title="Competition & actualitées VTT dans notre vallée et alentour" >Raid vtt des monts d'Ardèche</a></li>

 

				<li><a href="http://www.ardechepleincoeur.com/s-eclater/1744,cyclo-et-vtt.html" target= "blank" >Ardèche plein coeur</a></li>
				<li><a href="http://www.ardeche-verte.com/fr/faire/balades-et-randonnees/sur-deux-roues/itineraires-vtt/" target= blank title="itineraires-vtt + d'autres infos pour du tourisme vert">Ardèche verte</a></li>
				<li><a href="http://www.pmpv-ardeche.com/fr/sejours-pmpv-ardeche/les-hautes-routes-d-ardeche/18-4-jours-pour-decouvrir-les-plus-belles-routes-d-ardeche.htm" target= blank >Découvrir les plus belles routes d'Ardèche</a></li>
				<li><a href="http://www.cyclolavoulte07.fr/circuits/ardeche-plein-coeur/" target= "blank" title="Tracés route pour de belles boucles faisant escale chez nous" >circuits Ardèche plein coeur</a></li>
			</ul>
		</div>
		<div >
			<h2 class="legende_vtt_dolce_via"> Balades sur la <a href="http://www.dolce-via.com" target= "blank"  >Dolce Via</a> en rosalies</h2>
			<div class="liens_vtt">
				<ul class="url_vtt">
				
					<li><a href="http://camping-la-teyre.fr/fr/velo/" target= "blank"  title="Location de VTT, VTC, Vélo enfants, à assistance... Location de GPS avec circuits, points de visite et géocaches intégrés">Location vélos camping La Teyre St Martin de V</a></li>
					<p></p>
					<li><a href="http://www.eyrieuxsport.fr/location-velos.html" target= "blank"  title="Location de Vélo & organisation de vos sorties Dolcé Via, & autres diciplines">Location Eyrieux Sport, Les Ollières</a></li>
					<p></p>
					<li><a href="http://ardeche-fun-loisirs.e-monsite.com/" target= "blank"  title="Location de QUATTROCYCLES & organisation de sorties sur la Dolcé Via & Accrobungy">Ardeche-fun-loisirs, Les Ollières</a></li>
					<p></p>
					<li><a href="http://www.ardeche-guide.com/commerces-et-services/commerces/location-rosalie-677471" target= "blank"  title="Location de QUATTROCYCLES pour sorties sur la Dolcé Via sur le parking de Super U au Cheylard">Location Rosalie St Matin de V</a></li>
				</ul>
			</div>
		</div>
		<div>
			<img class="velo_famille" src="../images/velo_famille.jpeg">

		</div>
 
		<div>
			 <?php
	            include('layout/footer.php');
	         ?>
        </div>
 	</body>
 </html>