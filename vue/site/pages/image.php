<?php $pageactive = 'image'; ?>
<?php include('vue/site/include/header.php');?>

<?php 
    while($img = $prepare_compte->fetch()) { 
?>
    <div class="article">
        
        <div class="content_gauche">
            
            <div class="info_image">
                <h2><?php echo $img['titre'];?></h2>
                <p>Date: <?php echo $img['date'];?></p>
                <p>Auteur: <?php echo $img['auteur'];?></p>
            </div>
            
            <div class="images">
                <img title="<?php echo $img['nom_image'];?>" src="img/img/<?php echo $img['nom_image'];?>"/>
            </div>
            
        </div>
        
        <a class="twitter-share-button"
           href="https://twitter.com/share">
            Tweet
        </a>
        <script type="text/javascript">
            window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))   {return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
        </script>
    
            
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