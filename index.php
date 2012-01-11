<?php

// Liste des pages
if (!isset($_GET['p'])) {
    $_GET['p'] = "home";
    home();
} elseif ($_GET['p'] == "home") {
    home();
} elseif ($_GET['p'] == "agence") {
    agence();
} elseif ($_GET['p'] == "services") {
    services();
} elseif ($_GET['p'] == "realisations") {
    realisations();
} elseif ($_GET['p'] == "contact") {
    contact();
} elseif($_GET['p'] == "mentions") {
    mentions();
} elseif($_GET['p'] == "contactSend") {
    contactSend();
} elseif($_GET['p'] == "siteinternet") {
    siteinternet();
} elseif($_GET['p'] == "logiciel") {
    logiciel();
} elseif($_GET['p'] == "design") {
    design();
} elseif($_GET['p'] == "referencement") {
    referencement();
} elseif($_GET['p'] == "formation") {
    formation();
} elseif($_GET['p'] == "smartphone") {
    smartphone();
}


// Fonction display
function display($title, $contenu,$description) {
    include 'templates/haut.php';
    echo $contenu;
    include 'templates/bas.php';
}

function home() {
    $title = 'My Dev House - Agence de Developpement Informatique';
    $description = 'informatique lorraine | mydevhouse.com';
    $contenu = 'Acceuil !';
    display($title, $contenu, $description);
}

function agence() {
    $title = 'My Dev House - Notre agence';
    $description = 'My Dev House est une agence de développement informatique. Nous créons des progiciels & des sites internet de qualité.';
    $contenu = '<h1 id="agence"><span class="texte_out_sreen">Qui sommes-nous ?</span></h1>';
    $contenu .= '
        <div id="presentation_entreprise" class="firstcolonne">
        <h2>Présentation de l\'entreprise</h2>
        <p>My Dev House est une S.A.R.L crée par 3 associés en 2011. Nous proposons nos compétences à toutes formes de
        structures : entreprises, particuliers, associations, artisans, collectivités....
        </p>';

    $contenu .= '
        <h2>Nos domaines d\'activité</h2>
        <p>
            Une equipe de développement jeune, dynamique et passionnée est à votre diposition afin de répondre à vos attentes dans les domaines de :
            <ul>
                <li>La création de sites Internet</li>
                <li>L\'édition de logiciel</li>
                <li>La création ou la "refonte" de votre design</li>
                <li>Le référencement</li>
                <li>La formation</li>
            </ul>
        </p>';

    $contenu .= '
        <h2>Une équipe à votre écoute</h2>
        <p>
            L\'équipe de My Dev House vous accompagne tout au long des différentes étapes de la réalisation de votre projet. 
            Nous sommes à vos côtés de la réalisation du cahier des charges à la mise en place d\'un suivi à long terme.
            Notre équipe saura vous conseiller afin de satisfaire au mieux vos besoins. Notre objectif est de vous fournir un service 
            complet de qualité.
        </p>
        </div>';

    $contenu .= '
        <div id="competences">
        <h2>Notre savoir faire (revoir peut-etre le nom : domaine de competence)</h2>
        <p>
            
        </p>
        </div>';

    $contenu .= '
        <ul id="methodologie">
            <li class="analyse">
                <span class="image_hover"></span>
                <span class="titre_liste">Analyse</span>
                <span class="paragraphe_liste">Grâce à notre étroite collaboration, nous vous proposons un devis complet vous donnant un contrôle total sur 
                    les différents services demandés dans le respect de votre budget.
                </span>
            </li>
            <li class="creation">
                <span class="image_hover"></span>
                <span class="titre_liste">Création</span>
                <span class="paragraphe_liste">Dans le respect des délais, nous vous proposons différentes étapes de contrôle afin de toujours être au plus près de vos besoins.</span>
            </li>
            <li class="livraison">
                <span class="image_hover"></span>
                <span class="titre_liste">Livraison</span>
                <span class="paragraphe_liste">Le produit terminé et validé, nous vous le déployons afin qu\'il soit directement prêt à être utilisé.</span>
            </li>
            <li class="suivi">
                <span class="image_hover"></span>
                <span class="titre_liste">Suivi</span>
                <span class="paragraphe_liste">Nous restons à votre écoute et proposons des solutions d\'accompagnement tout au long de votre activité.</span>
            </li>
        </ul>';

    $contenu .= '<div class="clearboth"></div>';

    $contenu .= '
        <h2>Pourquoi nous choisir plutot qu\'un autre</h2>
        <p>My Dev House c\'est :
            <ol>
                <li>Un interlocuteur disponible</li>
                <li>Une équipe dynamique et passionée</li>
                <li>Des délais de livraison respecté</li>
                <li>Un suivi tout au long de votre activité</li>
            </ol>
        </p>';
    display($title, $contenu, $description);
}

function services() {
    $title = 'My Dev House - Nos services';
    $description = 'Nous maitrisons de manières globales les différentes technologies web nous permettant de vous accompagner du début 
                                à la fin de votre projet. Le référencement et le respect des standards web permettent à nos réalisations d\'être 
                                accessible par le plus grand nombre d\'utilisateurs quels que soient leurs plateformes.';
    $contenu = '<h1 id="services"><span class="texte_out_sreen">Notre savoir faire</span></h1>';
    $contenu .= '
        <h2>Découvrez notre savoir faire à travers nos différents domaines de compétences</h2>
        <p class="paraDouble firstcolonne">
            Nous maitrisons de manières globales les différentes technologies web nous permettant de vous accompagner du début 
            à la fin de votre projet. Le référencement et le respect des standards web permettent à nos réalisations d\'être 
            <b>accessible</b> par le plus grand nombre d\'utilisateurs quels que soient leurs plateformes.
        </p>
        <p class="paraDouble">
            Le design quand à lui nous permet de rendre chacune de nos réalisations unique. Notre méthodologie et notre expérience 
            rend possible le respect des délai établis. Enfin notre professionalisme et le suivi de nos clients vous garantissent une 
            <b>tranquilité d\'esprit</b> sur le produit livré.
        </p>';
    $contenu .= '<div class="clearboth"></div>';
    $contenu .= '<ul>';
    $contenu .= '
        <li>
            <a href="index.php?p=siteinternet" title="Site internet" class="footer-box" id="site_web">
                <span class="titre_liste">Site internet</span>
                    <span class="paragraphe_liste">Nous concevons des sites internet allant du site vitrine au site e commerce en passant par 
                        des sites événementiels, communautaires, des blogs ou toutes autres demandes spécifiques.
                        <em>En savoir</em>
                    </span>
                </span>
            </a>
        </li>';
    $contenu .= '
        <li>
            <a href="index.php?p=logiciel" title="Logiciel"  class="footer-box" id="logiciel">
                <span class="titre_liste">Logiciel</span>
                <span class="paragraphe_liste">Vous souhaitez informatiser, optimiser ou disposer de logiciel efficace pour votre entreprise ? Notre équipe spécialisé dans le
                    développement de progiciel est à votre écoute.
                    <em>En savoir</em>
                </span>
            </a>
        </li>';

    $contenu .= '
        <li>
            <a href="index.php?p=design" title="Design"  class="footer-box" id="design">
                <span class="titre_liste">Design</span>
                <span class="paragraphe_liste">Pour votre identité visuelle nous créons ou relookons vos chartes graphiques, logos ainsi que différents supports tels que des 
                    cartes de visite, plaquettes commerciales, flyers, newsletters…
                    <em>En savoir</em>
                </span>
            </a>
        </li>';

    $contenu .= '
        <li>
            <a href="index.php?p=referencement" title="Referencement"  class="footer-box" id="referencement">
                <span class="titre_liste">Référencement</span>
                <span class="paragraphe_liste">Vous souhaitez améliorer le positionnement et la visibilitée de votre site internet ? 
                    Nous proposons diverses offres vous permettant d\'acceder à un référencement durable. 
                    <em>En savoir</em>
                </span>
            </a>
        </li>';

    $contenu .= '
        <li>
        <a href="index.php?p=formation" title="Formation"  class="footer-box" id="formation">
            <span class="titre_liste">Formation</span>
            <span class="paragraphe_liste">My Dev House vous propose des formations sur mesure. Nous établissons ensemble les points sur lesquels vous souhaitez être
            formé ce qui vous assure une formation utile et constructive.
            <em>En savoir</em>
            </span>
        </a>
        </li>';

    $contenu .= '
        <li>
        <a href="index.php?p=smartphone" title="Smartphone"  class="footer-box" id="smartphone">
            <span class="titre_liste">Application smartphone</span>
            <span class="paragraphe_liste">Nous proposons à nos clients des applications smartphone sur mesure. Nous sommes à l\'écoute de vos besoins afin de vous 
            proposez une solution au plus près de vos attentes.
            <em>En savoir</em>
            </span>
        </a>
        </li>';

    $contenu .= '</ul>';
    display($title, $contenu,$description);
}

function realisations() {
    $title = 'My Dev House - Nos réalisations';
    $description = 'Découvrez nos réalisations';
    $contenu = '<h1 id="realisations"><span class="texte_out_sreen">Nos réalisations</span></h1>';
    display($title, $contenu, $description);
}

function contact() {
    $title = 'My Dev House - Contact';
    $description = 'Vous souhaitez nous contacter ? Faire une demande de devis ? Nous vous apportons une réponse sous 72h';
    $contenu = '<h1 id="titre_contact"><span class="texte_out_sreen">Nous contacter</span></h1>';
    $contenu .= '<p>Vous souhaitez nous contacter ? Faire une demande de devis ? Nous vous apportons une réponse sous 72h.</p>';
    $contenu .= '
        <div id="contactcolonne">
           
            <div id="map" class="encadrement">
                    <iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                    src="http://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=&amp;daddr=49.504869,5.791125&amp;hl=fr&amp;geocode=&amp;
                    sll=49.49935,5.800781&amp;sspn=0.024137,0.066047&amp;vpsrc=0&amp;mra=mift&amp;mrsp=1&amp;sz=15&amp;ie=UTF8&amp;t=h&amp;
                    ll=49.49935,5.800781&amp;spn=0.027872,0.042744&amp;z=13&amp;output=embed"></iframe><br />
                    
            </div> 
            <div class="colonneDroite">
                <div class="adresse">
                    <h3 class="titreBloc"><img class="icones" src="./templates/images/adresse.png"></img>Adresse postale</h3>
                    <p>
                        My Dev House</br>Z.I. Rue de Belgique</br>54135 Mexy
                    </p>
                </div>
                <div class="adresse">
                    <h3 class="titreBloc"><img class="icones2" src="./templates/images/contact.png"></img>Nous contacter</h3>
                    <p>
                        contact@mydevhouse.com<span><img src="./templates/images/telephone.png" class="icones"></img>03.82.44.35.66</span>    
                    </p>
                </div>
            </div>
        </div>
    <form class="encadrement" method="POST" action="index.php?p=contactSend">
        <legend>Type</legend>
        <input type="radio" name="typeContact" value="Devis" checked="checked">Devis</input>            
        <input type="radio" name="typeContact" value="Contact">Contact</input>    
        <div id="devis">
            <legend>Type du produit</legend>
            <input type="radio" name="typeProduit" value="Progiciel" checked="checked">Progiciel</input>            
            <input type="radio" name="typeProduit" value="SiteWeb">Site web</input>
            
            <div><input type="text" name="objet" id="objet" placeholder="Objet"><span class="error"></span></div>
            <textarea name="message" id="message" placeholder="Message"></textarea><span class="error"></span>
            <textarea name="cahierCharge" id="cahierCharge" placeholder="Cahier des Charges"></textarea><span class="error"></span>
            <div><input type="text" name="budget" id="budget" placeholder="Budget"><span class="error"></span></div>
           <div><input type="text" name="mail" id="mail" placeholder="Adresse e-mail"><span class="error"></span></div>
            <input type="submit" id="submitDevis" value="Envoyer">
        </div>
        <div id="contact">
            <div><input type="text" name="objet" id="objetContact" placeholder="Objet"><span class="error"></span></div>
            <textarea name="message" id="messageContact" placeholder="Message"></textarea><span class="error"></span>
           <div><input type="text" name="mail" id="mailContact" placeholder="Adresse e-mail"><span class="error"></span></div>
            <input type="submit" id="submitDevis" value="Envoyer">
        </div>
    </form>';
    display($title, $contenu,$description);
}

function contactSend() {
    $destinataire = "contact@mydevhouse.com";
    $type = $_POST['typeContact'];
    $email = $_POST['mail'];
    switch ($type) {
        case 'Devis':
            $objet = 'Devis - ' . $_POST['objet'];
            $message = $_POST['message'];
            $cahier = $_POST['cahierCharge'];
            $budget = $_POST['budget'];

            $message_html = '<html>
                                                <head></head>
                                                <body>
                                                    <h3>Message</h3>'.$message.'<br />
                                                    <h3>Cahier des charges</h3>'.$cahier.'<br />
                                                     <h3>Budget</h3>'.$budget.'<br />
                                                     <h3>E-Mail</h3>'.$email.'
                                                 </body>
                                                 </html>';
            break;
        case 'Contact':
            $objet = 'Contact - ' . $_POST['objet'];
            $message = $_POST['message'];

            $message_html = '<html>
                                                <head></head>
                                                <body>
                                                    <h3>Message</h3>'.$message.'<br />
                                                    <h3>E-Mail</h3>'.$email.'
                                                 </body>
                                                 </html>';
            break;
    }

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    $headers .= "Content-Type: text/html; charset=\"UTF-8\"";

    // envois du mail
    mail($destinataire, $objet, $message_html, $headers);

    $title = 'My Dev House - Message envoyé';
    $description = 'Vous souhaitez nous contacter ? N\'hésitez pas !';
    $contenu = '<h1>Nous contacter</h1>';
    $contenu .= 'Votre message a bien été envoyé. Nous y répondrons dans les plus brefs délais.';
    display($title, $contenu,$description);
}

function mentions() {
    $title = 'My Dev House - Mentions légales';
    $description = 'Mentions légales du site internet http://www.mydevhouse.com';
    $contenu = '<h2>Informations légales</h2>
<h3>1. Présentation du site.</h3>
<p>En vertu de l\'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l\'économie numérique, il est précisé aux utilisateurs du site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> l\'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
<p>Propriétaire : My Dev House – SARL 53765994800013 – Z.I. Rue de Belgique 54135 Mexy<br>
Créateur  : <a href="http://www.mydevhouse.com">My Dev House</a><br>
Responsable publication : My Dev House – contact@mydevhouse.com<br>
Le responsable publication est une personne physique ou une personne morale.<br>
Webmaster : My Dev House – contact@mydevhouse.com<br>
Hébergeur : OVH – 140 Quai du Sartel - 59100 Roubaix - France</p>
<h3>2. Conditions générales d’utilisation du site et des services proposés.</h3>
<p>L’utilisation du site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> sont donc invités à les consulter de manière régulière.</p>
<p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a>, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
<p>Le site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> est mis à jour régulièrement par My Dev House. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
<h3>3. Description des services fournis.</h3>
<p>Le site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
<p>My Dev House s’efforce de fournir sur le site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
<p>Tous les informations indiquées sur le site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
<h3>4. Limitations contractuelles sur les données techniques.</h3>
<p>Le site utilise la technologie JavaScript.</p>
<p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
<h3>5. Propriété intellectuelle et contrefaçons.</h3>
<p>My Dev House est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
<p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : My Dev House.</p>
<p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
<h3>6. Limitations de responsabilité.</h3>
<p>My Dev House ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site My Dev House, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
<p>My Dev House ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a>.</p>
<p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. My Dev House se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, My Dev House se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
<h3>7. Gestion des données personnelles.</h3>
<p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l\'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
<p> A l\'occasion de l\'utilisation du site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a>, peuvent êtres recueillies : l\'URL des liens par l\'intermédiaire desquels l\'utilisateur a accédé au site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a>, le fournisseur d\'accès de l\'utilisateur, l\'adresse de protocole Internet (IP) de l\'utilisateur.</p>
<p> En tout état de cause My Dev House ne collecte des informations personnelles relatives à l\'utilisateur que pour le besoin de certains services proposés par le site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a>. L\'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu\'il procède par lui-même à leur saisie. Il est alors précisé à l \'utilisateur du site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> l’obligation ou non de fournir ces informations.</p>
<p> Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
<p> Aucune information personnelle de l\'utilisateur du site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> n\'est publiée à l\'insu de l\'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l\'hypothèse du rachat de My Dev House et de ses droits permettrait la transmission des dites informations à l\'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l\'utilisateur du site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a>.</p>
<p>Le site n\'est pas déclaré à la CNIL car il ne recueille pas d\'informations personnelles. .</p>
<p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
<h3>8. Liens hypertextes et cookies.</h3>
<p>Le site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de My Dev House. Cependant, My Dev House n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
<p> La navigation sur le site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
<p> Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :<br>
  Sous Internet Explorer : onglet outil / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.<br>
  Sous Netscape : onglet édition / préférences. Cliquez sur Avancées et choisissez Désactiver les cookies. Validez sur Ok.</p>
<h3>9. Droit applicable et attribution de juridiction.</h3>
<p>Tout litige en relation avec l’utilisation du site <a href="http://http://www.mydevhouse.com/" title="My Dev House - http://www.mydevhouse.com">http://www.mydevhouse.com</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
<h3>10. Les principales lois concernées.</h3>
<p>Loi n° 78-87 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l\'informatique, aux fichiers et aux libertés.</p>
<p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l\'économie numérique.</p>
<h3>11. Lexique.</h3>
<p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
<p> Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l\'identification des personnes physiques auxquelles elles s\'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
';
    display($title,$contenu,$description);
}

function siteinternet() {
    $siteVitrine = 'Le site vitrine présente votre entreprise, son activité, ses produits et services. C\'est un outil indispensable pour renforcer votre notoriété. Le site vitrine doit imprégner l\'internaute de l\'image que vous souhaitez faire transparaître.';
    
    $title = 'My Dev House - Création de site internet';
    $description = 'My Dev House met tout son savoir faire afin de vous proposer des sites internet de qualité.';
    $contenu = '<h1 id="site_web"><span class="texte_out_sreen">Création de site internet</span></h1>';
    $contenu .= '<h2>Nous créons des sites de qualité</h2>';
    $contenu .= '<div>
                                <img src="./templates/images/globe_web_miniature.png" class="miniature">
                                <p class="firstPara">L\'équipe de My Dev House met tout son savoir faire afin de vous proposer des <b>sites internet</b> de qualité.
                                Nous travaillons de manière consciencieuse le visuel de nos sites internet afin de coller au plus près de  l\'image de votre entreprise. Notre minutie ne s\'arrète pas là, nos sites internet sont <b>optimisés</b> pour être <b>accessible</b> à tous mais également pour faciliter leur <b>référencement</b>.</p>
                                <p>Nous sommes présent à vos côtés durant les différentes phases de réalisation de votre projet. Qu\'elle que soit l\'envergure de votre projet, n\'hésitez pas à <a href="index.php?p=contact" class="lien">nous contacter</a>.</p>
                          </div>';
    $contenu .= '<h2>Que comprend une création de site internet ?</h2>';
    $contenu .= '<ol class="categ">
                                <li>Un travail de recherche et d\'élaboration du design pour conserver votre identité visuelle</li>
                                <li>Le développement de votre site internet. Cette étape est soumise aux différentes validations du processus par le client.</li>
                                <li>Une installation de la solution.</li>
                                <li>La mise en place d\'un suivi à long terme.</li>                 
                           </ol>';
    $contenu .= '<p></p>';
    $contenu .= '<h2>Les différents sites internet</h2>';
    $contenu .= '
        <div class="box-categ" id="vitrine">
            <img src="./templates/images/siteVitrine.jpg">
            <a class="tTip" title="'.$siteVitrine.'" href="#">
                <span class="cellule_site">Vitrine</span>
            </a>
        </div>
        <div class="box-categ" id="ecommerce">
            <a class="tTip" title="Un site e-commerce est une véritable boutique accessible 24h/24." href="#">
                <span class="cellule_site">E-commerce</span>
            </a>
        </div>
        <div class="box-categ" id="demande">
            <span class="cellule_site">A la demande</span>
        </div>';
    display($title,$contenu,$description);
}

function logiciel() {  
    $title = 'My Dev House - Développement de logiciel';
    $description = 'Vous souhaitez informatiser une tache de votre entreprise ? Gagner du temps et par conséquent de l\'argent ? Nous développons des logiciels sur mesure.';
    $contenu = '<h1 id="logiciel"><span class="texte_out_sreen">Développement de logiciel</span></h1>';
    $contenu .= '<h2>Nous créons des logiciels sur mesure</h2>';
    $contenu .= '<div>
                                <img src="./templates/images/logiciel.png" class="miniature">
                                <p class="firstPara">L\'équipe de My Dev House développe <b>des progiciels</b> sur mesure. Vous souhaitez <b>informatiser</b> une tache de votre entreprise ? Gagner du temps et par conséquent de l\'argent ? <b>Faites nous confiance !</b> Nous répondrons à vos besoins grâce à une solution développée sur mesure.</p>
                                <p>Nous sommes présent à vos côtés durant les différentes phases de réalisation de votre projet. Qu\'elle que soit l\'envergure de votre projet, n\'hésitez pas à <a href="index.php?p=contact" class="lien">nous contacter</a>.</p>
                          </div>';
    $contenu .= '<h2>Que comprend un développement logiciel ?</h2>';
    $contenu .= '<ol class="categ">
                                <li>Une étude consciencieuse de vos besoins</li>
                                <li>Une étude de votre infrastructure</li>
                                <li>Le développement de votre apllication</li>
                                <li>Une installation de la solution</li>
                                <li>La mise en place d\'un suivi à long terme</li>                 
                           </ol>';
    display($title,$contenu,$description);
}

function design() {  
    $title = 'My Dev House - Création de design';
    $description = 'Vous voulez redorer votre image et votre site Internet actuel ne correspond pas à cette attente ? La refonte de votre site web ou « relookage » permettra à un site déjà construit de gagner des visiteurs et d’être mieux optimisé pour les moteurs de recherche.';
    $contenu = '<h1 id="design"><span class="texte_out_sreen">Création de design</span></h1>';
    $contenu .= '<h2>Nous créons des design uniques</h2>';
    $contenu .= '<div>
                                <img src="./templates/images/design.png" class="miniature">
                                <p class="firstPara">Vous voulez <b>redorer</b> votre image et votre site Internet actuel ne correspond pas à cette attente ?
La refonte de votre site web ou « <b>relookage</b> » est un atout supplémentaire pour <b>fidéliser</b> votre clientèle et donner l\'image d\'une société <b>dynamique</b> en perpétuelle évolution.
Apporter des nouveautés, mettre à jour vos données, actualiser votre contenu sont des modifications nécessaires à prendre en compte pour rendre dynamique votre site internet</p>
                                <p>La refonte de votre site web ou « relookage » permettra à un site déjà construit de gagner des visiteurs et d’être mieux optimisé pour les moteurs de recherche. N\'hésitez pas à <a href="index.php?p=contact" class="lien">nous contacter</a>.</p>
                          </div>';
    $contenu .= '<h2>Que comprend une création de design  ?</h2>';
    $contenu .= '<ol class="categ">
                                <li>Une étude de votre identité visuelle</li>
                                <li>Une étude de l\'image que vous souhaitez véhiculer</li>
                                <li>La création de votre design</li>
                                <li>La mise en place du design</li>                 
                           </ol>';
    display($title,$contenu,$description);
}

function referencement() {  
    $title = 'My Dev House - Référencement';
    $description = 'Vous souhaitez améliorer votre positionnement dans les moteurs de recherche ? Et donc devenir plus compétitif ? Notre équipe reprendra en intégralité les différentes étapes pour améliorer votre référencement.';
    $contenu = '<h1 id="referencement"><span class="texte_out_sreen">Référencement</span></h1>';
    $contenu .= '<h2>Nous améliorons votre visibilité sur internet</h2>';
    $contenu .= '<div>
                                <img src="./templates/images/referencement.png" class="miniature">
                                <p class="firstPara">Vous souhaitez <b>améliorer votre positionnement</b> dans les moteurs de recherche ? Et donc devenir plus compétitif ? Notre équipe reprendra en intégralité les différentes étapes pour améliorer votre référencement.</p>
                                <p>L\'étude et la modification des paramètres de référencement permet de gagner des visiteurs et donc potentiellement de nouveaux clients. N\'hésitez pas à <a href="index.php?p=contact" class="lien">nous contacter</a>.</p>
                          </div>';
    $contenu .= '<h2>Que comprend notre offre référencement ?</h2>';
    $contenu .= '<ol class="categ">
                                <li>Une étude de votre identité sur internet</li>
                                <li>Une étude des mots clés liés à votre activité</li>
                                <li>La mise en place d\'une solution adaptée</li>   
                                <li>Un suivi régulié à long terme</li>
                           </ol>';
    display($title,$contenu,$description);
}

function formation() {
    $title = 'My Dev House - Formation';
    $description = '';
    $contenu = '<h1 id="formation"><span class="texte_out_sreen">Formation</span></h1>';
    $contenu .= '<h2>N\'ayez plus peur du changement</h2>';
    $contenu .= '<div>
                            <img src="./templates/images/formation.png" class="miniature">
                            <p class="firstPara">Vous souhaitez <b>développer</b> vos connaissances dans le domaine informatique ?</p>
                            <p>N\'hésitez pas à <a href="index.php?p=contact" class="lien">nous contacter</a>.</p>
                      </div>';
    display($title,$contenu,$description);
}

function smartphone() {
    $title = 'My Dev House -Application Smartphone';
    $description = '';
    $contenu = '<h1 id="smartphone"><span class="texte_out_sreen">Smartphone</span></h1>';
    $contenu .= '<h2>N\'ayez plus peur du changement</h2>';
    $contenu .= '<div>
                            <img src="./templates/images/smartphone.png" class="miniature">
                            <p class="firstPara">Vous souhaitez <b>développer</b> vos connaissances dans le domaine informatique ?</p>
                            <p>N\'hésitez pas à <a href="index.php?p=contact" class="lien">nous contacter</a>.</p>
                      </div>';
    display($title,$contenu,$description);
}
?>
