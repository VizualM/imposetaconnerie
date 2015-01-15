<?php

    class user {
        
        public static function inscription($prenom, $nom, $pseudo, $mdp, $mdp_confirm, $mail, $mail_confirm) {
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
                    if(isset($pseudo)){
                    
                        $req = $bdd->prepare('INSERT INTO utilisateurs(Prenom, Nom, Pseudo, MotDePasse, Email) VALUES(:prenom, :nom, :pseudo, :mdp, :mail)');
                                $req->execute(array(

                                'prenom' => $prenom,
                                'nom' => $nom,
                                'pseudo' => $pseudo,
                                'mdp' => $mdp,
                                'mail' => $mail
                                ));
                            return true;
                    }
                    else{
                        echo "Entrer un pseudo.";
                    }
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

            $pseudo = $_POST['Pseudo'];
            $mdp = $_POST['MotDePasse'];

            if(isset($pseudo) AND $pseudo!="" AND isset($mdp) AND $mdp!="") {
                    


                $sql ="SELECT * FROM utilisateurs WHERE Pseudo='".$pseudo."' AND MotDePasse='".$mdp."'";
                $req = $bdd->prepare($sql);
                $result = $req-> execute();
                $result = $req-> fetch();

                $_SESSION['id_utilisateur'] = $result['ID'];
                $_SESSION['Prenom'] = $result['Prenom'];
                $_SESSION['Nom'] = $result['Nom'];
                $_SESSION['Pseudo'] = $result['Pseudo'];
                $_SESSION['Email'] = $result['Email'];




            }
            
        }
    }
?>
