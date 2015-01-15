<?php foreach ($this->data['videos'] as $video): ?>
<meta property="fb:admins" content="838777807"/>
<meta property="fb:app_id" content="1494049274210999" /> 
<meta property="og:type"   content="website" /> 
<meta property="og:url"    content="http://www.imposetaconnerie.fr" /> 
<meta property="og:title"  content="Impose Ta Connerie" /> 

<div class="article">

    <div class="content_gauche">

        <div class="info_video">
            <h2><?php echo $video['titre'];?></h2>
            <p>Date: <?php echo $video['date'];?></p>
            <p>Auteur: <?php echo $video['auteur'];?></p>
        </div>
        
        <div class="videos">
            <a href="<?php echo $app->urlFor('videos') ?>"><img title="<?php echo $video['titre'];?>" src="<?php echo $video['lien'];?>"/></a>
        </div>
        
    </div>   
        
    <div class="content_droite">
        <ul id="social">
            <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=1494049274210999&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-width="530" data-numposts="4" data-colorscheme="light"></div>
            <li class="element"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="Impose Ta Connerie">Tweet</a>
            <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
            <li class="element"><div id="fb-root"></div><script src="http://connect.facebook.net/fr_FR/all.js#xfbml=1"></script><div class="fb-like" data-share="false" data-width="450" data-show-faces="true" layout=button_count></div></li>
        </ul>   
    </div>
    
</div>

<?php endforeach; ?>