<?php $pageactive = 'image'; ?>
<?php include('vue/site/include/header.php');?>

<div id="page" class="container">
	<div class="title">
		<h2>Images insolite</h2>	
	</div>

    <div>
        <?php 
        while($img = $prepare_compte->fetch()) { 
        ?>
        <div classe="box">
            <div class="gauche">
                <h3><?php echo $img['titre'];?></h3>
                <p>Date: <?php echo $img['date'];?></p>
                <p>Auteur: <?php echo $img['auteur'];?></p>
                <img src="img/img/<?php echo $img['nom_image'];?>.jpg" />
            </div>
        </div>        
        <?php 
            $compt_ann = $compt_ann + 1; } 
        ?>
    </div>

</div>
<?php include('vue/site/include/footer.php'); ?>