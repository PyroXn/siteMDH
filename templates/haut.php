<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns ="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title><?php echo $title; ?></title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="./js/javascript.js"></script>
        <script language="javascript" type="text/javascript" src="./js/jquery.tinyTips.js"></script>
        <link rel="stylesheet" type="text/css" href="./templates/cssMdh.css" media="screen" />
         <link rel="stylesheet" type="text/css" href="./templates/tinyTips.css" media="screen" />
        <script type="text/javascript">
		$(document).ready(function() {
			$('a.tTip').tinyTips('title');
		});
       </script>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
         <meta name="keywords" lang="fr" content="developpement,informatique,agence,creation,site internet,logiciel,referencement,formation,application,progiciel,lorraine" />
         <meta name="description" content="<?php echo $description; ?>" />
         <meta http-equiv="Content-Language" content="fr" />
    </head>
    <body>
        <div id="header">
            <div id="logo">
                <a href="index.php?p=home">
                    <img alt="mdh" src="./templates/images/mdh2.png"/>
                </a>
            </div>
            <div id="navigation">
                <ul>
                    <li id="accueil_menu" ><a <?php if($_GET['p'] == "home") { echo 'class="currentpage"'; } ?> href="index.php?p=home" title="">Accueil</a></li>
                    <li id="agence_menu"><a <?php if($_GET['p'] == "agence") { echo 'class="currentpage"'; } ?> href="index.php?p=agence" title="">Qui sommes-nous</a></li>
                    <li id="services_menu"><a <?php if($_GET['p'] == "services") { echo 'class="currentpage"'; } ?> href="index.php?p=services" title="">Savoir faire</a></li>
                    <li id="realisations_menu"><a <?php if($_GET['p'] == "realisations") { echo 'class="currentpage"'; } ?> href="index.php?p=realisations" title="">Réalisations</a></li>
                    <li id="contact_menu"><a <?php if($_GET['p'] == "contact") { echo 'class="currentpage"'; } ?> href="index.php?p=contact" title="">Contact</a></li>
                </ul>
            </div>
            <div id="top">
                <img alt="fond top" src="./templates/images/contenu_fond_top.png"/>
            </div>
        </div>
        <div id="content_background">
            <div id="content">