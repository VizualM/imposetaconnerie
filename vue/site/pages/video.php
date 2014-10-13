<?php $pageactive = 'video'; ?>
<?php include('vue/site/include/header.php');?>

<div id="page" class="container">
	<div class="title">
		<h2>Video insolite</h2>	
	</div>

    <div>
        <?php 
        while($compt_ann < 5 && $video = $prepare_compte->fetch()) { 
        ?>
        <div>
            <div>
                <h3><?php echo $video['titre'];?></h3>
                <p>Date: <?php echo $video['date'];?></p>
                <p>Auteur: <?php echo $video['auteur'];?></p>
                <iframe width=100% height="400" src="//<?php echo $video['lien'];?>" ></iframe>
            </div>
        </div>        
        <?php 
            $compt_ann = $compt_ann + 1; } 
        ?>
    </div>
</div>
<?php include('vue/site/include/footer.php'); ?>