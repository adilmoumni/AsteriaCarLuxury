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
    <title>Asteria Car Luxury | LE BLOG</title>
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

</head>

<body id="page-top">


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
                <li class="nav-item active">
                    <a class="nav-link" href="conditionsGenerales.php">Condition générales <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="blog.php">blog <span class="sr-only"></span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php">Contact <span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="page-section bg-dark" style="padding: 6rem 0;" id="about">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 ">
                    <h2 class="text-white mt-0 text-center"> CONDITION GÉNÉRALES </h2>
                    <hr class="divider">

                    <div style="margin: 100px;"></div>

                    <h5 class="text-white mt-0">Contrat de location : </h5>

                    <p class="text-white-50 mb-4">
                        C’est un contrat entre l'agence et le conducteur principal, les deux parties doivent respecter strictement les conditions générales pour la location du véhicule.
                    </p>


                    <h5 class="text-white mt-0"> Age du conducteur : </h5>

                    <p class="text-white-50 mb-4">Le conducteur doit être âgé au moins de 23 ans et titulaire d’un permis de conduire valide et dont l’ancienneté dépasse les 2 ans. Seul le conducteur désigné au contrat peut prendre le volant.
                    </p>

                    <h5 class="text-white mt-0"> Utilisation du véhicule : </h5>

                    <p class="text-white-50 mb-4"><br />– Un descriptif de l’état de la voiture sera joint à vos papiers et à votre contrat. L'agence vous livre une voiture dont l’état est conforme au descriptif dont le locataire devra s'y engager par écrit, 
                        <br /><br /> – Veuillez inspecter minutieusement le véhicule avant votre départ de l’agence, 
                        <br /><br /> – L'agence ne prendra pas en considération les réclamations des dégâts apparents qui n’ont pas été signalés lors de la mise à disposition du véhicule.
                        <br /><br /> – Lors de la restitution, l'état du véhicule devra être conforme au descriptif. 
                        <br /><br /> – Tous les frais de remise en état consécutifs dû à la faute du locataire ou d’un tiers identifié, engendreront un supplément du prix de la location.
                        <br /><br /> – Le locataire à le droit de circuler avec le véhicule dans le territoire Marocain uniquement. 
                        <br /><br /> – Le locataire est responsable des infractions commises pendant la durée de la location, ainsi que ses coordonnées peuvent être communiquées aux autorités en cas de nécessité. 
                        <br /><br /> – Il est strictement interdit de:
                        <br /> <br /> 1. Relouer le véhicule, 
                        <br /> <br /> 2. Participer à des rallyes/compétitions avec le véhicule.
                        <br /> <br /> 3. Commettre une infraction intentionnelle. 
                        <br /> <br /> – En cas de dommage ou de vol, le locataire devra informer l'agence dans un délai qui ne dépasse pas 48 h. Il est tenu de transmettre à l'agence le constat à l'amiable en cas d'accident ou le récépissé de déclaration de vol remis par les autorités en cas de vol ainsi que les clés et les papiers du véhicule. 
                        <br /> <br /> – Le locataire devra être vigilant à tout signal émis par les voyants d’alerte apparaissant sur le tableau de bord du véhicule et d'effectuer des contrôles d’usage (pressions des pneus, niveau d’huile de moteur et d’eau, etc.) en cas de besoin.
                        <br /> <br /> – Le véhicule vous sera livré avec un état de pneus conformes aux réglementations routières. En cas de détérioration de l’un d'entre eux, le locataire sera dans l'obligation de le remplacer immédiatement à ses frais par des pneus de même dimension, même type, même marque.
                    </p>

                    <h5 class="text-white mt-0"> Durée de location : </h5>

                    <p class="text-white-50 mb-4"><br /><br />– Le locataire s’engage à rendre le véhicule à l’agence de location à la date prévue dans le contrat. 
                        <br /><br /> – La durée de location se calcule à partir de l’heure de mise à disposition du véhicule. 
                        <br /><br /> – La durée d’un contrat de location est de 3 jours minimums.
                    </p>
                    <h5 class="text-white mt-0"> Restitution du véhicule : </h5>

                    <p class="text-white-50 mb-4"><br /><br />– La restitution du véhicule doit être effectuée pendant les heures d’ouvertures de l’agence.
                        <br /><br /> – En cas de restitution anticipée, aucun remboursement ne sera accordé par l’agence pour les jours de location non utilisés.
                        <br /><br /> – En cas de restitution tardive, il est important de soumettre à notre agence une demande de prolongation, ainsi que le paiement des jours supplémentaires de location.

                    </p>

                    <hr class="solid  my-4 " style="background-color: transparent;">



    </section>




    <!-- Footer-->
    <footer class="bg-dark py-5">
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

    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- This is code for change input in front end-->
</body>

</html>