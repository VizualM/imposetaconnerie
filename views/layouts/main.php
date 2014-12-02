<!DOCTYPE html>
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Impose ta connerie</title>
      <meta name="keywords" content="" />
      <meta name="description" content="" />
    
      <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
      <link rel="stylesheet" href="../css/kickstart.css" media="all" /> <!-- KICKSTART -->
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="../js/kickstart.js"></script> <!-- KICKSTART -->
      
  </head>
    
  <body>
      
      <div id="header_background">
        <div id="header">
            <div id="titre">
                <h1><a href="<?php echo $app->urlFor('images') ?>">Impose Ta Connerie</a></h1>
            </div>

            <div id="menu">
                <ul>
                    <li><a href="<?php echo $app->urlFor('images') ?>" title="Images" class="icon-camera-retro icon-2x"></a></li>
                    <li><a href="<?php echo $app->urlFor('gifs') ?>"  title="Gifs" class="icon-magic icon-2x"></a></li>
                    <li><a href="<?php echo $app->urlFor('images') ?>" title="Vidéos" class="icon-facetime-video icon-2x"></a></li>

                    <?php 
                    if(isset($_SESSION['id_utilisateur'])>0)
                    { 
                    ?>
                        <li><a href="models/deconnexion.php">Déconnection</a></li>
                        <li><a href="/profil">Profil</a></li>
                </ul>
                <?php
                    }
                    else{ include ('models/identification.php');}
                ?>
            </div>
        </div>
    </div>
      
      
      <?php 
        // my view content will be placed here
        echo $yield 
      ?>
       
  </body>
</html>