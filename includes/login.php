
<?php 
    include_once '../includes/dbh.inc.php'; //accéder a la base de donnée
    session_start();
    if (isset($_POST['connexion']))     //Pour gérer la connexion en mode admin
    {
    if ($_POST['email'] === "admin" && $_POST['mdp'] === "admin123") {
    $_SESSION['admin'] = true;     //On est connecté en mode admin, les vues seront modifiées
    header("Location: ../pages/admin_accueil.php");
    }
        else{
                header("Location: ../index.php"); 
            }
    }
    if (isset($_POST['deconnexion'])) {  //Lorsque l'on se déconnecte
        $_SESSION['admin'] = false; //On est pu en mode admin donc c'est faux
        $_SESSION['user'] = ''; //On met le user à rien
        $_SESSION['mail'] = '';
        session_destroy();
        header('location: ../index.php');    //On redirige vers la page d'accueil
        exit();
    }
    ?>
    <?php
    include_once '../includes/dbh.inc.php'; //accéder a la base de donnée
    session_start();
    if (isset($_POST['connexion'])) 
    
    if(empty($_POST['email']) || empty($_POST['mdp']))
    {
        echo 'champ requis vide';
    }
    