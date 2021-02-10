<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'asteriac_asteria');

    if ($con->connect_error) {
        die("Connexion Failed" . $con->connect_error);
    }

    $sql = "SELECT * FROM `meta` ";

    $result =    $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<meta name="' . $row['name'] . '" content="' . $row['content'] . '"/>';
        }
    } ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ASTERIA CAR LUXURY </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>

    </style>
</head>
<!-- Footer-->


<body>
    <!-- Navigation-->
    <div class="d-flex flex-row p-2 justify-content-between kd-on">
        <div class="p-2 kd-on text-balck-50">
            <img height="40px" src="assets/img/logo.jpg" />
            Asteria Car
        </div>
        <div class="p-2 kd-on">
            <!-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
            </svg>
            06 88 60 00 00</a>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
            </svg>
            asteriacar@gmail.com
            </a> -->
            <!-- <img height="40px" src="assets/img/logo.jpg" />
            Asteria Car -->
        </div>
        <div class="p-2 kd-on">
            <img height="30px" src="assets/img/france.png" />
            <img height="30px" src="assets/img/maroc.png" />
            <img height="30px" src="assets/img/etats-unis.png" />
        </div>
    </div>

    <!-- SNIPPET CODE: 1.NAVBAR TOGLLE BUTTON-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">


        <!-- SNIPPET CODE: 1.NAVBAR TOGLLE BUTTON-->
        <div class="navbar-toggler-left">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>


        <!-- SNIPPET CODE: 2.NAVBAR MAIN MENU-->

        <div class="collapse navbar-collapse flex-column " id="navbar">

            <ul class="navbar-nav  w-100 justify-content-end px-3">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Acceuil <span class="sr-only"></span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="model.php">Modèles <span class="sr-only"></span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="conditionsGenerales.php">Condition générales <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="blog.php">blog <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact<span class="sr-only"></span></a>
                </li>
            </ul>
        </div>

    </nav>

    <section class="page-section bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Contact</h2>
            <hr class="divider light my-4" />
            <div style="margin: 50px;"></div>

        </div>

    <form method="post" action="contactAdd.php">
        <div class="row justify-content-center" style="margin: 0px;">
            <div class="col-10">
                <div class="row">
                    <div class="col-md-6">
                        <label for="firstName">Nom :</label>
                        <input type="text" id="inputEmail" name="nom" class="form-control" placeholder="Nom" required="" autofocus="">
                    </div>
                    <div class="col-md-6">
                        <label for="firstName">Prenom :</label>
                        <input type="text" id="inputEmail" name="prenom" class="form-control" placeholder="Prenom" required="" autofocus="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="firstName">Email :</label>
                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="example@gmail.com" required="" autofocus="">
                    </div>
                    <div class="col-md-6">
                        <label for="firstName">Telephone :</label>
                        <input type="text" id="inputEmail" name="phone" class="form-control" placeholder="06 33 66 66 44" required="" autofocus="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="firstName">Message :</label>
                        <textarea name="message" class="form-control"> </textarea>
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-top:20px;">
                    <input  class="btn btn-light btn-xl js-scroll-trigger" type="submit" value="RESERVEZ" />
                </div>
            </div>
        </div>

        </form>
    </section>





    <footer class="bg-dark py-5">
        <div class="container">
            <div class="small text-center text-muted">
                <p class="small text-center text-muted" id="date"></p>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->

    <script>
        n = new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        document.getElementById("date").innerHTML = "Copyright ©" + y + "    ASTERIA CAR LUXURY - Tous droits réservés.";
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>