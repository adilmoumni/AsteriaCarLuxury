<!DOCTYPE html>

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
        /* .container{ border: 2px solid green }
.grid-item{ border: 2px solid red; padding: 20px;}
.grid{ border: 1px solid blue} */
        .filters ul {
            display: flex;
            justify-content: center;
            list-style: none;
            border-bottom: 2px solid #D9D9D9;
            margin: 30px 15px
        }

        .filters ul li {
            display: inlnie-block;
            text-align: center;
            margin-right: 12px;
            padding: 0 5px 8px 5px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            margin-bottom: -2px;
            color: #777;
            transition: 0.3s;
            text-transform: uppercase;
        }

        .filters ul li:hover {
            color: #EB2D3A;
        }

        .filters ul li.is-checked {
            border-bottom: 2px solid #EB2D3A;
        }

        .filters ul li:last-child {
            margin-right: 0;
        }


        .grid .grid-item h1 {
            background: #EEEEEE;
            height: 150px;
            line-height: 150px;
            color: white;
            font-size: 3em;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-submit-button {

            background: transparent;

            box-shadow: 0px 0px 0px transparent;

            border: 0px transparent;

            text-shadow: 0px 0px 0px transparent;

        }



        .form-submit-button:hover {

            background: transparent;

            box-shadow: 0px 0px 0px transparent;

            border: 0px transparent;

            text-shadow: 0px 0px 0px transparent;

        }

        .form-submit-button:active {
            background: transparent;

            box-shadow: 0px 0px 0px transparent;

            border: 0px transparent;

            text-shadow: 0px 0px 0px transparent;
        }
    </style>
</head>
<!-- Footer-->


<body>
    <!-- Navigation-->
    <!-- KD CODE-->
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
                    <a class="nav-link" href="index.php">Acceuil<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="model.php">Modèles<span class="sr-only"></span></a>
                </li>
                <li class="nav-item ">
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



    <section class="page-section bg-dark text-white">
        <div class=" container text-center">
            <h2 class="mb-4">Sélectionnez votre véhicule</h2>
            <hr class="divider light my-4" />

        </div>
    </section>

    <section class="text-primary">
        <!-- Filtre -->
        <div class="container-fluid p-0">
            <div class="row justify-content-center  no-gutters " style="margin-right:0px;margin-left:0px;">
                <div class="col-lg-8">
                    <div class="grid">
                        <!-- <div class="row">
                            <div class="col-md-12" style="padding: 0;">
                                <div class="filters">
                                    <ul>
                                        <li class="is-checked" data-filter="*">All</li>
                                        <li data-filter=".idea">!dea</li>
                                        <li data-filter=".ui">UI</li>
                                        <li data-filter=".ux">UX</li>
                                        <li data-filter=".code">Code</li>
                                        <li data-filter=".logic">Logic</li>
                                        <li data-filter=".creativity">Creativity</li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <div class="row text-black-50" style="margin:20px;">
                            <?php
                            require_once "admin/config.php";

                            // Attempt select query execution
                            $sql = "SELECT * FROM voiture ";
                            if ($result = mysqli_query($link, $sql)) {
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        // echo $row['nom'];
                                        // echo $row['carburant'];
                                        // echo $row['boiteAvitesses'];
                                        // echo $row['disponible'];
                                        // echo $row['image'];
                                        // echo $row['dateCreation'];
                                        // echo $row['prix'];
                                        // echo "<br/><br/><br/><br/>";




                                        // $_REQUEST['txtAdresseDepart']                                                                                                             $_REQUEST['dateDu'] $_REQUEST['dateAux']

                                        echo '<div class="col-lg-4 col-sm-6">';
                                        echo '  <div class="">';
                                        echo '      <!-- fin wsalt -->';
                                        echo '     <img class="img-fluid" src="admin/voiture/' . $row['image'] . '" alt="Norway" style="width:80%; height:100%" />';
                                        echo '     <a href="information.php?car=' . $row['nom'] . '&txtAdresseDepart=' .  $_REQUEST['txtAdresseDepart'] . '&txtAdresseArriver=' . $_REQUEST['txtAdresseArriver'] . '&dateDu=' . $_REQUEST['dateDu'] . '&dateAux=' . $_REQUEST['dateAux'] . '">';
                                        echo '         <div class="d-flex flex-row-reverse bd-highlight text-light" href="index.php" style="cursor: pointer;">';
                                        echo '             <div class="text-block d-flex align-items-center justify-content-center" style="padding-top:10px; border-radius: 1em;position: relative; top:-50px; background-color: rgba(222 5 5 / 70%); height: 40px; width:200px">';
                                        echo '                 <h5>' . $row['prix'] . ' Dh Jour <i class="fa fa-arrow-right" aria-hidden="true"></i>';
                                        echo '                 </h5>';
                                        echo '             </div>';
                                        echo '         </div>';
                                        echo '    </a>';
                                        echo ' </div>';
                                        echo ' <div style="position: relative; top:-50px;">';
                                        echo '    <h4>' . $row['nom'] . '</h4>';
                                        echo '    <hr class="solid" style="margin: 0px; padding:0px">';
                                        echo '    <div class="row justify-content-between" style="padding-right:20px;padding-left:20px;">';
                                        echo '        <div>';
                                        echo $row['carburant'];
                                        echo '       </div>';
                                        echo '       <div>';
                                        echo $row['boiteAvitesses'];
                                        echo '       </div>';
                                        echo '   </div>';
                                        echo ' </div>';
                                        echo ' </div>';
                                    }
                                } else {

                                    echo '<center>
                                    <img src="assets/img/emptydata.png" style="height: 400px;display: block;margin-left: auto;margin-right: auto;width: 50%;" />
                                    Pour le moment nous n avons pas de véhicle disponible
                                    </center>';
                                }
                            }

                            ?>

                        </div>
                    </div>
                </div>
            </div>

    </section>
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


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
        var $grid = $('.grid').isotope({
            // options
            itemSelector: '.grid-item',
            layoutMode: 'fitRows',
        });

        // change is-checked class on buttons
        var $buttonGroup = $('.filters');
        $buttonGroup.on('click', 'li', function(event) {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            var $button = $(event.currentTarget);
            $button.addClass('is-checked');
            var filterValue = $button.attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
    </script>

</body>

</html>