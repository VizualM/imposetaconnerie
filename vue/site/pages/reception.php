<?php include('vue/site/include/header.php');?>
<div id="body">


<?php

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 2000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['image']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['image']['tmp_name'], 'img/img/' . basename($_FILES['img']['name']));
                        echo "L'envoi a bien été effectué !";
                    
        
                }
                else echo "Fichier n'est pas une image";
        }
        else echo "Fichier trop gros";
}
?>
    
    
</div>