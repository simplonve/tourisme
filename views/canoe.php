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
            <div class="page_accueil_canoe">
                <h1><?php echo TXT_CANOE_ACCUEIL;?></h1>
                <h1><?php echo TXT_CANOE_ACCUEIL1;?></h1>
            </div>
            <div class="entete_evenement_canoe">
                <h2>Evenement Championnat de France 2015 </h2>
                <h2>sur l'Eyrieux</h2>
            </div>
            <img class="brochure_epreuve_canoe" src="../images/canoe_championnat_france2015_1.jpg" alt="canoe 2015 st Sauveur de Montagut">
        </header>
		<h1>Page canoe en Val'Eyrieux</h1>
        <div>
             <?php
                include('layout/footer.php');
             ?>
        </div>
 	</body>
 </html>