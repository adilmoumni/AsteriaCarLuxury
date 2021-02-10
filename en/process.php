<?php


// print_r($_POST);

// Include config file
// require_once "admin/config.php";

$mysqli = new mysqli('localhost', 'root', '', 'asteriac_asteria')
    or die(mysqli_error($mysqli));

// Define variables and initialize with empty values
$fullName = $nameCar = $phone = $email = $lieuLivraison = $lieuRecuperation = $dateDu = $dateAux = $commanter = "";

// $name_err = $address_err = $salary_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $fullName = $_POST["fullName"];
    $nameCar = $_POST["nameCar"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $lieuLivraison = $_POST["lieuLivraison"];
    $lieuRecuperation = $_POST["lieuRecuperation"];
    $dateDu = $_POST["dateDu"];
    $dateAux = $_POST["dateAux"];

    $input_name = trim($_POST["commanter"]);
    if (empty($input_name)) {
        $commanter = "";
    } else {
        $commanter = $_POST["commanter"];
    }

    $sql = "INSERT INTO reservation1 (fullName, telephone, email, lieuLivraison, lieuRecuperation, dateDu, dateAu, commentaire, modelVoiture) 
      VALUES ('$fullName', '$phone', '$email', '$lieuLivraison', '$lieuRecuperation', '$dateDu', '$dateAux', '$commanter', '$nameCar')";

    if ($mysqli->query($sql)  === true) {
        header("location: thankspage.php");
    } else {
        echo $mysqli->error;
    }


    echo "bienn";
} else {
    echo "pas bien";
}
