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
            <div class="m_contenu">
                <div class="picto_accueil">
                    <a href="index.php"><img class="picto_accueil" src="images/bouton_accueil.jpg"></a>
                </div>
            </div>
            <h1><?php echo TXT_PARAPENTE1;?></h1>
            <h2><?php echo TXT_PARAPENTE11;?></h2>
        </header>
        <h1>Page parapente en Val'Eyrieux</h1>
        <img class= "parapente_accueil" src="images/accueil_parapente.jpg">
        <div class="liens">
            <ul>
                <li><a href="http://" target= "blank"  >Eyrieux Sport</a></li>
                <li><a href="http://" target= "blank"  >Velo club le Cheylard</a></li>
                <li><a href="http://" target= "blank"  >Raid vtt des monts d'Ardèche</a></li>

            </ul>
        </div>
    <footer>
            <div class="loger_voir">
                <a href="hebergements" alt="hebergements"><img class="lit" src="images/lit.png"></a>
                <a href="patrimoine" alt="patrimoine"><img class="oeil" src="images/oeil.jpg"></a>
            </div>
    </footer>
		
 	</body>
 </html>
