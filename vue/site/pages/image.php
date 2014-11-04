<?php $pageactive = 'image'; ?>
<?php include('vue/site/include/header.php');?>

<?php 
    while($img = $prepare_compte->fetch()) { 
?>
    <div class="article">
        
        <div class="content_gauche">
                <h2><?php echo $img['titre'];?></h2>
                <p>Date: <?php echo $img['date'];?></p>
                <p>Auteur: <?php echo $img['auteur'];?></p>
                <img class="caption" title="<?php echo $img['nom_image'];?>" src="img/img/<?php echo $img['nom_image'];?>"/>
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
     


<?php include('vue/site/include/footer.php'); ?>