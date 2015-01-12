<div class="article">

    <div class="content_gauche">

        <div class="info_image">
            <h2><?php echo $gif[0]['titre'];?></h2>
            <p>Date: <?php echo $gif[0]['date'];?></p>
            <p>Auteur: <?php echo $gif[0]['auteur'];?></p>
        </div>

        <div class="images">
            <a href="<?php echo $app->urlFor('gifs') ?>"><img title="<?php echo $gif[0]['nom_image'];?>" src="views/images/gif/<?php echo $gif[0]['nom_image'];?>"/></a>
        </div>

    </div>

    <div class="content_droite">
        <div class="twitter">
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="Impose Ta Connerie">Tweet</a>
            <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        </div>
    </div>
    
</div>

