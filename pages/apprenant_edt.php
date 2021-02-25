<?php
    include_once '../includes/dbh.inc.php';
    session_start();
    $utilisateurConnecte = $_SESSION['utilisateur'];
   // $promoChoisi = $_SESSION['promo_choisi'];

    if(isset($_POST["addEvent"])){//Si on a clicker sur Enregistrer pour ajouter un évenement
        $promo = htmlentities($_POST['promo']);//On recupère les données du form
        $dateDebut = htmlentities($_POST['dateDebut']);
        $dateFin = htmlentities($_POST['dateFin']);

        $mysqlDateDebut = gmdate ('Y-m-d H:i:s', (new Datetime($dateDebut))->getTimestamp()); // definir les dates
        $mysqlDateFin = gmdate ('Y-m-d H:i:s', (new Datetime($dateFin))->getTimestamp());
        $sql = "INSERT INTO evenements (promotion_id, dateDebut, dateFin) VALUES ('$promo', '$mysqlDateDebut', '$mysqlDateFin');";// sql pour l'enregistrement

        if (!mysqli_query($conn, $sql)) { // enregistrer dans la base de données les infos si tous va bien sinon affiche une erreur
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    $sql = "SELECT * FROM evenements e INNER JOIN promotion p on p.id_promo = e.promotion_id and e.promotion_id = '$promoChoisi'" ; //sql pour récupérer les données
    $result = $conn->query($sql);//récupérer depuis la base de données les évenements avec les promos qui correspond pour chacun
    $evenements = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {//1) on boucle sur chaque ligne de la base
            $evenements[] = array(//2) on transforme les données de la base en tableau qui nous convient
                "title" => $row["nom"], 
                "start" => $row["dateDebut"]."Z", // "Z" pour le fuseau horaire UTC (sans décalage horaire)
                "end" => $row["dateFin"]."Z") ;
        }
    }

    $sql = "SELECT * FROM promotion" ; //sql pour récupérer les promotions de la base
    $result = $conn->query($sql);
    $promotions = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {//idem 1)
            $promotions[] = array(//idem 2)
                "id" => $row["id_promo"], 
                "nom" => $row["nom"]) ;
        }
    }
    $conn->close();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.js"></script>
    <script>
        var evenements = <?php echo json_encode($evenements); ?>;//on envoie dans javaScript les données récupérer depuis la base de données
        var promotions = <?php echo json_encode($promotions); ?>;
      //  var utilisateurConnecte = <?php// echo json_encode($_SESSION['user']); ?>; à revoir aussi quand la connexion soit re tablie
      var utilisateurConnecte = <?php echo json_encode($utilisateurConnecte); ?>; // à mettre apres la connecxion soit retablie
    </script>
    <script src="../scripts/script.js"></script>
    <title>Emploi du temps</title>
</head>

<body>

<!--
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
                            <a class="nav-link active ml-auto" aria-current="page" href="apprenant_presence.php">Voir ses présences</a> 
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
-->
    <section class="container-fluid h-100 text-center mt-5" id="edt_apprenant">

        <h1><?php
     //  session_start();
       
        echo $_SESSION['utilisateur'][ 'prenom' ].' '.$_SESSION['utilisateur'][ 'nom' ];
        ?></h1>

        <h2>Emploi du temps</h2>

        <div class="container" id='calendar'></div>
    </section>

    <form action="./apprenant_edt.php" method="POST">     
        <div class="modal" id="newEvent" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajout d'évenement</h5>
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">                
                        <h6 id="eventDate"></h6>
                        <label for="promo">Promotion</label>
                        <select id="promos" name="promo"></select>
                        <input id="dateDebut" name="dateDebut" type="hidden"/>
                        <input id="dateFin" name="dateFin" type="hidden"/>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="addEvent" class="btn btn-primary" value="Enregistrer" />
                </div>
                </div>
            </div>
        </div>
    </form>
</body>

<script>
    //pour chaques données de promo de la base on crée une option pour le champs select

    promotions.forEach(promo =>
        $('#promos').append(`<option value="${promo.id}">${promo.nom}</option>`)); 
</script>

</html>