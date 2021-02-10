
<?php 


$con = mysqli_connect('localhost', 'root', '', 'asteriac_asteria');

if ($con->connect_error) {
	die("Connexion Failed" . $con->connect_error);
}


    print_r($_POST);

    $fullName = $email = $phone = $message="";

    if(isset($_POST['nom']))
    {
        $fullName = $_POST['nom'];
    }

    if(isset($_POST['prenom']))
    {
        $fullName = $fullName.' '. $_POST['prenom'];
    }

    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
    }


    if(isset($_POST['message']))
    {
        $message = $_POST['message'];
    } 

    $sqlAdd = "INSERT INTO reservation1
			(fullName , telephone , email , commentaire   )
			VALUES 
			('$fullName' , '$phone' ,'$email', '$message')";
			
			$con->query($sqlAdd);
            
            header("location: thankspage.php");

?>