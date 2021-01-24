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
    <script src="../scripts/script.js"></script>
    <title>page d'administration</title>
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
                <button class="btn btn-light btn-large rounded-pill"> 
                    <a class="navbar-brand" href="home.php"  >Se déconnecter
                        <img src="../ressources/icones/logout.png"  width="25" height="25" class="" alt="">
                    </a>
                </button>
            </div>
        </nav>
    </header>

    <section class="container-fluid  text-center mt-0  " id="titre">
        <div class="container pt-5">
            <h1 class="titre" >
                Page d'Administration :
            </h1>
            <h1 class="titre" >
                Création d'un compte & promos
            </h1>
        </div>
        
       
       
    </section>
    <section class="container mt-5 mb-5 pt-5 pb-5 " id="corp">
        <div class=" container row d-flex ">
            <div class="col-lg-4  d-flex justify-content-around ">
                <div class="row d-flex flex-column text-center">
                    <div class="col" >
                        <a href="formulaire_inscription.php">
                            <img src="../ressources/icones/icone1.png" alt="" class="dimention" >
                        </a>
                    </div>
                    <div class="col">
                        <p>Créer un compte apprenant ou formateur</p>
                    </div>
            
                </div>
        
            </div>

            <div class="col-lg-4  d-flex justify-content-around">
                <div class="row d-flex flex-column text-center">
                    <div class=" col" >
                        <a href="inscriptionTuteur.php">
                            <img src="../ressources/icones/icone3.png" alt="" class="dimention" >
                        </a>
                    </div>
                    <div class="col">
                        <p>Créer un compte tuteur</p>
                    </div>
            
                </div>
        
            </div>

            <div class="col-lg-4  d-flex justify-content-around">
                <div class="row d-flex flex-column text-center">
                    <div class="col" >
                        <a href="formulaire_ajout_promotion.php">
                            <img src="../ressources/icones/icone5.png" alt="" class="dimention" >
                        </a>
                    </div>
                    <div class="col">
                        <p>Créer une promotion</p>
                    </div>
            
                </div>
        
            </div>
        </div>
        
    </section>
    <footer>
        <div class="contaner-fluid" id="couleurFond">
            <div class="row d-flex">
                <div class="col-md-1 col-3 mt-3 ms-5 ">
                    <img src="../ressources/charte_graphique/facebook.png" class="logo" alt="">
                </div>
                <div class="col-md-1 col-3 mt-3  ">
                    <img src="../ressources/charte_graphique/twitter.png" class="logo" alt="">
                </div>

            </div>

        </div>
    </footer>
</body>

</html>