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
    <title>Emploi du temp apprenant</title>
</head>



<!------------- NAVBAR ---------------->
<header>
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container d-flex">
                
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li>
                        <a class="navbar-brand" href="home.php">
                            <img src="../ressources/img/logo.png" alt="logo" height="100" class="">
                        </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active ml-auto" aria-current="page" href="choix_promo.php">Accueil</a>
                        </li>
                    </ul>
                </div>             
               
            </div>
            <div class="row container d-flex justify-content-end">
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
    <section class="container-fluid ">
        <?php
        require ("apprenant_edt.php");
        ?>
    </section>

    
</body>

</html>