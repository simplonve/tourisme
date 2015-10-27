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
            <div class="page_accueil_rando">
                <h1><?php echo TXT_ACCUEIL_RANDO;?></h1>
            </div>

        </header>
        <!-- <img class="img_accueil_rando" src="../images/rando_accueil.jpg"> -->
        <div class="bloc_rando">
            <div class="photo_rando">
                <img class="panneau" src="../images/panneau.jpg">
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
        <?php
                include('layout/footer.php');
        ?>
    </body>
</html>