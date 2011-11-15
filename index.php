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
    $contenu = 'NOUS !';
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
            <a href="#" title="Site web">
                <h3>Site web</h3>
                <p>Pour vous, notre équipe est capable de concevoir des sites internet allant du site vitrine au site e-commerce en passant par 
                    des sites événementiels, communautaires, des blogs ou toutes autres demandes spécifiques.
                    <em>En savoir</em>
                </p>
            </a>
        </li>';
    $contenu .= '
        <li>
            <a href="#" title="Logiciel">
                <h3>Logiciel</h3>
                <p>Vous souhaitez informatiser, optimiser ou disposer de logiciel efficace pour votre entreprise? Notre équipe spécialisé dans le
                    développement de progiciel est à votre écoute.
                    <em>En savoir</em>
                </p>
            </a>
        </li>';

    $contenu .= '
        <li>
            <a href="#" title="Design">
                <h3>Design</h3>
                <p> Pour votre identité visuelle nous créons ou relookons vos chartes graphiques, logos ainsi que différents supports tels que des 
                    cartes de visite, plaquettes commerciales, flyers, newsletters…
                    <em>En savoir</em>
                </p>
            </a>
        </li>';
    
    $contenu .= '
        <li>
            <a href="#" title="Referencement">
                <h3>Referencement</h3>
                <p>Vous souhaitez améliorer le positionnement et la visibilitée de votre site internet sur les moteurs de recherche ? 
                    Nous proposons diverses offres vous permettant d\'acceder à un référencement durable. 
                    <em>En savoir</em>
                </p>
            </a>
        </li>';
    
    $contenu .= '
        <li>
            <h3>Formation</h3>
            <p>My Dev House vous propose des formations sur mesure. Nous établissons ensemble les points sur lesquels vous souhaitez être
            formé ce qui vous assure une formation utile et constructive.
            </p>
        </li>';
    
    $contenu .= '
        <li>
            <h3>Application smartphone</h3>
            <p>Nous proposons à nos clients des applications smartphone sur mesure. Nous sommes à l\'écoute de vos besoins afin de vous 
            proposez une solution au plus près de vos attentes.
            </p>
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
    $contenu = 'contact !';
    display($title,$contenu);
}

?>
