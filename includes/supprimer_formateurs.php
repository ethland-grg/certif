<?php include_once '../includes/dbh.inc.php'; //accéder a la base de donnée
        
                    // Start a Session
                    if (!session_id()) @session_start();
                    
                    $id = $_GET['id'];
                    // sql to delete a record
                    $sql = "DELETE FROM utilisateur WHERE id_user=$id";
                    
                    if ($conn->query($sql) === TRUE) {
                        $_SESSION['flash'] = 'Formateur supprimer avec succès';
                        header("Location: ../pages/admin_listeformateur.php");
                    } else {
                        echo "Error deleting record: " . $conn->error;
                    }
                    
                    $conn->close();
                    ?>