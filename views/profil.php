<div class="article">

    <div class="content_gauche">

        <form method="post" action="<?php echo $app->urlFor('UpdateIdentite'); ?>" class="profil">
            <p>
            <label for="pseudo">Identité</label><br/>
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo : <?php echo $_SESSION['Pseudo'] ?>" size="30" /><br/><br/>
            <input type="text" name="nom" id="nom" placeholder="nom : <?php echo $_SESSION['Nom'] ?>" size="30" /><br/><br/>
            <input type="text" name="prenom" id="prenom" placeholder="prenom : <?php echo $_SESSION['Prenom'] ?>" size="30" /><br/><br/>

            <input type="submit" value="Changer" class="valider" />
        </form>

        <form method="post" action="<?php echo $app->urlFor('UpdateMDP'); ?>" class="profil">
            <label for="mdp">Changer Mot de passe</label><br />
            <br />
            <input type="password" name="Oldmdp" id="Oldmdp" placeholder="Ancien mot de passe" size="30" /><br /><br />
            <input type="password" name="mdp" id="mdp" placeholder="Nouveau mot de passe" size="30" /><br />
            <input type="password" name="mdp_confirm" id="mdp_confirm" placeholder="Comfirmer mot de passe" size="30" /> <br/><br/>

            <input type="submit" value="Changer" class="valider" />
        </form>

        <form method="post" action="<?php echo $app->urlFor('UpdateEmail'); ?>" class="profil">
            <label for="mail">Modifier email</label><br />
            <br />
            <input type="email" name="mail" id="mail"  placeholder="Nouvelle email" size="30" /><br />
            <input type="email" name="mail_confirm" id="mail_confirm" placeholder="Comfirmer nouvelle email" size="30" />
            <br />

            <br />

            <input type="submit" value="Changer" class="valider" />
            </p>

        </form>

    </div>

    <div class="content_droite">
       <form action="<?php echo $app->urlFor('UploadImage'); ?>" method="post" class="profil" enctype="multipart/form-data">
            <p>
                    Upload Image (jpg,jpeg,pnj) :<br/>
                    <input type="text" name="Titre" id="Titre" placeholder="Titre" size="30" /><br/>
                    <input type="file" name="Image" /><br/>
                    <input type="submit" value="Envoyer le fichier" />
            </p>
        </form>

        <form action="<?php echo $app->urlFor('UploadGif'); ?>" method="post"  class="profil"enctype="multipart/form-data">
            <p>
                    Upload Gif :<br/>
                    <input type="text" name="Titre" id="Titre" placeholder="Titre" size="30" /><br/>
                    <input type="file" name="Gif" /><br/>
                    <input type="submit" value="Envoyer le fichier" />
            </p>
        </form>

        <form action="<?php echo $app->urlFor('UploadVideo'); ?>" method="post" class="profil">
            <p>
                    Upload Video (You Tube) :<br/>
                    <input type="text" name="Titre" id="Titre" placeholder="Titre" size="30" /><br/>
                    <input type="text" name="video" id="video" placeholder="URL You Tube" size="30" /><br />
                    <input type="submit" value="Envoyer la vidéo" />
            </p>
        </form>
    </div>

</div>