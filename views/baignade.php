<?php
	session_start();
    require('../translate/language.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <title><?php echo TXT_BAIGNADE;?></title>
    </head>
	<body>
		<?php
            include('layout/header.php');
            include('layout/nav.php');
        ?>
        <div class="page_accueil_baignade">
			<h1 class="entete_baignade">Venez vous ressourcez dans nos lacs et rivières !</h1>
        </div>
		<div class="parent">
			<!-- <div class="enfant1">
				<img src="images/bain.jpeg" class="img">
			</div> -->
			<!-- <div class="enfant2"> -->
			<!-- <img class="lac_st_martial_baignade" src="../images/baignade_lac_st_matial.jpeg"  alt"lac de St Martial"> -->
				
				<p class="bain">Le lac sera le lieu idéal en été pour pratiquer la baignade en famille, faire un tour de pédalo, et profiter des jeux aquatiques proposés en été. Départ de randonnée dans le village " chemin du facteur", pêche, aire de pique-nique, aire de jeux.</p>
			<!-- </div> -->
		</div>
		<div>
             <?php
                include('layout/footer.php');
             ?>
        </div>
	</body>
</html>