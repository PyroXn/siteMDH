<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns ="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title><?php echo $title; ?></title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="./js/javascript.js"></script>
        <script language="javascript" type="text/javascript" src="./js/jquery.tinyTips.js"></script>
        <script language="javascript" type="text/javascript" src="./js/zoombox.js"></script>
        <script language="javascript" type="text/javascript" src="./js/caroufredsel.js"></script>
        <link rel="stylesheet" type="text/css" href="./templates/cssMdh.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="./templates/tinyTips.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="./templates/zoombox.css" media="screen" />
        <link rel="icon" type="image/png" href="./templates/images/ico.png" />
        <!--[if lte IE 8]>
          <style type="text/css">
              ..footer-box {
                filter:progid:DXImageTransform.Microsoft.Shadow(color='rgba(0, 0, 0, 0.3)', Direction=135, Strength=8);
                zoom: 1;
              } 
          </style>
        <![endif]-->
        <script type="text/javascript">
		$(document).ready(function() {
			$('a.tTip').tinyTips('title');
                                                      $('div.tTip').tinyTips('title');
		});
        </script>
        <script type="text/javascript">
            jQuery(function($){
                $('a.zoombox').zoombox();
            });
        </script>
        <script type="text/javascript">
            jQuery(function($){
                $('#carrousel').carouFredSel({
//                    direction: 'up',
                    items: 1,
                    scroll: {
                        fx: 'directscroll',
                        duration: 1000
                        
                    },
                    width: 884,
                    pagination : {
                        container: '#pagination',
                        anchorBuilder : function(nr, item) {
                            var src = $('img', item).attr('src');
                            src = src.replace('884/250', '100/100');
                            return '<a href="#'+nr+'"></a>';
                        }
                    }
                });
            });
        </script>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
         <meta name="keywords" lang="fr" content="developpement,informatique,agence,creation,site internet,logiciel,referencement,formation,application,progiciel,lorraine" />
         <meta name="description" content="<?php echo $description; ?>" />
         <meta http-equiv="Content-Language" content="fr" />
         <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28465306-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </head>
    <body>
        <div id="header">
            <div id="logo">
                <a href="accueil.html">
                    <img alt="mdh" src="./templates/images/mdh2.png"/>
                </a>
            </div>
            <div id="navigation">
                <ul>
                    <li id="accueil_menu" ><a <?php if($_GET['p'] == "home") { echo 'class="currentpage"'; } ?> href="accueil.html" title="">Accueil</a></li>
                    <li id="agence_menu"><a <?php if($_GET['p'] == "agence") { echo 'class="currentpage"'; } ?> href="agence.html" title="">Qui sommes-nous</a></li>
                    <li id="services_menu"><a <?php if($_GET['p'] == "services") { echo 'class="currentpage"'; } ?> href="savoir-faire.html" title="">Savoir faire</a></li>
<!--                    <li id="realisations_menu"><a <?php if($_GET['p'] == "realisations") { echo 'class="currentpage"'; } ?> href="index.php?p=realisations" title="">Réalisations</a></li>-->
                    <li id="contact_menu"><a <?php if($_GET['p'] == "contact") { echo 'class="currentpage"'; } ?> href="contact.html" title="">Contact</a></li>
                </ul>
            </div>
            <div id="top">
                <img alt="fond top" src="./templates/images/contenu_fond_top.png"/>
            </div>
        </div>
        <div id="content_background">
            <div id="content">