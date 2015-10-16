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
</header>