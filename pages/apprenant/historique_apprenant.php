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
    <title>Historique</title>
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
                            <a class="nav-link active ml-auto" aria-current="page" href="apprenant_edt.php">Accueil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="container-fluide">
        <h1 class="text-white text-center bg-dark" >
            <?php  
            session_start();
            echo 'Espace de '.$_SESSION['utilisateur'][ 'prenom' ].' '.$_SESSION['utilisateur'][ 'nom' ];
        ?></h1>
    </section>

    <section class="container text-center bg-light py-5" id="liste_apprenant_tuteur">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Justifié</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">01-01-2001</th>
                    <td>Absent</td>
                    <td> Oui </td>

                </tr>
                <tr>
                    <th scope="row">01-01-2001</th>
                    <td>Absent</td>
                    <td> Oui </td>
                </tr>
                <tr>
                    <th scope="row">01-01-2001</th>
                    <td>Absent</td>
                    <td> Oui </td>
                </tr>
            </tbody>
        </table>


    </section>

</body>

</html>