<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.js"></script>
    <script src="../scripts/script.js"></script>
    <title>Liste de formateurs</title>
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
                <button class="btn btn-light btn-large rounded-pill">Se déconnecter 
                    <a class="navbar-brand" href="#">
                <img src="../ressources/icones/logout.png" width="25" height="25" class="" alt="">
                    </a>
                </button>
            </div>
        </nav>
    </header>

    <div class="d-flex flex-column text-center mt-5">
        <h1>
            Liste de formateurs
        </h1>

    </div>

    <section class="container text-center bg-light py-5" id="liste_apprenant_tuteur">
            <?php require '../library/FlashMessages.php';   
                    //Commencer une session
                    session_start(); 
                    if(isset($_SESSION['flash'])){
                        echo '<div class="alert alert-primary" role="alert">
                        '.$_SESSION['flash'].'
                        </div>';
                    };
            unset($_SESSION['flash']); ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Adresse mail</th>
                        <th scope="col">Tuteur</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php 
                    include_once '../includes/dbh.inc.php'; //accéder a la base de donnée
                   
                   
                    $formateurs = "SELECT * FROM utilisateur WHERE role_id = 1;" ; // selection ce qu'on veut recuperer dans BDD
                    $resultat = $conn->query($formateurs);
                   
                    if ($resultat->num_rows > 0) {
                        // Afficher les résultats de chaque lignes
                        while ($formateur = $resultat->fetch_assoc()){;
                            if( "role_id" != 2 && "statut_tuteur " > 0) { // condition si tuteur  OUI ou NON 
                                $tuteur = 'oui';
                            }else{
                                $tuteur = 'non';
                            }
                   
                                //afficher les valeurs dans le tableau
                            echo '<tr> 
                                <th scope="row"><a href="#">' .$formateur["nom"].'</a></th>
                                <td>' .$formateur["prenom"].'</td>
                                <td> ' .$formateur["email"].'</td>
                                <td>' .$tuteur.'</td>
                                <td>
                                    <form method="POST" enctype="multipart/form-data" action="modification_formateur.php?id='.$formateur['id_user'].'">
                                         <input class="btn-sm btn-primary" type="submit" value="Modifier" name="" >
                                     </form>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary modalBtn" onclick= supApp("'.$formateur['id_user'].'") data-toggle="modal" data-target="#supmodal">
                                    Supprimer
                                    </button>
                                </td>
                                </tr>';
                        
                        
                        } 
                    
                    }
                    $conn->close();
                ?>
                    
                </tbody>
            </table>
    </section>
    <!-- Modal -->
        <div class="modal fade" id="supmodal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Avertissement</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> Voulez vous supprimer le formateur?
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <form method="POST" enctype="multipart/form-data" action="" id='validationForm'>
                            <input class="btn-sm btn-primary" type="submit" value="Supprimer" name="" id="supprimerBtn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

