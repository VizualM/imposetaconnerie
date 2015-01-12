<?php

    class user {
        
        public static function inscription($prenom, $nom, $pseudo, $mdp, $mail) {
            $bdd=DB::connexion_bdd();
            
            $prenom = mysql_real_escape_string(htmlspecialchars($_POST['prenom']));
            $nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
            $pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
            $mdp = $_POST['mdp'];
            $mdp_confirm = $_POST['mdp_confirm'];
            $mail = mysql_real_escape_string(htmlspecialchars($_POST['mail']));
            $mail_confirm = mysql_real_escape_string(htmlspecialchars($_POST['mail_confirm']));
        
            if($mdp==$mdp_confirm){
                if($mail==$mail_confirm){
                    
                $req = $bdd->prepare('INSERT INTO utilisateurs(Prenom, Nom, Pseudo, MotDePasse, Email) VALUES(:prenom, :nom, :pseudo, :mdp, :mail)');
                        $req->execute(array(
                        
                        'Prenom' => $prenom,
                        'Nom' => $nom,
                        'Pseudo' => $pseudo,
                        'MotDePasse' => $mdp,
                        'Email' => $mail
                        ));
                    return true;
                }
                else {
                        echo "Les deux courriels indiqué ne corresponde pas.";
                        }
            }
            else {
                echo "Les deux mot de passe indiqué ne corresponde pas.";
            }
        }


        public static function deconnexion() {
            $_SESSION=array();
            session_destroy();
        
        }


        public static function connexion($pseudo,$mdp) {
            $bdd = DB::connexion_bdd();

            $pseudo = $_POST['Pseudo'];;
            $mdp = $_POST['MotDePasse'];

            if(isset($pseudo) AND $pseudo!="" AND isset($mdp) AND $mdp!="") {

                $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE Pseudo=:Pseudo AND MotDePasse=:MotDePasse'); 
                $reponse = $req->execute(array(
                    'Pseudo' => $_POST['Pseudo'],
                    'MotDePasse' => $_POST['MotDePasse']
                ));
                
                $donnees = $req->fetch();   
                if($donnees){ 
                  foreach ($donnees as $key => $value) {
                    
                    $_SESSION[$key]=$value;
                    
                  }
                }
            }
            
        }
    }
?>				          