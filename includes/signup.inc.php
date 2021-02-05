<?php 

  function enregistrerDansBase($conn){
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $role = $_POST['role'];
    $email = htmlentities($_POST['email']);
    $mdp = htmlentities($_POST['mdp']);

    $statut_tuteur = null;
    $promotion = null;
    if(isset($_POST['statut_tuteur'])){
      $statut_tuteur = htmlentities($_POST['statut_tuteur']);
    }
    if(isset($_POST['promotion'])){
      $promotion = htmlentities($_POST['promotion']);
    }

    $sql = "INSERT INTO utilisateur (id_user,nom, prenom, email, mdp, role_id, statut_tuteur,promotion_id) VALUES (NULL,'$nom','$prenom','$email','$mdp','$role',".($statut_tuteur == null ? "NULL" : "'$statut_tuteur'").",'$promotion');";
    $rec = "SELECT id_user FROM utilisateur ORDER BY id_user DESC LIMIT 1";

    $resulat = [];
    
    if (mysqli_query($conn, $sql)) {
     
      $result = mysqli_query($conn, $rec);
      $user= $result->fetch_assoc();
    
      if($promotion != null){
        $id_user = $user['id_user'];
        $request = "INSERT INTO utilisateur_promotion (id_user, id_promo, tuteur) VALUES ('$id_user','$promotion',0);";
        if (mysqli_query($conn, $request)) {
          $resulat = array("succes" => true);
        } else {
          $resulat = array("succes" => false);
          $resulat["erreur"] = "Error: " . $request . "<br>" . mysqli_error($conn);
        }
      }else {
        $resulat = array("succes" => true);
      }
    } else {
      $resulat = array("succes" => false);
      $resulat["erreur"] = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    return $resulat;
  
  }

  ?>

