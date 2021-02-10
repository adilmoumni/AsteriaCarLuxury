<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../login/login.php");
    exit;
}
?>

<?php
// Include config file
require_once "../config.php";

// Define variables and initialize with empty values
$nameVoiture = $carburant = $boiteAvitesse = $prix = $image = "";
$disponible = 1;
$nameVoiture_err = $carburant_err = $boiteAvitesse_err = $prix_err = "";

// $name_err = $address_err = $salary_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    $input_nameVoiture = trim($_POST["nameVoiture"]);
    if (empty($input_nameVoiture)) {
        $nameVoiture_err = "Please enter a name.";
    } else {
        $nameVoiture = $input_nameVoiture;
    }

    // Validate address
    $input_carburant = trim($_POST["carburant"]);
    if (empty($input_carburant)) {
        $carburant_err = "Please enter an address.";
    } else {
        $carburant = $input_carburant;
    }

    // Validate salary
    $input_boiteAvitesse = trim($_POST["boiteAvitesse"]);
    if (empty($input_boiteAvitesse)) {
        $boiteAvitesse_err = "Please enter the salary amount.";
    } else {
        $boiteAvitesse = $input_boiteAvitesse;
    }

    $input_prix = trim($_POST["prix"]);
    if (empty($input_prix)) {
        $prix_err = "Please enter the salary amount.";
    } else {
        $prix = $input_prix;
    }


    if (empty($_POST["checkbox2"])) {
        $disponible = 0;
    }


    $target = "images/" . $input_nameVoiture . basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];

    echo $target;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image up";
    } else {
        $mdg = "error";
    }


    echo $disponible;
    // Check input errors before inserting in database
    // if (empty($name_err) && empty($address_err) && empty($salary_err)) {
    // Prepare an insert statement
    //     $nameVoiture = $carburant = $carburant = $prix = $image = "";
    // $disponible = true;

    $sql = "INSERT INTO voiture (nom, carburant, boiteAvitesses,prix,image,disponible)
             VALUES ('$nameVoiture', '$carburant', '$boiteAvitesse','$prix','$target','$disponible')";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);

        // Set parameters

        $param_name = $name;
        $param_address = $address;
        $param_salary = $salary;

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Records created successfully. Redirect to landing page
            header("location: index.php");
            exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);
    // }    

    // Close connection
    mysqli_close($link);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Voiture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Build whatever layout you need with our Architect framework.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="../main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header ">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="">
                    <h6>ASTERIA CAR LUXURY</h6>
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <!-- USER NAME -->
            <div class="app-header__content">

                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">

                                <div class="widget-content-left  ml-3 header-user-info">

                                    <div class="widget-heading">
                                        <?php echo htmlspecialchars($_SESSION["username"]); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropleft btn-group">
                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn-wide mb-2 mr-2 dropdown-toggle btn btn-primary"></button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" x-placement="right-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(88px, 0px, 0px);">




                    <button type="button" tabindex="0" class="dropdown-item"> <a href="../login/reset-password.php" style="margin-right:20px">
                            Réinitialisez votre mot de passe</a></button>
                    <button type="button" tabindex="0" class="dropdown-item">

                        <a href="../login/logout.php" style="margin-right:20px">Se deconnecter</a>
                    </button>
                </div>
            </div>

        </div>
        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>

        </div>

        <!--DRAWER -->
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">RESERVATION</li>
                            <li>
                                <a href="../reservation/index.php" class="">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    LIST DES RESERVATION
                                </a>
                            </li>
                            <li class="app-sidebar__heading mm-active">VOITURE</li>
                            <li class="" class="">
                                <a href="" class="">
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    VOITURE
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="mm-collapse mm-show">
                                    <li>
                                        <a href="../voiture/">
                                            <i class="metismenu-icon"></i>
                                            LIST DES VOITURES
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../voiture/add.php" class="mm-active">
                                            <i class="metismenu-icon">
                                            </i>AJOUTER UNE VOITURE
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="app-sidebar__heading">BLOG</li>
                            <li class="">
                                <a href="">
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    BLOG
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a href="../blog/">
                                            <i class="metismenu-icon"></i>
                                            LISTE DES BLOGS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../blog/add.php">
                                            <i class="metismenu-icon">
                                            </i>AJOUTER UN BLOG
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="app-sidebar__heading">REFERENCEMENT</li>
                            <li class="">
                                <a href="">
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    META TAG
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a href="../meta/">
                                            <i class="metismenu-icon"></i>
                                            LISTE DES META TAG
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../meta/add.php">
                                            <i class="metismenu-icon">
                                            </i>AJOUTER UNE META TAG
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
            <!--DRAWER -->

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">

                                </div>
                                <div>AJOUTER UNE VOITURE

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-content">

                        <div class="tab-pane tabs-animation fade active show" id="tab-content-1" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">AJOUTER UNE VOITURE</h5>
                                    <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        echo $target;
                                        print_r($_POST);
                                    }
                                    ?>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="">
                                        <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nom de voiture</label>
                                            <div class="col-sm-10"><input required name="nameVoiture" id="nameVoiture" placeholder="Nom de voiture" type="text" class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Carburant</label>
                                            <div class="col-sm-10"><input required name="carburant" id="carburant" placeholder="Carburant" type="text" class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Boite a Vitesse</label>
                                            <div class="col-sm-10"><input required name="boiteAvitesse" id="boiteAvitesse" placeholder="Boite A vitesse" type="text" class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Prix</label>
                                            <div class="col-sm-10"><input required step="any" name="prix" id="prix" placeholder="Prix" type="number" class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Disponible</label>
                                            <div class="col-sm-10">
                                                <div class="position-relative form-check"><label class="form-check-label"><input id="checkbox2" name="checkbox2" checked type="checkbox" class="form-check-input"> Disponible</label></div>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                                            <div class="col-sm-10"><input required name="image" accept="image/x-png,image/gif,image/jpeg" id="image" type="file" class="form-control-file">
                                                <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                            </div>
                                        </div>

                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <input class="btn btn-primary" value="Enregistrer" naeme="sub" type="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>

</html>