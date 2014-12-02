<?php
require 'models/connexion_bdd.php';

$compt_ann = 0; 
    $compte = "SELECT * FROM gif ";
    $prepare_compte = $db->prepare($compte);
    $execute_compte = $prepare_compte->execute();

    while($gif = $prepare_compte->fetch()) { 
?>

        <div class="article">

            <div class="content_gauche">

                <div class="info_image">
                    <h2><?php echo $gif['titre'];?></h2>
                    <p>Date: <?php echo $gif['date'];?></p>
                    <p>Auteur: <?php echo $gif['auteur'];?></p>
                </div>

                <div class="images">
                    <img title="<?php echo $gif['nom_image'];?>" src="../img/gif/<?php echo $gif['nom_image'];?>"/>
                </div>

            </div>

            <div class="content_droite">
                <div class="twitter">
                    <a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="Impose Ta Connerie">Tweet</a>
                    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                </div>
            </div>

        </div>


<?php 
    $compt_ann = $compt_ann + 1; } 
?>