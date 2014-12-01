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
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <link rel="stylesheet" href="vue/site/css/kickstart.css" media="all" /> <!-- KICKSTART -->
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1494049274210999',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
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
                    <twitter><a href="https://twitter.com/ImposeTC" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @ImposeTC</a></twitter>
                    <facebook><div
                            class="fb-like"
                            data-share="true"
                            data-width="450"
                            data-show-faces="true"
                            layout=button_count>
                    </div></facebook>
                    
                    <?php 
                    if(isset($_SESSION['id_utilisateur'])>0)
                    { 
                    ?>
                        <li><a href="modele/site/deconnexion.php">Déconnection</a></li>
                        <li><a href="index.php?section=profil">Profil</a></li>
                
                    <?php
                    }
                        else{ include ('vue/site/include/identification.php');}
                    ?>
                    
                </ul>
            </div>
        </div>
    </div>
 
