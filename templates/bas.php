<?php if($_GET['p'] != "contact" && $_GET['p'] != "realisations" && $_GET['p'] != "services" && $_GET['p'] != "agence" && $_GET['p'] != "home") {
    echo '<div class="clearboth"></div>
    <a class="bouton_contact" href="contact.html">Nous contacter</a>';
}?>
</div>
 <div class="clearboth"></div>
        <div id="footer_fond">
        <div class="bot">
            <img alt="fond bot" src="./templates/images/contenu_fond_bot.png"/>
        </div>
        
            <div id="footer">
                <div class="top">
                    <img alt="fond top" src="./templates/images/footer_fond_top.png"/>
                </div>
                <div id="wrapper">
                    <div id="footer_content">
                        
                        <div class="col-left">
                             <!--<img src="./templates/images/mdh_small.png" />-->
                        </div>
                        <div class="col-right">

                        </div>
<!--                        <ul id="lien_footer">
                            <li id="accueil_menu"><a href="index.php?p=home" title="">Accueil</a></li>
                            <li id="agence_menu" class=""><a href="index.php?p=agence" title="">Qui sommes-nous</a></li>
                            <li id="services_menu" class=""><a href="index.php?p=services" title="">Savoir faire</a></li>
                            <li id="realisations_menu" class=""><a href="index.php?p=realisations" title="">Réalisations</a></li>
                            <li id="contact_menu" class=""><a href="index.php?p=contact" title="">Contact</a></li>
                        </ul>-->
                        <ul id="social">
                                <li id="facebook" title="facebook"><a href="http://www.facebook.com/mydevhouse"></a></li>
                                <li id="google" title="google+"><a href="https://plus.google.com/"></a></li>
                                <li id="github" title="github"><a href="https://github.com/"></a></li>
                        </ul>
                        
                        
                        <div class="clearboth"></div>
                        <div class="copyright">&copy; 2012 My Dev House - <a href="mentions-legales.html">Mentions légales</a></div>
                        <a href="http://www.liendur.fr" title="Annuaire de référencement avec liens en dur">Annuaire référencement</a> - <a href="http://annuaire.pro/informatique/">Informatique</a> - <a href="http://www.hannuaire.fr/" title="Annuaire référencement de qualité">Hannuaire</a> - <a href="http://www.mirti.com/">Annuaire mirti</a>
                     </div>
                </div>
            </div>

            <div class="bot">
                <img alt="fond bot" src="./templates/images/footer_fond_bot.png"/>
            </div>
        </div>
    </body>
</html>