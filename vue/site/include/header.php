<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
    
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Impose ta connerie</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    
    <link href="vue/site/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="vue/site/js/kickstart.js"></script> <!-- KICKSTART -->
    <link rel="stylesheet" href="vue/site/css/kickstart.css" media="all" /> <!-- KICKSTART -->
</head>
<body>
    
	<div id="header">
        <div id="titre">
            <h1><a href="index.php">Impose Ta Connerie</a></h1>
        </div>
        
        <div id="menu">
            <ul>
                <li class="icon-camera icon-large"><a href="index.php?section=image" title="">Image</a></li>
                <li><a href="index.php?section=gif"  title="">Gif</a></li>
                <li><a href="index.php?section=video" title="">Vidéo</a></li>
            
                <!--<li><a href="index.php?section=compte" title="">Compte</a></li>-->

                <?php 
                if(isset($_SESSION['id_utilisateur'])>0)
                { 
                ?>
                                <li><a href="modele/site/deconnexion.php">Déconnection</a></li>
                                <li><a href="index.php?section=profil">Profil</a></li>
            </ul>
            <?php
                }
                else
                {
                include ('vue/site/include/identification.php');
                }
                ?>
        </div>
        
	</div>
    
    <div class="notice error">Fermer ce message si vous le voyez = KickStarte Work ! <a href="http://google.fr" class="icon-remove"></a></div>

 
