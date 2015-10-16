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
                include ('../layout/header.php');
                // include ('../layout/nav.php');
            ?>


            <h1><?php echo TXT_PARAPENTE1;?></h1>
            <h2><?php echo TXT_PARAPENTE11;?></h2>
        </header>
		<h1>Page parapente en Val'Eyrieux</h1>
        <h2 class="entete_parapente" ><?php echo TXT_PARAPENTE2;?></h2> <!--Tous les Amoureux de la nature et de libertées-->
        <h2 class="entete_parapente"><?php echo TXT_PARAPENTE21;?></h2> <!--auront droit à un magnifique spéctacle</h2>-->
        <img class="img_accueil" src="../images/accueil_parapente.jpg">
        <p class="liens_parapente"><?php echo TXT_PARAPENTE3;?><p>
 	</body>
 </html>
