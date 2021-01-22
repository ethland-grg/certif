<?php 
include_once '../includes/dbh.inc.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$tuteur = $_POST['statut_tuteur'];
$id = $_POST['id'];

$sql = "UPDATE utilisateur SET nom= '$nom',prenom='$prenom',email='$email',tuteur= '$tuteur' WHERE id_user=$id ";

if (mysqli_query($conn, $sql)) {
    header("Location: ../pages/admin_listeformateur.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>`