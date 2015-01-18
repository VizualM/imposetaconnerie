<!DOCTYPE html>
<html>
  <head>
      <meta http-equiv="Content-Type" content="charset=utf-8" />
      <title>Impose ta connerie</title>
      <meta name="keywords" content="" />
      <meta name="description" content="" />
    
      <link href="views/css/style.css" rel="stylesheet" type="text/css" media="all" />
      <link rel="stylesheet" href="views/css/kickstart.css" media="all" />
      <link rel="shortcut icon" href="views/images/logo.ico">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="views/js/kickstart.js"></script> 
      
  </head>
    
  <body>
      
      <div id="header_background">
        <div id="header" >
            <div id="titre">
                <h1><a href="<?php echo $app->urlFor('images') ?>">Impose Ta Connerie</a></h1>
            </div>

            <div id="menu">
                <ul>
                    <li><a href="<?php echo $app->urlFor('images') ?>" title="Images" class="icon-camera-retro icon-2x"></a></li>
                    <li><a href="<?php echo $app->urlFor('gifs') ?>"  title="Gifs" class="icon-magic icon-2x"></a></li>
                    <li><a href="<?php echo $app->urlFor('videos') ?>" title="Vidéos" class="icon-facetime-video icon-2x"></a></li>
                    
                    <?php 
                        if(isset($_SESSION['id_utilisateur'])>0)
                    { 
                    ?>
                        <li><a href="<?php echo $app->urlFor('deconnexion') ?>" >Déconnection</a></li>
                        <li><a href="<?php echo $app->urlFor('profil') ?>">Profil</a></li>
                </ul>
                <?php
                   }
                    else{ 
                
                ?>
                        <div id="identification">
                            
                            <button class="tooltip medium  pill" data-content="#tooltipcontentID" data-action="click">Connexion</button>
                            
                            <div class="tooltip-content" id="tooltipcontentID">

                                  <form role="form" method="POST" action="<?php echo $app->urlFor('connexion') ?>">
                                    

                                    <input type="text" name="Pseudo" placeholder="Pseudo">
                                    <input type="password" name="MotDePasse" placeholder="Mot de passe">
                                    <button type="submit">OK!</button>
                                </form>

                                <a href="<?php echo $app->urlFor('inscription') ?>">Créer un compte</a>

                            </div>

                        </div>
                <?php

                    }
                ?>
                
                <social_head><twitter_head><a href="https://twitter.com/ImposeTC" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @ImposeTC</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></twitter_head>
                <facebook_head><div class="fb-like" data-share="true" data-width="450" data-show-faces="true" layout=button_count></div></facebook_head></social_head>

            </div>
        </div>
    </div>
      
      
      <?php 
        // my view content will be placed here
        echo $yield;
      ?>
       
  </body>
</html>
