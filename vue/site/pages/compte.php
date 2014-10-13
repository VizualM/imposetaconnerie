<?php 
$pageactive = 'compte';
include('vue/site/include/header.php');
include('modele/connexion_bdd.php');
$message="";

if (!empty($_POST['Envoyer']))
{
    if(($_POST["prenom"]) && ($_POST["nom"]) && ($_POST["pseudo"]) && ($_POST["MDP"]) && ($_POST["email"]))
        {
            $prenom=($_POST["prenom"]);
            $nom=($_POST["nom"]); 
            $pseudo=($_POST["pseudo"]); 
            $MDP=($_POST["MDP"]); 
            $email=($_POST["email"]);

            $req= "INSERT INTO utilisateurs( Prenom, Nom, Pseudo, MotDePasse, Email) VALUES ('$prenom','$nom', '$pseudo', '$MDP', '$email')";
            $db->exec($req);
        
            $message ="compte ajouter";
        }
}


if (!empty($_POST['Connecter']))
{
    if(($_POST["Pseudo"]) && ($_POST["MotDePasse"]))
        {
            $req=$db->prepare("SELECT *
                                FROM utilisateurs
                                WHERE pseudo=:varPseudo
                                AND motDePasse=:varMotDePasse");
        
            $reponse=$req->execute(array("varPseudo"=>$_POST["Pseudo"],"varMotDePasse"=>$_POST["MotDePasse"]));
        
            if ($reponse)
            {
                $donnees=$req->fetch();
                $message="Bonjour"." ".$donnees["Nom"]." ".$donnees["Prenom"];
            }
        }
}
?>



<div id="page" class="container">
   <?php echo $message; ?>
    
    <form method="post">
        <fieldset>
            <legend>Connexion:</legend>
            
            <label>Pseudo</label>
            <input type="text" name="Pseudo">
            </br>

            <label>Mot de passe</label>
            <input type="password" name="MotDePasse">
            </br>
    
            <input type="reset" value="Effacer" >
            <input type="submit" value="Connecter" name="Connecter">

        </fieldset>
        <fieldset>
            <legend>Crée Compte</legend>
            
            <label>Prenom</label>
            <input type="text" name="prenom">
            </br>

            <label>Nom</label>
            <input type="text" name="nom">
            </br>

            <label>Pseudo</label>
            <input type="text" name="pseudo">
            </br>

            <label>Mot de passe</label>
            <input type="password" name="MDP">
            </br>

            <label>Email</label>
            <input type="email" name="email">
            </br>

            <input type="reset" value="Effacer" >
            <input type="submit" value="Crée Compte" name="Envoyer">
        </fieldset>
    </form>
</div>



<?php include('vue/site/include/footer.php'); ?>