<?php
   
    require_once('../controllers/validationAdminCreation.php'); // j'appel ma function validation qui se retrouve dans le fichier controllers
    require_once('../includes/signup.inc.php'); // j'appel ma fuction sauvegarde qui se retrouve dans le fichier includes
    include_once '../includes/dbh.inc.php';

    if(isset($_POST["btn_inscription"])){ // si onclik boutont on repart à la suite corespond au nom du bouton
        $validation = validerDonneesFormInscription($_POST, $_FILES); // je met la valeur de ma fonction pour aller à ma validation formulair
        
        if(!$validation["valide"]){
            $message = '<div class=" container mt-5 text-center alert alert-danger">'.$validation["message"].'</div>';
            echo $message;
        }else{
            $resultatDeSauvegarde = enregistrerDansBase($conn);
            if($resultatDeSauvegarde["succes"]){
               header("Location:.\admin_accueil.php"); // si tous les traitements son bon j'afiche  ma page d'accueil
            }else{
                $message = '<div class=" container mt-5 alert alert-danger">'.$resultatDeSauvegarde["erreur"].'</div>';
                echo $message;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.js"></script>
    <script src="../scripts/script.js"></script>
    <title>Formulaire d'inscription</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container d-flex">
                <a class="navbar-brand" href="home.php">
                <img src="../ressources/img/logo.png" alt="logo" height="100" class="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active ml-auto" aria-current="page" href="apprenant_edt.php">Accueil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <h1 class="mt-5 text-center">Formulaire d'inscription</h1>

    <section class="container-fluid d-flex justify-content-center my-5">
        <div id="formulaire_inscription" style="width:50%">
            <form class="d-flex flex-column" method="POST" action="./formulaire_inscription.php">

                <label class="mb-2" for="nom">Nom :</label>
                <input class=" form-control mb-4" type="text" name="nom" id="nom">

                <label class="mb-2" for="prenom">Prenom :</label>
                <input class=" form-control mb-4" type="text" name="prenom" id="prenom">

                <label class="mb-2" for="role">Statut :</label>
                <select class="form-control mb-4" name="role" id="role" onchange="check();">
                    <option value='1'>Formateur</option>
                    <option value='2'>Apprenant</option>
                </select>

                <div id="promotion">
                    <label class="mb-2" for="promotion">Promotion :</label>
                    <select class="form-control mb-4" name="promotion" id="promotion">
                        <!-- Récupérer les promos -->
                        <?php include_once '../includes/dbh.inc.php'; 
                            $sql = "SELECT * FROM promotion"; 
                            $result = $conn->query($sql); 
                            if ($result->num_rows > 0) {
                        // Afficher le résultat de chaque lignes
                        while($row = $result->fetch_assoc()){
                            echo '<option value="'.$row['id_promo'].'">'.$row['nom'].' '.$row['promotion'].' </option>';
                        }} ?>

                    </select>
                </div>

                <label class="mb-2" for="email">Adresse email :</label>
                <input class=" form-control mb-4" type="mail" name="email" id="email" required>

                <label class="mb-2" for="mdp">Mot de passe :</label>
                <input class=" form-control mb-4" type="password" name="mdp" id="mdp">

                
                <input type="submit" class="btn btn-secondary align-self-end" value="S'inscrire" name="btn_inscription"
                    id="btn_inscription">

            </form>
        </div>
    </section>
</body>

</html>