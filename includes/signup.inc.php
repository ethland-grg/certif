<?php 

  function enregistrerDansBase($conn){
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $role = $_POST['role'];
    $promotion= $_POST['promotion'];
    $email = htmlentities($_POST['email']);
    $mdp = htmlentities($_POST['mdp']);
    $tuteur = htmlentities($_POST['statut_tuteur']);
    

    $sql = "INSERT INTO utilisateur (id_user,nom, prenom, email, mdp, role_id,tuteur) VALUES (NULL,'$nom','$prenom','$email','$mdp','$role','$tuteur');";
    $rec = "SELECT id_user FROM utilisateur ORDER BY id_user DESC LIMIT 1";

    $resulat = [];
    
    if (mysqli_query($conn, $sql)) {
     
      $result = mysqli_query($conn, $rec);
      $user= $result->fetch_assoc();
    
    $id_user = $user['id_user'];
    $request = "INSERT INTO utilisateur_promotion (id_user, id_promo, tuteur) VALUES ('$id_user','$promotion',0);";
      if (mysqli_query($conn, $request)) {
        $resulat = array("succes" => true);
      } else {
        $resulat = array("succes" => false);
        $resulat["erreur"] = "Error: " . $request . "<br>" . mysqli_error($conn);
      }
    } else {
      $resulat = array("succes" => false);
      $resulat["erreur"] = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    return $resulat;
  
  }

  ?>

