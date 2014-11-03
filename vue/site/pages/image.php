<?php $pageactive = 'image'; ?>
<?php include('vue/site/include/header.php');?>


    <div class="article">
        <?php 
        while($img = $prepare_compte->fetch()) { 
        ?>
        <div class="content">
                <h2><?php echo $img['titre'];?></h2>
                <p>Date: <?php echo $img['date'];?></p>
                <p>Auteur: <?php echo $img['auteur'];?></p>
                <img class="caption" title="<?php echo $img['nom_image'];?>" src="img/img/<?php echo $img['nom_image'];?>"/>
               
        
        </div>        
        <?php 
            $compt_ann = $compt_ann + 1; } 
        ?>
    </div>

</div>
<?php include('vue/site/include/footer.php'); ?>