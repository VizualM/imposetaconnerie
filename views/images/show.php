<div class="article">

    <div class="content_gauche">

        <div class="info_image">
            <h2><?php echo $image['titre'];?></h2>
            <p>Date: <?php echo $image['date'];?></p>
            <p>Auteur: <?php echo $image['auteur'];?></p>
        </div>

        <div class="images">
            <a href="<?php echo $app->urlFor('images') ?>"><img title="<?php echo $image['nom_image'];?>" src="../img/img/<?php echo $image['nom_image'];?>"/></a>
        </div>

    </div>

    <div class="content_droite">
        <div class="twitter">
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="Impose Ta Connerie">Tweet</a>
            <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        </div>
    </div>
    
</div>