<?php
	class DB {
	    
	    public static function connexion_bdd(){
	        try {   
	            return new PDO('mysql:host=localhost;dbname=impose', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	        }
	        catch (Exception $e) {
	            die('Erreur : ' . $e->getMessage());
	        }
	    }
	}
?>
