
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
			<h2>en Val'Eyrieux</h2>
		</div>
		<img class= "vtt_accueil" src="../images/vtt2.jpg">
		<div class="liens">
			<ul>
				<li><a href="http://www.eyrieuxsport.fr" target= "blank"  title="Eyrieux Sport">Eyrieux Sport</a></li>
				<li><a href="http://www.veloclublecheylard.com/" target= "blank"  >Velo club le Cheylard</a></li>
				<li><a href="http://www.raidvtt-ardeche.com/" target= "blank"  >Raid vtt des monts d'Ardèche</a></li>



				<li><a href="http://www.ardechepleincoeur.com/s-eclater/1744,cyclo-et-vtt.html" target= "blank" >Ardèche plein coeur</a></li>
				<li><a href="http://www.ardeche-verte.com/fr/faire/balades-et-randonnees/sur-deux-roues/itineraires-vtt/" target= blank >Ardèche verte</a></li>
				<li><a href="http://www.pmpv-ardeche.com/fr/sejours-pmpv-ardeche/les-hautes-routes-d-ardeche/18-4-jours-pour-decouvrir-les-plus-belles-routes-d-ardeche.htm" target= blank >Découvrir les plus belles routes d'Ardèche</a></li>
				<li><a href="http://www.cyclolavoulte07.fr/circuits/ardeche-plein-coeur/" target= "blank"  >circuits Ardèche plein coeur</a></li>
			</ul>
		</div>
		<div class="legende">
			<h2> Balades sur la <a href="http://www.dolce-via.com" target= "blank"  >Dolce Via</a> en rosalies</h2>
		</div>
		<div>
			<img class="velo_famille" src="../images/velo_famille.jpeg">

		</div>
 
		<?php
            // include('layout/footer.php');
        ?>
 	</body>
 </html>