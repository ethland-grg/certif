
<?php 
    include_once '../includes/dbh.inc.php'; //accéder a la base de donnée
    session_start();
    if(isset($_SESSION['utilisateur']) && $_SESSION['utilisateur'] != null)
        header("Location: ../pages/admin_accueil.php");
    if (isset($_POST['connexion']))     //Pour gérer la connexion en mode admin
    {
        // if ($_POST['email'] === "admin" && $_POST['mdp'] === "admin123") {
        //     $_SESSION['admin'] = true;     //On est connecté en mode admin, les vues seront modifiées
        //     header("Location: ../pages/admin_accueil.php");

        $sql = "SELECT * FROM utilisateur WHERE email = '".$_POST['email']."' and mdp = '".$_POST['mdp']."';" ;
        $result = $conn->query($sql);
        $utilisateur = $result->fetch_assoc();
        $_SESSION['utilisateur'] = $utilisateur;
        if($utilisateur == null){
           echo '<div class=" container mt-5 text-center alert alert-danger">Mot de passe ou identifiant erroné</div>';
        }else if($utilisateur["role_id"] == 3){//si admin on atterit sur sa page d'accueil
            header("Location: ../pages/admin_accueil.php");
        }else if($utilisateur["role_id"] == 4){ // si tuteur on atterit sur sa page d'accueil
            header("Location: ../pages/tuteur_accueil.php");
        }else if($utilisateur["role_id"] == 2){ // si apprenant on atterit sur sa page d'accueil
            header("Location: ../pages/choix_promo_appr.php");
        }else if($utilisateur["role_id"] == 1){ // formateur on atterit sur sa page d'accueil
            header("Location: ../pages/choix_promo.php");
        }
    }
    
    if (isset($_POST['deconnexion'])) {  //Lorsque l'on se déconnecte
        $_SESSION['user'] = ''; //On met le user à rien
        session_destroy();
        header('location: home.php');    //On redirige vers la page d'accueil
        exit();
    }
    // if (isset($_POST['connexion'])) 
    
    // if(empty($_POST['email']) || empty($_POST['mdp']))
    // {
    //     echo 'champ requis vide';
    // }
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
    <title>connexion</title>
</head>

    <body>

        <header>
            <nav class="navbar navbar-light">
                <div class="container logo">
                    <a class="navbar-brand" href="https://www.aprunformation.fr/" >
                    <img src="../ressources/img/logo.png" alt="logo" height="100" class="">
                    </a>
                </div>
            </nav>
        </header>

        <section class="container-fluid d-flex flex-column w-25 justify-content-center align-items-center" id="connexion">
            <h3 class="bienvenue text-center mt-2">Bienvenue</h3>
            <div  id="formulaire_connexion">
                <form method="POST" action="./home.php">

                    <div class="d-flex flex-column p-2 "  > 
                        <label for="">votre adresse mail *</label>
                        <input class="my-2 form-control align-items-end " type="text" name="email" id="mail_utilisateur" placeholder="Adresse email">
                        <label for="">votre mot de passe *</label>
                        <input class="my-2 form-control align-items-end " type="password" name="mdp" id="mdp_utilisateur" placeholder="Mot de passe">
                        <input type="submit" class="btn btn-primary w-60 align-items-center" value="Se connecter" name="connexion">
                    </div>
    
                </form>
            </div>
        </section>
    </body>

</html>