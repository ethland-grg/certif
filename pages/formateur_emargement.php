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
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.js"></script>
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
                            <a class="nav-link active ml-auto" aria-current="page" href="apprenant_edt.php">Accueil</a>
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
        <h5> à voir comment recupere ses apprenant</h5>
        <h5> et afficher son emploi du temp</h5>
        <h5> et activer l'émergement</h5>

        <p>Promotion :</p>

        <p>Date :</p>
    </div>

    <section class="container text-center bg-light py-5">
        <form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Présent(e)</th>
                        <th scope="col">Absent(e)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Doe</th>
                        <td>John</td>
                        <td> <input type="checkbox" value=""></td>
                        <td><input type="checkbox" value=""></td>
                    </tr>
                    <tr>
                        <th scope="row">Doe</th>
                        <td>John</td>
                        <td> <input type="checkbox" value=""></td>
                        <td><input type="checkbox" value=""></td>
                    </tr>
                    <tr>
                        <th scope="row">Doe</th>
                        <td>John</td>
                        <td> <input type="checkbox" value=""></td>
                        <td><input type="checkbox" value=""></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" class="btn btn-primary" value="Valider" name="valider_emargement">
        </form>
    </section>

</body>

</html>