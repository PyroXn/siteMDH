<?php
// Liste des pages
if(!isset($_GET['p'])) { $_GET['p'] = "home"; home(); }
elseif ($_GET['p'] == "home") { home(); }

// Fonction display
function display($title,$contenu) {
    include 'templates/haut.php';
    echo $contenu;
    include 'templates/bas.php';
}

function home() {
    $title = 'My Dev House - Agence de Developpement Informatique';
    $contenu = '<h1>Agence de Developpement Informatique</h1>';
    $contenu .= '<ul>';
    $contenu .= '
        <li>
            <a href="#" title="Site web">
                <h2>Site web</h2>
                <p>Pour vous, notre équipe est capable de concevoir des sites internet allant du site vitrine au site e-commerce en passant par 
                    des sites événementiels, communautaires, des blogs ou toutes autres demandes spécifiques.
                    <em>En savoir</em>
                </p>
            </a>
        </li>';
    $contenu .= '
        <li>
            <a href="#" title="Logiciel">
                <h2>Logiciel</h2>
                <p>Vous souhaitez informatiser, optimiser ou disposer de logiciel efficace pour votre entreprise? Notre équipe spécialisé dans le
                    développement de progiciel est à votre écoute.
                    <em>En savoir</em>
                </p>
            </a>
        </li>';

    $contenu .= '
        <li>
            <a href="#" title="Design">
                <h2>Design</h2>
                <p> Pour votre identité visuelle nous créons ou relookons vos chartes graphiques, logos ainsi que différents supports tels que des 
                    cartes de visite, plaquettes commerciales, flyers, newsletters…
                    <em>En savoir</em>
                </p>
            </a>
        </li>';
    
    $contenu .= '
        <li>
            <a href="#" title="Referencement">
                <h2>Referencement</h2>
                <p>Vous souhaitez améliorer le positionnement et la visibilitée de votre site internet sur les moteurs de recherche ? 
                    Nous proposons diverses offres vous permettant d\'acceder à un référencement durable. 
                    <em>En savoir</em>
                </p>
            </a>
        </li>';
    
    $contenu .= '
        <li>
            <h2>Formation</h2>
            <p>Vous souhaitez améliorer vos connaissances dans le domaine informatique ? Nous vous proposons différentes formations.
            </p>
        </li>';
    $contenu .= '</ul>';
    display($title,$contenu);
}

?>
