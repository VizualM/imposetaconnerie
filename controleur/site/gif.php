<?php $pageactive = 'gif';

 $compt_ann = 0; 
            $compte = "SELECT * FROM gif ";
            $prepare_compte = $db->prepare($compte);
            $execute_compte = $prepare_compte->execute();


include('vue/site/pages/gif.php'); ?>