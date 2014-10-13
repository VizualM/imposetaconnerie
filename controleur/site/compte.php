<?php 
$pageactive = 'compte';
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


<?php include('vue/site/pages/compte.php'); ?>