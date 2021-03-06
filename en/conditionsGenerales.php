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
    <link href="../css/styles.css" rel="stylesheet" />

</head>

<body id="page-top">


    <div class="d-flex flex-row p-2 justify-content-between kd-on">
        <div class="p-2 kd-on text-balck-50" onclick="onclickLogo();" style="cursor: pointer;">
            <img height="40px" src="../assets/img/logo.jpg" />
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
            <a href="../">
                <img height="30px" src="../assets/img/france.png" />

            </a>
            <a href="../ar/">
                <img height="30px" src="../assets/img/maroc.png" />

            </a>
            <a href="">
                <img height="30px" src="../assets/img/etats-unis.png" />

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
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="model.php">Models <span class="sr-only">span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" href="conditionsGenerales.php">General conditions <span class="sr-only">span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="blog.php">Blog <span class="sr-only"></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php">Contact <span class="sr-only">span></a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="page-section bg-dark" style="padding: 6rem 0;" id="about">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 ">
                    <h2 class="text-white mt-0 text-center"> GENERAL CONDITIONS </h2>
                    <hr class="divider">

                    <div style="margin: 100px;"></div>

                    <h5 class="text-white mt-0">Rental agreement : </h5>

                    <p class="text-white-50 mb-4">
                        It is a contract between the agency and the main driver, both parties must strictly adhere to the general conditions for the rental of the vehicle. </p>


                    <h5 class="text-white mt-0"> Driver's age : </h5>

                    <p class="text-white-50 mb-4">
                        The driver must be at least 23 years old and hold a valid driver's license and have more than 2 years of seniority. Only the driver designated in the contract can take the wheel. </p>

                    <h5 class="text-white mt-0">Vehicle use : </h5>

                    <p class="text-white-50 mb-4"><br />
                        - A description of the condition of the car will be attached to your papers and to your contract. The agency delivers a car to you, the condition of which complies with the description, which the tenant must agree to in writing, <br /><br /> – Veuillez inspecter minutieusement le véhicule avant votre départ de l’agence, 
                        <br /> <br /> - The agency will not take into consideration claims for apparent damage that were not reported when the vehicle was made available. <br /><br /> – Lors de la restitution, l'état du véhicule devra être conforme au descriptif. 
                        <br /><br /> – Tous les frais de remise en état consécutifs dû à la faute du locataire ou d’un tiers identifié, engendreront un supplément du prix de la location.
                        <br /> <br /> - The tenant has the right to circulate with the vehicle in the Moroccan territory only.
                        <br /> <br /> - The tenant is responsible for offenses committed during the rental period, as his contact details can be communicated to the authorities if necessary.
                        <br /> <br /> - It is strictly forbidden to:
                        <br /> <br /> 1. Rent the vehicle again,
                        <br /> <br /> 2. Participate in rallies / competitions with the vehicle.
                        <br /> <br /> 3. Committing an intentional offense.
                        <br /> <br /> - In case of damage or theft, the tenant must inform the agency within a period not exceeding 48 hours. He is required to send the agency the amicable report in the event of an accident or the theft declaration receipt issued by the authorities in the event of theft as well as the keys and documents of the vehicle.
                        <br /> <br /> - The tenant must be vigilant to any signal emitted by the warning lights appearing on the vehicle's dashboard and carry out usual checks (tire pressures, oil level engine and water, etc.) when needed.
                        <br /> <br /> - The vehicle will be delivered to you with a state of tires in accordance with road regulations. In the event of damage to one of them, the lessee will be obliged to replace it immediately at his expense with tires of the same size, same type, same brand.
                    </p>

                    <h5 class="text-white mt-0"> Location duration : </h5>

                    <p class="text-white-50 mb-4"><br /><br />
                        - The tenant agrees to return the vehicle to the rental agency on the date specified in the contract.
                        <br /> <br /> - The rental period is calculated from the time the vehicle is made available.
                        <br /> <br /> - The duration of a rental contract is a minimum of 3 days.
                    </p>
                    <h5 class="text-white mt-0"> Vehicle return : </h5>

                    <p class="text-white-50 mb-4">
                        <br /> <br /> - The return of the vehicle must be made during the opening hours of the agency.
                        <br /> <br /> - In the event of early return, no refund will be granted by the agency for unused rental days.
                        <br /> <br /> - In case of late return, it is important to submit to our agency a request for extension, as well as payment for additional rental days.
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
        document.getElementById("date").innerHTML = "Copyright ©" + y + "    ASTERIA CAR LUXURY - All rights reserved.";
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