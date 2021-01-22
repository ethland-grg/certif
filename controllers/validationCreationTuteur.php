<?php
    function validerDonnesAjoutPromotion($data ) { // toutes mes verification des champ commence ici
        $champs = [                                                 // je crée d'abord un tableau à verifier
          array("key" => "nom_formation", "libele" => "Nom de la Formation"),
          array("key" => "debut_promotion", "libele" => "Année début de la formation"),           
          array("key" => "fin_promotion", "libele" => "Année fin de la formation"), 
          
        ];  
        
        
        foreach ($champs as $value){ // à l'aide de la fonction foreach je parcours le tableauc pour verifier les champs
          if ( !isset($data[$value["key"]]) || $data[$value["key"]] == "" ) {
            return array("valide" => false, "message" => 'Renseignez le champ : "'.$value["libele"].'"');   
            
          }

          if(in_array($value["key"], array("nom_formation",)) && !preg_match("/[A-Za-z - ]+/", $data[$value["key"]])){
            return array("valide" => false, "message" => 'Le champ : "'.$value["libele"].'" doit être verifié');
          
        } 
       
        return array("valide" => true);
      }

    }

?>

