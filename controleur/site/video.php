<?php $pageactive = 'video';

 $compt_ann = 0; 
            $compte = "SELECT * FROM video ";
            $prepare_compte = $db->prepare($compte);
            $execute_compte = $prepare_compte->execute();




include('vue/site/pages/video.php'); ?>