<!DOCTYPE html>

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
    <div id="header_background">
        <div id="header">
            <div id="titre">
                <h1><a href="index.php">Impose Ta Connerie</a></h1>
            </div>

            <div id="menu">
                <ul>
                    <li><a href="index.php?section=image" title="Images" class="icon-camera-retro icon-2x"></a></li>
                    <li><a href="index.php?section=gif"  title="Gifs" class="icon-magic icon-2x"></a></li>
                    <li><a href="index.php?section=video" title="Vidéos" class="icon-facetime-video icon-2x"></a></li>

                    <?php 
                    if(isset($_SESSION['id_utilisateur'])>0)
                    { 
                    ?>
                        <li><a href="modele/site/deconnexion.php">Déconnection</a></li>
                        <li><a href="index.php?section=profil">Profil</a></li>
                </ul>
                <?php
                    }
                    else{ include ('vue/site/include/identification.php');}
                ?>
            </div>
        </div>
    </div>
 
