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
        <div class="flag_box">
            <div class="flexbox rigth flag_width">
                <form class="flexbox center" method="POST" action="translate/user_choice.php">
                    <label class="m_contenu center" for="fr">
                        <img class="flag" src="images/fr.png" title="Français" alt="drapeau français">
                        <input readonly type="hidden" name="language" value="fr"/>
                        <input class="hidden" type="submit" id="fr"/>
                    </label>
                </form>
                <form class="flexbox center" method="POST" action="translate/user_choice.php">
                    <label class="m_contenu center" title="English" for="en">
                        <img class="flag" src="images/en.png" alt="english flag">
                        <input readonly type="hidden" name="language" value="en"/>
                        <input class="hidden" type="submit" id="en"/>
                    </label>
                </form>
                <form class="flexbox center" method="POST" action="translate/user_choice.php">
                    <label class="m_contenu center" for="nl">
                        <img class="flag" src="images/nl.png" title="Nederlandse" alt="drapeau hollandais">
                        <input readonly type="hidden" name="language" value="nl"/>
                        <input class="hidden" type="submit" id="nl"/>
                    </label>
                </form>
                <form class="flexbox center" method="POST" action="translate/user_choice.php">
                    <label class="m_contenu center" for="de">
                        <img class="flag" src="images/de.png" title="Deutsch" alt="drapeau allemand">
                        <input readonly type="hidden" name="language" value="de"/>
                        <input class="hidden" type="submit" id="de"/>
                    </label>
                </form>
            </div>
        </div> 
            <div class="barre_navigation center">
                <a href="index.php"><img class="logo-fox" src="images/logo2-tourisme07.svg"/></a>
            <!-- </div>
            <div class="m_contenu fond_pictos">  -->    
                <div class="pictos">
                    <a class="m_contenu" href="randonnees.php"><img class="pictos" src="images/rando.svg"></a>
                    <a class="m_contenu" href="vtt.php"><img class="pictos" src="images/velos.svg"></a>
                    <a class="m_contenu" href="baignade.php"><img class="pictos" src="images/baignade.svg"></a>
                    <a class="m_contenu" href="escalade.php"><img class="pictos" src="images/escalade.svg"></a>
                    <a class="m_contenu" href="equestre.php"><img class="pictos" src="images/equestre.svg"></a>
                    <a class="m_contenu" href="canoe.php"><img class="pictos" src="images/canoe.svg"></a>
                     <a class="m_contenu" href="parapente.php"><img class="pictos" src="images/parapente.svg"></a>
                </div>   
<!--             </div> -->
        </header>
        <div class="page-accueil">
            <!-- <div class="flexbox m_contenu"> -->
                <h1 class="titre"><?php echo TXT_TITREH1;?></h1>
                <h1 class="titre"><?php echo TXT_TITREH1_2;?></h1>
            <!-- </div> -->
            <!-- <div class="flexbox m_contenu"> -->
                <h2 class="phrase_accroche"><?php echo TXT_TITREH2;?></h2>
            <!-- </div> -->
        <!-- <img class="img_accueil" src="images/page_accueil.jpg"> -->
        </div>
        <div class="intro1 flexbox">
            <div class="carte_ardeche flexbox">
                <img class="center image_carte" src="images/carte.jpg">
            </div>
            <div class="text1 flexbox">
                <h3><?php echo TXT_ACTIVITEVERTE;?></h3>
                <p><?php echo TXT_P1;?></p>
                <p><?php echo TXT_P2;?></p>
                <p><?php echo TXT_P3;?></p> 
                <p><?php echo TXT_P4;?></p>
            </div>
        </div>  
        <div class="intro2">
            <div class="text2">
                <h3><?php echo TXT_ACTIVITEEAU;?></h3>
                <p><?php echo TXT_P5;?></p>
                <p><?php echo TXT_P6;?></p>
                <p><?php echo TXT_P7;?></p>
                <p><?php echo TXT_P8;?></p>
                <p><?php echo TXT_P9;?></p>
                <p><?php echo TXT_P10;?></p>
            </div>
            <div class="image_lac flexbox">
                <img class="lac_devesset" src="images/devesset.jpg">
            </div>
        </div>
	</body>
</html>