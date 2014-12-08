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
      
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

      
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
            <twitter_head><a href="https://twitter.com/ImposeTC" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @ImposeTC</a></twitter_head>
          
            <facebook_head><iframe src="//www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fimposetaconnerie&amp;width&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;show_faces=true&amp;appId=1494049274210999" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe></facebook_head>
            
        </div>
    </div>
      
      
      <?php 
        // my view content will be placed here
        echo $yield 
      ?>
       
  </body>
</html>