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
            <div class="page_accueil_parapente">
                <h1><?php echo TXT_PARAPENTE1;?></h1>
                <h2><?php echo TXT_PARAPENTE11;?></h2>
            </div>
        </header>
		<h1>Page parapente en Val'Eyrieux</h1>
        <h2 class="entete_parapente" ><?php echo TXT_PARAPENTE2;?></h2> <!--Tous les Amoureux de la nature et de libertées-->
        <h2 class="entete_parapente"><?php echo TXT_PARAPENTE21;?></h2> <!--auront droit à un magnifique spéctacle</h2>-->
        <p class="liens_parapente"><?php echo TXT_PARAPENTE3;?><p>
 	    
        <h2 class="webcam_parapente">Les Webcams des sites aménagés<img src="../images/logo_webcam_tourisme.png" alt="webcam_site vol"></h2>
        <h2 class="txt_autres_possibilite_passionnes">D'autres possibiltés de rencontrer des passionnés de vol </h2>
        <div class="autres_possibilite_passionnes">
            <a href="http://www.ecole-du-vent.com/"><img src="../images/Logo_ecole du_vent_st_clement.png" align="coordonées & logo ecole du vent" title="coordonées & logo ecole du vent"></a>
            <img src="../images/Portes_ouvertes echange_parapentistes.png" alt="exemple portes ouvertes avec intervention et rencontre parapentistes" title="exemple portes ouvertes avec intervention et rencontre parapentistes">
        <div>
             <?php
                include('layout/footer.php');
             ?>
        </div>
    </body>
 </html>
