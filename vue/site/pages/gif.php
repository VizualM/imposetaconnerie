<?php $pageactive = 'gif'; ?>
<?php include('vue/site/include/header.php');?>


<?php 
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
                <img title="<?php echo $gif['nom_image'];?>" src="img/gif/<?php echo $gif['nom_image'];?>"/>
            </div>
            <div class="clear"></div>
        </div>
        
        <div class="content_droite">
            <div class="twitter">
                <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="Impose Ta Connerie">Tweet</a>
                <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
            </div>
        </div>
		
		<div class="content">
            <div class="facebook">
				<iframe src="http://www.facebook.com/plugins/like.php?href=http://www.example.com/page.html&layout=box_count&show_faces=true&width=65&action=like&font=arial&colorscheme=light&height=65"
				scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:65px; height:65px; margin-top:3px;" allowTransparency="true"></iframe>
			</div>
        </div>
		
    </div>
<?php 
    $compt_ann = $compt_ann + 1; } 
?>
     
<?php include('vue/site/include/footer.php'); ?>