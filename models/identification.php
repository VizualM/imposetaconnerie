<div id="identification">
  
    <button class="tooltip medium  pill" data-content="#tooltipcontentID" data-action="click">Connexion</button>

    <!-- Tooltip Content -->
    <div class="tooltip-content" id="tooltipcontentID">
        
          <form role="form" method="POST" action="modele/site/connexion.php">
              <?php 
              //Gestion des erreurs suivant la connexion
              if(isset($_GET["erreur"])){
                switch ($_GET["erreur"]) {
                  case 'inconnu':
                    echo "Utilisateur inconnu";
                    break;
                  case 'form':
                    echo "Vous devez remplir les champs";
                    break;
                  default:
                    # code...
                    break;
                }
              }
            ?>

            <input type="text" name="Pseudo" placeholder="Pseudo">
            <input type="password" name="MotDePasse" placeholder="Mot de passe">
            <button type="submit">OK!</button>
        </form>
        
        <a href="<?php echo $app->urlFor('inscription') ?>">Créer un compte</a>
        
    </div>
</div>
  