<?php
// Liste des pages
if(!isset($_GET['p'])) { $_GET['p'] = "home"; home(); }
elseif ($_GET['p'] == "home") { home(); }
elseif ($_GET['p'] == "agence") { agence(); }
elseif ($_GET['p'] == "services") { services(); }
elseif ($_GET['p'] == "realisations") { realisations(); }
elseif ($_GET['p'] == "contact") { contact(); }

// Fonction display
function display($title,$contenu) {
    include 'templates/haut.php';
    echo $contenu;
    include 'templates/bas.php';
}

function home() {
    $title = 'My Dev House - Agence de Developpement Informatique';
    $contenu = 'Acceuil !';
    display($title,$contenu);
}

function agence() {
    $title = 'My Dev House - Agence de Developpement Informatique';
    $contenu = '<h1>Qui sommes-nous?</h1>';
    $contenu .= '
        <div id="presentation_entreprise" class="firstcolonne">
        <h2>Présentation de l\'entreprise</h2>
        <p>My Dev House est une S.A.R.L crée par 3 associés en 2011. Jeunes, dynamiques et passionnés 
           nous utilisons tout notre savoir faire au service de nos clients.
        </p>';
    
    $contenu .= '
        <h2>Bref description de ce qu\'on sait faire sans rentrer dans le détail qui sera dans le menu "Ce qu\'on sait faire"</h2>
        <p>
            Passionnés par les technologies du web, Passionnées par les technologies offerte depuis la disponibilité d\'internet,
        </p>';
    
    $contenu .= '
        <h2>Notre coté interface humaine par rapport a vous (accompagnenment)</h2>
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
            Mettre les logo des technologies que nous utilisons (php javascript java jquery ajax css gimp linux, ...)
            Petite photo de nous entrain de travaillé (genre)
        </p>
        </div>';
    
    $contenu .= '
        <h2>4 phases de conceptions avec l\'explication de chaque phase : Analyse Création Livraison suivi</h2>
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
    display($title,$contenu);
}

function services() {
    $title = 'My Dev House - Agence de Developpement Informatique';
    $contenu = '<h1>Notre savoir faire</h1>';
    $contenu .= '
        <h2>Découvrez notre savoir faire à travers nos différents domaines de compétences</h2>
        <p class="paraDouble firstcolonne">
            Nous maitrisons de manières globales les différentes technologies web nous permettant de vous accompagner du début 
            à la fin de votre projet. Le référencement et le respect des standards web permettent à nos réalisations d\'être 
            accessible par le plus grand nombre d\'utilisateurs quels que soient leurs plateformes.
        </p>
        <p class="paraDouble">
            Le design quand à lui nous permet de rendre chacune de nos réalisations unique. Notre méthodologie et notre expérience 
            rend possible le respect des délai établis. Enfin notre professionalisme et le suivi de nos clients vous garantissent une 
            tranquilitées d\'esprit sur le produit livré.
        </p>';
    $contenu .= '<div class="clearboth"></div>';
    $contenu .= '<ul>';
    $contenu .= '
        <li>
            <a href="#" title="Site web" class="footer-box" id="site_web">
                <span class="titre_liste">Site web</span>
                    <span class="paragraphe_liste">Nous concevons des sites internet allant du site vitrine au site e commerce en passant par 
                        des sites événementiels, communautaires, des blogs ou toutes autres demandes spécifiques.
                        <em>En savoir</em>
                    </span>
                </span>
            </a>
        </li>';
    $contenu .= '
        <li>
            <a href="#" title="Logiciel"  class="footer-box" id="logiciel">
                <span class="titre_liste">Logiciel</span>
                <span class="paragraphe_liste">Vous souhaitez informatiser, optimiser ou disposer de logiciel efficace pour votre entreprise? Notre équipe spécialisé dans le
                    développement de progiciel est à votre écoute.
                    <em>En savoir</em>
                </span>
            </a>
        </li>';

    $contenu .= '
        <li>
            <a href="#" title="Design"  class="footer-box" id="design">
                <span class="titre_liste">Design</span>
                <span class="paragraphe_liste">Pour votre identité visuelle nous créons ou relookons vos chartes graphiques, logos ainsi que différents supports tels que des 
                    cartes de visite, plaquettes commerciales, flyers, newsletters…
                    <em>En savoir</em>
                </span>
            </a>
        </li>';
    
    $contenu .= '
        <li>
            <a href="#" title="Referencement"  class="footer-box" id="referencement">
                <span class="titre_liste">Referencement</span>
                <span class="paragraphe_liste">Vous souhaitez améliorer le positionnement et la visibilitée de votre site internet ? 
                    Nous proposons diverses offres vous permettant d\'acceder à un référencement durable. 
                    <em>En savoir</em>
                </span>
            </a>
        </li>';
    
    $contenu .= '
        <li class="footer-box" id="formation">
            <span class="titre_liste">Formation</span>
            <span class="paragraphe_liste">My Dev House vous propose des formations sur mesure. Nous établissons ensemble les points sur lesquels vous souhaitez être
            formé ce qui vous assure une formation utile et constructive.
            </span>
        </li>';
    
    $contenu .= '
        <li class="footer-box" id="smartphone">
            <span class="titre_liste">Application smartphone</span>
            <span class="paragraphe_liste">Nous proposons à nos clients des applications smartphone sur mesure. Nous sommes à l\'écoute de vos besoins afin de vous 
            proposez une solution au plus près de vos attentes.
            </span>
        </li>';

    $contenu .= '</ul>';
    display($title,$contenu);
}

function realisations() {
    $title = 'My Dev House - Agence de Developpement Informatique';
    $contenu = 'réalisations !';
    display($title,$contenu);
}

function contact() {
    $title = 'My Dev House - Agence de Developpement Informatique';
    $contenu = '<h1>Nous contacter</h1>';
    $contenu .= '<p>Vous souhaitez nous contacter ? Faire une demande de devis ? Nous vous apportons une réponse sous 72h.</p>';
    $contenu .= '
    <form method="POST" action="index.php?p=contactSend">
        <legend>Type</legend>
        <input type="radio" name="typeContact" value="Devis" checked="checked">Devis</input>            
        <input type="radio" name="typeContact" value="Contact">Contact</input>    
        <div id="suite">
            <legend>Type du produit</legend>
            <input type="radio" name="typeProduit" value="Progiciel" checked="checked">Progiciel</input>            
            <input type="radio" name="typeProduit" value="SiteWeb">Site web</input>
            
            <input type="text" name="objet" id="objet" placeholder="Objet">
            <textarea name="message" id="message" placeholder="Message"></textarea>
            <textarea name="cahierCharge" id="cahierCharge" placeholder="Cahier des Charge"></textarea>
            <input type="text" name="budget" id="budget" placeholder="Budget">
            <input type="text" name="mail" id="mail" placeholder="Adresse e-mail">
            <input type="submit" id="submitDevis" value="Envoyer">
        </div>
    </form>';
    display($title,$contenu);
}

function contactSend() {
    // Modifier le destinataire
    $destinataire = "????";
    $type = $_POST['typeContact'];
    switch($type) {
        case '1':
            $objet = 'Devis - ' . $_POST['objet'];
            $message = $_POST['message'];
            $cahier = $_POST['cahierCharge'];
            $budget = $_POST['budget'];
            $email = $_POST['mail'];
            
            $message_html = '';
            break;
        case '2':
            $objet = 'Contact - ' . $_POST['objet'];
            $message = $_POST['message'];
            $email = $_POST['mail'];
            
            $message_html = '';
            break;
    }
    
    $headers  = "From: $email\n";
    $headers .= "Reply-To: $email";
    $headers .= "Content-Type: text/html; charset=\"UTF-8\"";

    // envois du mail
    mail($destinataire,$objet, $message_html, $headers);
    
    $title = 'My Dev House - Message envoyé';
    $contenu = '';
    display($title,$contenu);
}
?>
