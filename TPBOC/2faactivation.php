<?php
include("init.php");
require "Authenticator.php";


$Authenticator = new Authenticator();
/////////////////////////////////////////////////
session_start();
if (isset($_SESSION['email']) == true) {
    $email = $_SESSION['email'];
}else{
    header("location: signup.php");
}
//CHECK IF VALID USER
//////////////////////////////////////////////////

//$query = "select * from users where email='$email'";
$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $password = $row["password"];
        $imagesrc = $row["image"];
        $number = $row["number"];
        $f2asecret =  $row["2fasecret"];
    }
    } else {
     echo "0 results";
    //header('Location: ../cdenoexst');
    }

    $qrCodeUrl = $Authenticator->getQR($email, $f2asecret);
    $f2aaemail = $_POST['2faemail'];
    if ($f2aaemail == $f2asecret){
        $lol = "hi";
    }else{
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MyLocal Marketplace</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">MyLocal Marketplace</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <!-- <h1 class="mx-auto my-0 text-uppercase">MY PROFILE</h1> -->
                    <h1 class="text-white-50 mx-auto mt-2 mb-5">Activate your 2FA!</h1>
                    <!-- <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a> -->
                    <form action="" method="POST" >
                    <p class="text-white-50">
                        SCAN ME WITH YOUR GOOGLE AUTHENTICATOR!
                    </p>
                    <img width="50%" src='<?php print_r($qrCodeUrl) ?>' >
                    <br>
                    <br>
                    <!-- <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1"> -->
                    <br>
                    </form>
                    <form action="logout.php" method="POST">
                        <button class="btn btn-primary " name='but_updateCredit' type="submit">Back Home!</button>
                    </form>
                  
                </div>
            </div>
        </header>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
