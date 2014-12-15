<div class="article">

    <div class="content_gauche">

        <div class="info_image">
            <h2><?php echo $videos['titre'];?></h2>
            <p>Date: <?php echo $videos['date'];?></p>
            <p>Auteur: <?php echo $videos['auteur'];?></p>
        </div>

        <div class="images">
            <a href="<?php echo $app->urlFor('videos') ?>"><img title="<?php echo $videos['nom_video'];?>" src="../img/img/<?php echo $videos['nom_video'];?>"/></a>
        </div>

    </div>

    <div class="content_droite">
        <ul id="social">
            <li class="element"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="Impose Ta Connerie">Tweet</a>
            <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
            <li class="element"><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><div class="fb-like" data-share="false" data-width="450" data-show-faces="true" layout=button_count></div></li>
        </ul>   
    </div>
    
</div>