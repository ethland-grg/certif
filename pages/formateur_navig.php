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
    <title>Page d'accueil : Formateur</title>
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
                <form action="home.php" method="POST">
                    <button class="btn btn-light btn-large rounded-pill" name="deconnexion">Se déconnecter 
                        <a class="navbar-brand" href="home.php">
                    <img src="../ressources/icones/logout.png" width="25" height="25" class="" alt="">
                        </a>
                    </button>
                </form>
            </div>
        </nav>
    </header>
    
    <section class="container-fluid d-flex flex-column justify-content-center align-items-center p-5">
        
            <div class=" container row d-flex flex-column text-center justify-content-center">
                <div class="col">
                    <h4> <?php  // pour recuperer utilisateur et afficher les choses enregistrer avec session on peut le recuperer à tous moment avec session_start();
        session_start();
        echo 'Bonjour '.$_SESSION['utilisateur']['nom'];
        ?></h4>
                </div>
                <div class="col pb-5">
                <h1>Bienvenue à votre espace</h1>
                </div>
            </div>
         
    </section>

     <!-- à reflechir les methodes pour recuprer la liste des apprenants pour sa prmotion -->

    <section class="container">
        <div class="row row-cols-md-2 row-cols-1">
            <div class="col d-flex align-items-center flex-column py-5">
                <a href="formateur_accueil.php">
                    <img src="../ressources/icones/list.png" class=" border border-rounded" width="200px" height="200px">
                </a>
                <p>Fiche de présence</p>
            </div>
            <div class="col d-flex align-items-center flex-column py-5">
                <a href="apprenant_edt.php">
                    <img src="../ressources/icones/icone2.png" class=" border border-rounded" width="200px" height="200px">
                </a>
                <p>Accèder à son emploi du temps</p>
            </div>
        </div>
    </section>

</body>

</html>