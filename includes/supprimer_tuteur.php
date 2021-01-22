<?php include_once '../includes/dbh.inc.php'; //accéder a la base de donnée
        
                    // Lancer une session
                    if (!session_id()) @session_start();
                    
                    $id = $_GET['id'];
                    // Requête SQL pour supprimer une entrée
                    $sql = "DELETE FROM utilisateur WHERE id_user=$id";
                    
                    if ($conn->query($sql) === TRUE) {
                        $_SESSION['flash'] = 'Tuteur supprimer avec succès';
                        header("Location: ../pages/admin_listetuteurs.php");
                    } else {
                        echo "Error deleting record: " . $conn->error;
                    }
                    
                    $conn->close();
                    ?>