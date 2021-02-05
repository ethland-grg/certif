<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.js"></script>
    <title>Stats de présence</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container d-flex">
                <a class="navbar-brand" href="home.php">
                <img src="../../ressources/img/logo.png" alt="logo" height="100" class="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active ml-auto" aria-current="page" href="apprenant_accueil.php">Accueil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="container-fluid h-100 mt-5 " id="presence_apprenant">
        <h1 class="text-white text-center bg-dark" >
            <?php  
            session_start();
            echo 'Espace de '.$_SESSION['utilisateur'][ 'prenom' ].' '.$_SESSION['utilisateur'][ 'nom' ];
            ?></h1>
        <h3 class="text-center">Stats de présence</h3>

        <div class="container py-5 w-75 bg-light">
            <h2>Présence/Absence :</h2>
            <p class="py-2">
                Nombres d'heures de présence :
            </p>
            <p class="py-2">
                Nombres d'heures d'absence :
            </p>
            <p class="py-2">
                Pourcentage de présence :
            </p>
        </div>

        <div class="container mt-5 text-center py-5">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-light border  " data-bs-toggle="modal" data-bs-target="#exampleModal">
                Justifier une absence
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Absence</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <select class="form-control" id="motif" name="motif">Choisir un motif
                                    <option>Maladie</option>
                                    <option>Rendez-vous</option>
                                    <option>Autre</option>
                                </select>
                                <input type="date" class="form-control my-2" id="date_motif" name="date_motif">
                                <input type="file" class="form-control my-2" id="justificatif" name="justificatif">
                                <textarea class="form-control my-2" id="description_motif" name="description_motif" rows="10"></textarea>
                                <input type="submit" class="btn btn-secondary" value="Envoyer" name="envoi_justificatif">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>