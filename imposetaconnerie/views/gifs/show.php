<div class="article">

    <div class="content_gauche">

        <div class="info_image">
            <h2><?php echo $gif['titre'];?></h2>
            <p>Date: <?php echo $gif['date'];?></p>
            <p>Auteur: <?php echo $gif['auteur'];?></p>
        </div>

        <div class="images">
            <a href="<?php echo $app->urlFor('gifs') ?>"><img title="<?php echo $gif['nom_image'];?>" src="../img/gif/<?php echo $gif['nom_image'];?>"/></a>
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
    
</div>