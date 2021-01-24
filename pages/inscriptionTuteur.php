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
    <title>inscription tuteur</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container d-flex">
                <a class="navbar-brand" href="home.php">APRUN</a>
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

    <h1 class="mt-5 text-center">Création Tuteur</h1>

    <section class="container-fluid d-flex justify-content-center my-5">
        <div id="formulaire_inscription" style="width:50%">
            <form class="d-flex flex-column" method="POST" action="./formulaire_inscription.php">

                <input type="hidden" name="role" value="4"/>

                <label class="mb-2" for="nom">Nom :</label>
                <input class=" form-control mb-4" type="text" name="nom" id="nom">

                <label class="mb-2" for="prenom">Prenom :</label>
                <input class=" form-control mb-4" type="text" name="prenom" id="prenom">

                <label class="mb-2" for="statut_tuteur">Statut :</label>
                <select class="form-control mb-4" name="statut_tuteur" id="statut_tuteur" onchange="check();">
                    <option value='1'>Extérieur</option>
                    <option value='2'>Interieur</option>
                </select>

               

                <label class="mb-2" for="email">Adresse email :</label>
                <input class=" form-control mb-4" type="mail" name="email" id="email" required>

                <label class="mb-2" for="mdp">Mot de passe :</label>
                <input class=" form-control mb-4" type="password" name="mdp" id="mdp">

                
                <input type="submit" class="btn btn-secondary align-self-end" value="Valider" name="btn_inscription"
                    id="btn_inscription">

            </form>
        </div>
    </section>


</body>

</html>