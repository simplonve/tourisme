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
            <a class="m_contenu" href="index.php"><img class="picto_accueil" src="images/accueil.svg"></a>
       </div>
        <h2 class="titre_rando">
             <?php echo TXT_RANDO1;?>  
        </h2>   
        </header>
        <img class="img_rando" src="images/rando_accueil.jpg">
        <div class="bloc_rando">
            <div class="photo_rando">
                <img class="panneau" src="images/panneau.jpg">
                <p>Quelques exemples de randonnées sur Saint-Agrève:</p>
                <ul>
                    <li><p>Sentier de découverte de la forêt du Pontet</p>
                        <p>Parcourez le sentier de découverte de la forêt du Pontet : sous couvert de résineux, sur le chemin des fourmis...et les traces des chevreuils -
                            Panneaux explicatifs - En libre accès.
                        </p>
                    </li>
                    <li><p>Sentier d'interprétation du parc éolien</p>
                        <p>Balade libre sur le sentier d'interprétation du parc de la Citadelle de 6 éoliennes. Panneaux d'informations sur la faune et la flore.
                        </p>
                     </li>
                </ul>

            </div>
            <div class="texte_rando">
                <p> Les randonnées pédestres au coeur de l'Ardèche permettent de découvrir une variété de paysages à vous couper le souffle.</p>
                <p> Les différents circuits proposés sont répertoriés et balisés. Ballades à thèmes ou non, en famille ou en solitaire  utilisables par tous en fonction des niveaux vous séduiront.</p>
                <p> Bref il y en a pour tous les goûts!</p>     
            </div>
        </div>
        <div class="loger_voir">
            <a href="hebergement.php">Se loger<img class="lit" src="images/lit.png"></a>
            <a href="patrimoine"> A visiter<img class="oeil" src="images/oeil.jpg"></a>
        </div>
	</body>
</html>