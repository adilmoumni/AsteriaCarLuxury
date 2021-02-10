<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../login/login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
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
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="../main.css" rel="stylesheet">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" />
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- NAV BAR HEADER -->
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
        <!-- NAV BAR HEADER -->

        <div class="app-main">
            <!-- DRAWER  -->
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
                                <a href="../reservation/index.php" class="mm-active">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    LISTE DES RESERVATION
                                </a>
                            </li>
                            <li class="app-sidebar__heading">VOITURE</li>
                            <li class="">
                                <a href="">
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    VOITURE
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a href="../voiture/">
                                            <i class="metismenu-icon"></i>
                                            LISTE DES VOITURES
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../voiture/add.php">
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
            <!-- DRAWERS  -->
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <!-- HEADER - BODY DETAIL  -->

                    <!-- HEADER - BODY DETAIL  -->

                    <!-- CONTETS - BODY  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">LIST DES RESERVATIONS</h5>


                                    <table id="myTable" class="mb-0 table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>fullName</th>
                                                <th>telephone</th>
                                                <th>email</th>
                                                <th>lieuLivraison</th>
                                                <th>lieuRecuperation</th>
                                                <th>dateDu</th>
                                                <th>dateAu</th>
                                                <th>commentaire</th>
                                                <th>modelVoiture</th>
                                                <th>created_at</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $con = mysqli_connect('localhost', 'root', '', 'asteriac_asteria');

                                            if ($con->connect_error) {
                                                die("Connexion Failed" . $con->connect_error);
                                            }

                                            $sql = "SELECT * FROM `reservation1` ORDER BY `reservation1`.`id` ASC";

                                            $result =    $con->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>
                                                    <td>" . $row["id"] . "</td>
                                                    <td>" . $row["fullName"] . "</td>
                                                    <td>" . $row["telephone"] . "</td>
                                                    <td>" . $row["email"] . "</td>
                                                    <td>" . $row["lieuLivraison"] . "</td>
                                                    <td>" . $row["lieuRecuperation"] . "</td>
                                                    <td>" . $row["dateDu"] . "</td>
                                                    <td>" . $row["dateAu"] . "</td>
                                                    <td>" . $row["commentaire"] . "</td>
                                                    <td>" . $row["modelVoiture"] . "</td>
                                                    <td>" . $row["created_at"] . "</td></tr>";
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CONTETS - BODY -->
                </div>
                <!-- FOOTER  -->

                <!-- FOOTER  -->
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="../assets/scripts/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>