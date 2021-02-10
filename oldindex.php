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
    <title>ASTERIA CAR LUXURY</title>
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
        .fixed-top-2 {
            margin-top: 106px;
        }
    </style>


    


    
</head>

<body id="page-top">
    <!-- Navigation-->
    <!-- KD CODE-->
    <div class="d-flex flex-row p-2 justify-content-between kd-on">
        <div class="p-2 kd-on text-balck-50" onclick="onclickLogo();" style="cursor: pointer;">
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
            <a href="index.php">
                <img height="30px" src="assets/img/france.png" />
            </a>
            <a href="ar/index.php">
                <img height="30px" src="assets/img/maroc.png" />
            </a>
            <a href="en/index.php">
                <img height="30px" src="assets/img/etats-unis.png" />
            </a>
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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Acceuil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="model.php">Modèles <span class="sr-only">span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="conditionsGenerales.php">Condition générales <span class="sr-only">span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="blog.php">Blog <span class="sr-only">span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php">Contact <span class="sr-only">span></a>
                </li>
            </ul>
        </div>
    </nav>




    <!-- Masthead-->
    <form action="model.php" method="POST">
        <header class="masthead" style="padding-top: 0px;">
            <div class="container h-100">
                <div class="row h-100 align-items-start justify-content-start text-start">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">RÉSERVATION DU VÉHICULE SIMPLE ET RAPIDE</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-12 align-self-baseline align-content-start">
                        <div class="row justify-content-start ">
                            <div class="col-lg-6 container" style=" border-radius: 2em; margin: 10px;">
                                <div class="row justify-content-start text-white" style="padding: 10px">
                                    <div class="col-md-6" style="margin-top: 10px;">
                                        <div class=" md-form">
                                            <label for="firstName">Lieu de livraison :</label>

                                            <input placeholder="Adresse de livraison" type="text" name="txtAdresseDepart" id="txtAdresseDepart" class="form-control" style="background-color: #ffffffba;">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="margin-top: 10px;">
                                        <label for="firstName">Lieu de retour :</label>
                                        <input placeholder="Adresse de retour " type=" text" name="txtAdresseArriver" id="txtAdresseArriver" class="form-control" style="background-color: #ffffffba;">
                                    </div>
                                    <div class="col-md-6" style="margin-top: 10px;">
                                        <label for="firstName">Date Du :</label>

                                        <input type="date" placeholder="Date Du " id="dateDu" name="dateDu" class="form-control" style="background-color: #ffffffba;">

                                    </div>
                                    <div class="col-md-6" style="margin-top: 10px; margin-bottom : 10px">
                                        <label for="firstName">Date Au :</label>

                                        <input type="date" placeholder="Date Aux" id="dateAux" name="dateAux" class="form-control textbox-n" style="background-color: #ffffffba;">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start" style="margin : 20px;">
                            <a>
                                <!-- href="/model.php" -->
                                <button class="btn btn-primary btn-xl js-scroll-trigger" value="" name="valider" id="valider" type="submit">
                                    VOIR LES MODÈLES DISPONIBLE
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </form>

    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">À PROPOS DE NOUS</h2>
                    <hr class="divider light my-4" />
                    <p class="text-white-50 mb-4">ASTERIA CAR LUXURY est une agence de location de voitures basée à Casablanca Maarif. Elle met à votre disposition une large gamme de véhicules. Des citadines familiales, des berlines, des SUV, des 4×4 et des voitures de luxe.
                        Ho Rent Car vous propose différents modèles de voitures afin de répondre à tous vos besoins mais surtout vous satisfaire.!</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="model.php">RESERVEZ</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0">Nos points forts</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                        <h3 class="h4 mb-2">QUALITÉ</h3>
                        <p class="text-muted mb-0">ASTERIA CAR sélectionne des véhicules haut de gamme neuve et mobilise tout son personnel afin de vous satisfaire!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                        <h3 class="h4 mb-2">FLEXIBILITÉ</h3>
                        <p class="text-muted mb-0">Selon la demande de notre clientèle (Business, tourisme, particuliers…). </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                        <h3 class="h4 mb-2">DISPONIBILITÉ</h3>
                        <p class="text-muted mb-0">L’équipe ASTERIA est à votre écoute 7Jour/ 7 </p>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div> -->
            </div>
        </div>
    </section>
    <!-- Portfolio-->

    <section id="portfolio" class="justify-item-center">
        <div class="container-fluid p-0">
            <center>
                <h2 class="mb-4">Nos types de véhicules !</h2>
                <hr class="divider dark my-4" />
                <div style="margin : 100px;"></div>
            </center>
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6 ">
                    <center>
                        <a class="portfolio-box" href="model.php">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/car1.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"></div>
                                <div class="project-name"></div>
                            </div>
                        </a>
                    </center>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <center>
                        <a class="portfolio-box" href="model.php">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/car2.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"></div>
                                <div class="project-name"></div>
                            </div>
                        </a>
                    </center>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <center>
                        <a class="portfolio-box" href="model.php">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/car3.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"></div>
                                <div class="project-name"></div>
                            </div>
                        </a>
                    </center>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <center>
                        <a class="portfolio-box" href="model.php">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/car4.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"></div>
                                <div class="project-name"></div>
                            </div>
                        </a>
                    </center>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <center>
                        <a class="portfolio-box" href="model.php">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/car5.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"></div>
                                <div class="project-name"></div>
                            </div>
                        </a>
                    </center>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <center>
                        <a class="portfolio-box" href="model.php">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/car6.jpg" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50"></div>
                                <div class="project-name"></div>
                            </div>
                        </a>
                    </center>
                </div>
                <div style="margin:50px;"></div>
            </div>
        </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Un multiple choix de véhicule !</h2>
                <hr class="divider light my-4" />
                <p class="text-white-50 mb-4">Nous offrons une très grande variété de marque de voitures, Mercedes, BMW, Fiat, Toyota, Audi,Des citadines familiales, des berlines, des SUV, des 4×4 et des voitures de luxe..!</p>

            </div>


            <div class="container text-center" style="margin-top: 120px; margin-bottom:120px;">
                <h2 class="mb-4">On vous livre là ou vous souhaitez! </h2>
                <hr class="divider light my-4" />
                <p class="text-white-50 mb-4"> Avec ASTERIA CAR pas besoin de se rendre en agence pour louer un véhicule ! Nous vous livrons votre voiture de location à l’adresse indiquée au moment de la réservation et nous la récupérons sur le lieu de votre choix à la fin de la location.
                <p>

            </div>

            <div class="container text-center">
                <h2 class="mb-4">Meilleur Tarif Garantie !</h2>
                <hr class="divider light my-4" />
                <p class="text-white-50 mb-4">Nous offrons les meilleures tarif dans le marché de location des voitures au Maroc
                <p>

            </div>
        </section>


        <!-- Contact-->
        <section class="page-section bg-light " id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Contactez nous à tout Moment !</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Nous sommes joignable par téléphone ou par mail ainsi les réseaux sociaux</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0" style="color:red;">
                        <i class="fas fa-phone fa-3x mb-3 text-muted" style="color: red;"></i>
                        <div>(+212)-688-600-000</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:contact@yourwebsite.com">Contact@asteriacarluxury.ma</a>
                    </div>
                </div>

                <!-- <div class="row justify-content-center" style="margin-top: 100px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstName">Nom :</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Nom">
                            </div>
                            <div class="col-md-6">
                                <label for="firstName">Prenom :</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Prenom" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstName">Email :</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="example@gmail.com" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="firstName">Telephone :</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="06 33 66 66 44" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="firstName">Commanter :</label>
                                <textarea class="form-control"> </textarea>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-top:20px;">
                            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">RESERVEZ</a>
                        </div>
                    </div>
                </div> -->
        </section>

        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container">
                <div class="small text-center text-muted">
                    <p id="date"></p>
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
        <script>
            function onclickLogo() {
                location.href = "index.php";

            }
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