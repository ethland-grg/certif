<?php include_once '../includes/dbh.inc.php'; //accéder a la base de donnée
        
                    // Start a Session
                    if (!session_id()) @session_start();
                    
                    $id = $_GET['id'];
                    // sql to delete a record
                    $sql = "DELETE FROM utilisateur WHERE id_user=$id";
                    
                    if ($conn->query($sql) === TRUE) {
                        $_SESSION['flash'] = 'Apprenant supprimer avec succès'; // Message de confirmation de suppresion 
                        header("Location: ../pages/admin_liste_apprenants.php");
                    } else {
                        echo "Erreur de suppression de l'apprenant: " . $conn->error;
                    }
                    
                    $conn->close();
                    ?>