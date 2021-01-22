<?php
    function validerDonneesFormInscription($data ) { // toutes mes verification des champ commence ici
        $champs = [                                                 // je crée d'abord un tableau à verifier
          array("key" => "nom", "libele" => "Nom d'utilisateur"),
          array("key" => "prenom", "libele" => "Prenom d'utilisateur"),           
          array("key" => "email", "libele" => "email d'utilisateur"), 
          array("key" => "mdp", "libele" => "Mot de passe"),
        ];  
        
        
        foreach ($champs as $value){ // à l'aide de la fonction foreach je parcours le tableauc pour verifier les champs
          if ( !isset($data[$value["key"]]) || $data[$value["key"]] == "" ) {
            return array("valide" => false, "message" => 'Renseignez le champ : "'.$value["libele"].'"');   
            
          }

          if(in_array($value["key"], array("nom", "prenom" , )) && !preg_match("/[A-Za-z - ]+/", $data[$value["key"]])){
            return array("valide" => false, "message" => 'Le champ : "'.$value["libele"].'" doit être verifié');
          }
          if ( $value["key"] == "mdp" && strlen($data[$value["key"]]) <= 8 )  {
            return array("valide" => false, "message" => 'votre mot de passe est trop faible');
          }
          
          if ( $value["key"] == "mdp" && !preg_match("/[0-9a-z - ' @ ( ) ! # é è ]+/", $data[$value["key"]]) )  {
            return array("valide" => false, "message" => 'votre mot de passe doit comporter au moin un chiffre et caractère speciale');
          }

        } 
       
        return array("valide" => true);
      }



?>

