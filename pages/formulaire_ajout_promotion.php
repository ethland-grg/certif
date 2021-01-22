<?php
   
    require_once('../controllers/validationAjoutPromotion.php'); // j'appel ma function validation qui se retrouve dans le fichier controllers
    require_once('../includes/add_prom.php'); // j'appelle ma fonction sauvegarde qui se retrouve dans le fichier includes
    include_once '../includes/dbh.inc.php';

    if(isset($_POST["btn_ajout_promotion"])){ // si onclik boutont on repart à la suite corespond au nom du bouton
        $validation = validerDonneesAjoutPromotion($_POST, $_FILES); // je met la valeur de ma fonction pour aller à ma validation formulair
        
        if(!$validation["valide"]){
            $message = '<div class=" container mt-5 text-center alert alert-danger">'.$validation["message"].'</div>';
            echo $message;
        }else{
            $resultatDeSauvegarde = EnregistrerFormation($conn);
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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Formulaire d'ajout d'une promotion</title>
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
                            <a class="nav-link active ml-auto" aria-current="page" href="apprenant_edt.php">Accueil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <h1 class="mt-5 text-center">Formulaire d'ajout d'une promotion</h1>

    <section class="container-fluid d-flex justify-content-center my-5">
        <div id="formulaire_promotion" style="width:50%">
            <form class="d-flex flex-column" method="POST" action="./formulaire_ajout_promotion.php"> 

                <label class="mb-2" for="nom_formation">Nom</label>
                <input class=" form-control mb-4" type="text" name="nom_formation" id="nom_formation" > 

                <label class="mb-2" for="annee">Annees (Début - Fin)</label>
                <div class="d-flex">
                    <input class="form-control mb-4 w-50" type="number" name="debut_promotion" id="debut_promotion"  min="2020">
                    <input class="form-control mb-4 w-50" type="number" name="fin_promotion" id="fin_promotion"  min="2021">
                </div>

                <input type="submit" class="btn btn-secondary align-self-end" value="Ajouter" name="btn_ajout_promotion" id="btn_ajout_promotion">

            </form>
        </div>
    </section>


</body>

</html>