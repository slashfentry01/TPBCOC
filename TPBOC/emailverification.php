<?php
include("init.php");
include("initialization.php");
require "Authenticator.php";


$Authenticator = new Authenticator();
/////////////////////////////////////////////////
session_start();
if (isset($_SESSION['email']) == true) {
    $email = $_SESSION['email'];
    //$username = $_SESSION['username'];
    // echo "WELCOMEEEEE" . $email . $name;
}else{
    header("location: signup.php");
}
//CHECK IF VALID USER
//////////////////////////////////////////////////
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


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MyLocalMarketPlace</title>
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
                <a class="navbar-brand js-scroll-trigger" href="#page-top">MyLocalMarketPlace</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">LOGIN</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Where you journey begins...</h2>
                    <!-- <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a> -->
                    <form action="2faactivation.php" method="POST" >
                        <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="2faemail"  type="password" placeholder="Enter Email veritication code..." />
                        <br>
                        <button class="btn btn-primary " name='but_upload' type="submit">Proceed</button>
                    </form>
                    <br>
                    <p class="text-white-50">
                        Not signed up? Click
                        <a href="signup.php">here</a>
                        to sign up!
                    </p>
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
