<?php 
include_once '../includes/dbh.inc.php';
function EnregistrerFormation($conn){
  $nomFormation = htmlentities($_POST['nom_formation']);
  $debutPromotion = htmlentities($_POST['debut_promotion']);
  $finPromotion = htmlentities($_POST['fin_promotion']);
  $promotion= $debutPromotion.'-'.$finPromotion;

  $sql = "INSERT INTO promotion (nom,promotion) VALUES ('$nomFormation', '$promotion');";

  $resulat = [];

  if (mysqli_query($conn, $sql)) {
      header("Location: ../index.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}
  ?>`

