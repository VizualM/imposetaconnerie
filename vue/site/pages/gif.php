<?php $pageactive = 'gif'; ?>
<?php include('vue/site/include/header.php');?>

<div id="page" class="container">
	<div class="title">
		<h2>Gif insolite</h2>	
	</div>

    <div>
        <?php 
        while($gif = $prepare_compte->fetch()) { 
        ?>
        <div classe="box">
            <div class="gauche">
                <h3><?php echo $gif['titre'];?></h3>
                <p>Date: <?php echo $gif['date'];?></p>
                <p>Auteur: <?php echo $gif['auteur'];?></p>
                <img src="img/gif/<?php echo $gif['nom_image'];?>.gif" />
            </div>
        </div>        
        <?php 
            $compt_ann = $compt_ann + 1; } 
        ?>
    </div>

</div>
<?php include('vue/site/include/footer.php'); ?>