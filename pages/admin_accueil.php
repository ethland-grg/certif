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
    <title>Page d'accueil administrateur</title>
</head>



<!------------- NAVBAR ---------------->
<header>
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container d-flex">
                <a class="navbar-brand" href="home.php">
                <img src="../ressources/img/logo.png" alt="logo" height="100" class="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form action="home.php" method="POST">
                    <button class="btn btn-light btn-large rounded-pill" name="deconnexion">Se déconnecter 
                        <a class="navbar-brand" href="#">
                    <img src="../ressources/icones/logout.png" width="25" height="25" class="" alt="">
                        </a>
                    </button>
                </form>
            </div>
        </nav>
    </header>
    <body>
    <section class="container-fluid bg-dark">
        <h1 class="text-white text-center" style="padding:">
        <?php  // pour recuperer utilisateur et afficher les choses enregistrer avec session on peut le recuperer à tous moment avec session_start();
        session_start();
        echo 'Bonjour '.$_SESSION['utilisateur'][ 'prenom' ].' '.$_SESSION['utilisateur'][ 'nom' ];
        ?></h1>
        <h5 class="text-white text-center" style="padding:">  
        vous etes connecté en tant que d'administration</h5>
    </section>

    <section class="container">
        <div class="row row-cols-md-3 row-cols-1">
            <div class="col d-flex align-items-center flex-column py-5">
                <a href="admin_creation.php">
                    <img src="../ressources/icones/icone7.png" class=" border border-rounded" width="200px" height="200px">
                </a>
                <p>Création compte & promos</p>
            </div>
            <div class="col d-flex align-items-center flex-column py-5">
                <a href="admin_gestion_compte_liste.php">
                    <img src="../ressources/icones/icone6.png" class=" border border-rounded" width="200px" height="200px">
                </a>
                <p>Gestion compte</p>
            </div>
            <div class="col d-flex align-items-center flex-column py-5">
                <a href="apprenant_edt.php">
                    <img src="../ressources/icones/icone2.png" class=" border border-rounded" width="200px" height="200px">
                </a>
                <p>Emploi du temps</p>
            </div>
            <div class="col d-flex align-items-center flex-column py-5">
                <a href="admin_messagerie.php">
                    <img src="../ressources/icones/icone4.png" class=" border border-rounded" width="200px" height="200px">
                </a>
                <p>Voir sa messagerie</p>
            </div>
        </div>
    </section>
</body>

</html>