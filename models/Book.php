<?php

require 'models/connexion_bdd.php';


/*  class Book {

    static function all() {
      // fake response of a "SELECT * from books" SQL request
      return array(
        array(
          "id" => 1,
          "title" => "Alice au pays des merveilles"
        ),
        array(
          "id" => 2,
          "title" => "Tintin au Tibet"
        ),
        array(
          "id" => 3,
          "title" => "Le parfum"
        )
      );
    }

    static function getBook($book_id) {
      // fake response of a "SELECT * from books WHERE ID = $book_id" SQL request
      return array(
        "id" => 1,
        "title" => "Alice au pays des merveilles",
        "description" => "<p>'Perhaps it hasn't one,' Alice ventured to remark.</p><p>'Tut, tut, child!' said the Duchess. 'Everything's got a moral, if only you can find it.' And she squeezed herself up closer to Alice's side as she spoke.</p><p>Alice did not much like keeping so close to her: first, because the Duchess was VERY ugly; and secondly, because she was exactly the right height to rest her chin upon Alice's shoulder, and it was an uncomfortably sharp chin. However, she did not like to be rude, so she bore it as well as she could.</p>",
        "author" => "Lewis Caroll",
        "remaining" => 3
      );
    }

  }
*/


    class Image {
        
            static function all() {
            
                global $db;
      
          	//requete dans variable
            $ma_requete = 'SELECT * FROM img';
            //prepare
            $prepa_marequete = $db->prepare($ma_requete);
            //execute
            $exerc_marequette = $prepa_marequete->execute();
            //affiche

        }
        static function getImage($image_id) {
        
        } 
    
    }



    class Gif {
            static function all() {

            }
            static function getGif($gif_id) {

            } 

        }
?>
