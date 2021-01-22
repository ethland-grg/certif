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

    <title>Administrateur Messagerie</title>
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
                <button class="btn btn-light btn-large rounded-pill">Se déconnecter 
                    <a class="navbar-brand" href="#">
                <img src="../ressources/icones/logout.png" width="25" height="25" class="" alt="">
                    </a>
                </button>
            </div>
        </nav>
    </header>

    <!---------- Tableau messagerie ---------->
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>De</th>
                        <th>Date</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">john.doe@mail.com</a></td>
                        <td>07/01/2021</td>
                        <td>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sint est illum perspiciatis facilis quae doloribus, asperiores iste suscipit distinctio sequi. Reprehenderit saepe similique nostrum, assumenda dolore accusamus nisi mollitia. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi dicta architecto reprehenderit aspernatur quasi omnis quos, eveniet cupiditate numquam sint velit nulla praesentium reiciendis. Aspernatur esse eius alias quos voluptas?</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">james.bond@mail.com</a></td>
                        <td>15/12/2020</td>
                        <td>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sint est illum perspiciatis facilis quae doloribus, asperiores iste suscipit distinctio sequi. Reprehenderit saepe similique nostrum, assumenda dolore accusamus nisi mollitia.</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">neo.anderson@mail.com</a></td>
                        <td>23/O5/2020</td>
                        <td>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sint est illum perspiciatis facilis quae doloribus, asperiores iste suscipit distinctio sequi. Reprehenderit saepe similique nostrum, assumenda dolore accusamus nisi mollitia.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex flex-column align-items-start">
                    <div>De: john.doe@mail.com</div>
                    <div>Raison : Malade</div>
                    <div>Date : 01/01/2021</div>
                </div>
                <div class="modal-body">
                    <textarea name="commentaire" id="" cols="55" rows="10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium doloremque nam iste dolor natus fugit repudiandae vitae, atque laborum ab ullam minus dicta nobis sapiente inventore nemo ducimus consequatur aperiam.</textarea>
                    <div><a href="#" class="text-decoration-none">Voir pdf</a></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


    <!-- <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script> -->
</body>

</html>