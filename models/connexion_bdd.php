<?php
	class DB {
	    
	    public static function connexion_bdd(){
	        try {   
	            return new PDO('mysql:host=eu-cdbr-west-01.cleardb.com;dbname=heroku_0b5041832133499', 'be4af0ffb51ffe', 'd5c7dd03', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	        }
	        catch (Exception $e) {
	            die('Erreur : ' . $e->getMessage());
	        }
	    }
	}
?>
