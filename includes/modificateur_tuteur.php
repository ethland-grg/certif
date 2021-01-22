<?php 
include_once '../includes/dbh.inc.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$id = $_POST['id'];

$sql = "UPDATE utilisateur SET nom= '$nom',prenom='$prenom',email='$email' WHERE id_user=$id ";

if (mysqli_query($conn, $sql)) {
    header("Location: ../pages/admin_listetuteurs.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>`