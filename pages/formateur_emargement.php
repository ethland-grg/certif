<?php  // mila manao requette otren'ty rehefa tsy ao anaty tableau BDD izay ilaina afichena
    include_once '../includes/dbh.inc.php'; 
    session_start();
    $promoId = $_SESSION['utilisateur']["promotion_id"];

    $sql = "SELECT * FROM promotion where id_promo = '$promoId'";
                      
    $result = $conn->query($sql); 
    $promotion = $result->fetch_assoc();

    if(isset($_POST["valider_emargement"])){
        
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.js"></script>
    <script src="../scripts/jq-signature.js"></script>
     
    
  
    <title>Feuille d'émargement</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container d-flex">
                <a class="navbar-brand" href="home.php">
                <img src="../ressources/img/logo.png" alt="logo" height="100" class="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active ml-auto" aria-current="page" href="choix_promo.php">Accueil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="d-flex flex-column text-center mt-5">
        <h1>
            Feuille d'émargement
        </h1>
        

        <p>Promotion : <?php 
               
                echo $promotion['nom'];
        ?> </p>

        <p>Date :<?php 
               
               echo $promotion['promotion'];
       ?> </p>
    </div>

    <section class="container text-center bg-light py-5">
        <form method="POST" action="./formateur_emargement.php">
            <input type="date" name="emargement-date"></input>
            <input type="numeric" name="duree-cours"></input>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Présent(e)</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include_once '../includes/dbh.inc.php'; // methode pour recuper l'info dans la promotion
                        $promo = $_SESSION['utilisateur']["promotion_id"];


                        $sql = "SELECT * FROM utilisateur where promotion_id = '$promo' and role_id = 2";
                      
                        $result = $conn->query($sql); 
                      
                        if ($result->num_rows > 0) {
                            // Afficher le résultat de chaque lignes
                            while($row = $result->fetch_assoc()){
                                echo ' <tr>
                                <input type="hidden" name="user_id'.$row['id_user'].'" value="'.$row['id_user'].'">
                                <th scope="row">'.$row['nom'].'</th>
                                <td>'.$row['prenom'].'</td>
                                <td> <input type="checkbox" name="est_present"></td>
                                
                            </tr>';
                            }
                        } 
                    ?>
                </tbody>
            </table>
            <div class="row justify-content-center">
                <div class="col-3 js-signature "> 
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Valider" name="valider_emargement">
        </form>
    </section>
    <script src="../scripts/signature.js"></script>
</body>

</html>