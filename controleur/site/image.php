<?php 
$pageactive = 'image'; 

$compt_ann = 0; 
    $compte = "SELECT * FROM img ";
    $prepare_compte = $db->prepare($compte);
    $execute_compte = $prepare_compte->execute();




include('vue/site/pages/image.php'); 
?>