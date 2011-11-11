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
                <p>Vous souhaitez présenter votre activité, promouvoir vos produits ou encore les vendre sur Internet ? 
                    My Dev House réalise pour vous un site Internet de qualité avec un design à l’image de vos activités.
                    De la création de votre identité visuelle à la mise en ligne de votre site sur serveur d’hébergement, 
                    My Dev House vous accompagne dans votre communication par Internet. Nous créons pour vous un site Internet sur mesure et 
                    procédons si besoin à son référencement sur les moteurs de recherche.
                    Un suivi permanent par notre équipe ainsi que de la maintenance de votre site vous seront proposés afin de 
                    toujours vous faire disposer d’une solution efficace entre les mains.
                    <em>En savoir</em>
                </p>
            </a>
        </li>';
    $contenu .= '
        <li>
            <a href="#" title="Logiciel">
                <h2>Logiciel</h2>
                <p>Vous souhaitez informatiser une fonction de votre entreprise, optimiser vos applications existantes ou 
                    disposer d’un logiciel efficace qui vous fasse gagner du temps en s’adaptant parfaitement à votre activité? 
                    My Dev House vous propose une solution sur mesure qui dispose de fonctionnalités bien spécifiques à vos besoins.
                    Dans une recherche de qualité optimale, nous analysons ensemble votre projet, nous vous orientons et vous conseillons 
                    dans l’élaboration d’un cahier des charges afin d’atteindre pleinement les objectifs attendus.
                    Avec My Dev House allez au devant de vos ambitions et profitez pleinement des avantages tirés de l’outil informatique. 
                    <em>En savoir</em>
                </p>
            </a>
        </li>';

    $contenu .= '
        <li>
            <a href="#" title="Design">
                <h2>Design</h2>
                <p>Vous souhaitez optimiser l’image de vos produits ou services sur vos différents supports de communication ?
                    My Dev House propose toute sorte de designs avancés pour satisfaire votre besoin. Notre équipe met tout son savoir-faire 
                    à votre disposition pour vous faire bénéficier d’une identité visuelle de qualité qui accompagnera votre activité. 
                    Nous créons ou relookons vos chartes graphiques, logos ainsi que différents supports tels que des cartes de visite, 
                    plaquettes commerciales, flyers, newsletters…
                    Avec My Dev House démarquez-vous et mettez l’accent sur votre communication pour bénéficiez d’une image de qualité sur 
                    le web comme sur papier. 
                    <em>En savoir</em>
                </p>
            </a>
        </li>';
    
    $contenu .= '
        <li>
            <a href="#" title="Referencement">
                <h2>Referencement</h2>
                <p>Vous souhaitez améliorer le positionnement de votre site internet dans les moteurs de recherche ? 
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
