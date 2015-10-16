<?php
	session_start();
    require('translate/language.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
        <title><?php echo TXT_BAIGNADE;?></title>
    </head>
	<body>
		<div class="m_contenu">
			<div class="picto_accueil">
				<a href="index.php"><img class="picto_accueil" src="images/accueil.svg"></a>
			</div>
		</div>
		<h2>Venez vous ressourcez dans nos lacs et rivières !</h2>
		 <img class="img_lac" src="images/baignade.jpg">
		<div class="parent">
			<!-- <div class="enfant1">
				<img src="images/bain.jpeg" class="img">
			</div> -->
			<!-- <div class="enfant2"> -->
				<p class="bain">Le lac sera le lieu idéal en été pour pratiquer la baignade en famille, faire un tour de pédalo, et profiter des jeux aquatiques proposés en été. Départ de randonnée dans le village " chemin du facteur", pêche, aire de pique-nique, aire de jeux.</p>
			<!-- </div> -->
		</div>
	</body>
</html>