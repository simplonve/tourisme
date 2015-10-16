<header>
    <div class="flag_box">
        <div class="flexbox rigth flag_width">
            <form class="flexbox center" method="POST" action="translate/user_choice.php">
                <label class="m_contenu center" for="fr">
                    <img class="flag" src="../images/fr.png" title="Français" alt="drapeau français">
                    <input readonly type="hidden" name="language" value="fr"/>
                    <input class="hidden" type="submit" id="fr"/>
                </label>
            </form>
            <form class="flexbox center" method="POST" action="translate/user_choice.php">
                <label class="m_contenu center" title="English" for="en">
                    <img class="flag" src="../images/en.png" alt="english flag">
                    <input readonly type="hidden" name="language" value="en"/>
                    <input class="hidden" type="submit" id="en"/>
                </label>
            </form>
            <form class="flexbox center" method="POST" action="translate/user_choice.php">
                <label class="m_contenu center" for="nl">
                    <img class="flag" src="../images/nl.png" title="Nederlandse" alt="drapeau hollandais">
                    <input readonly type="hidden" name="language" value="nl"/>
                    <input class="hidden" type="submit" id="nl"/>
                </label>
            </form>
            <form class="flexbox center" method="POST" action="translate/user_choice.php">
                <label class="m_contenu center" for="de">
                    <img class="flag" src="../images/de.png" title="Deutsch" alt="drapeau allemand">
                    <input readonly type="hidden" name="language" value="de"/>
                    <input class="hidden" type="submit" id="de"/>
                </label>
            </form>
        </div>
    </div> 
    <div class="barre_navigation center">
        <a href="../index.php"><img class="logo-fox" src="../images/logo2-tourisme07.svg"/></a> 
        <div class="pictos">
            <a class="m_contenu" href="../index.php"><img class="pictos" src="../images/accueil.svg"></a>
            <a class="m_contenu" href="../views/randonnees.php"><img class="pictos" src="../images/rando.svg"></a>
            <a class="m_contenu" href="../views/vtt.php"><img class="pictos" src="../images/velos.svg"></a>
            <a class="m_contenu" href="../views/baignade.php"><img class="pictos" src="../images/baignade.svg"></a>
            <a class="m_contenu" href="../views/escalade.php"><img class="pictos" src="../images/escalade.svg"></a>
            <a class="m_contenu" href="../views/equestre.php"><img class="pictos" src="../images/equestre.svg"></a>
            <a class="m_contenu" href="../views/canoe.php"><img class="pictos" src="../images/canoe.svg"></a>
             <a class="m_contenu" href="../views/parapente.php"><img class="pictos" src="../images/parapente.svg"></a>
        </div>
    </div>  
</header>