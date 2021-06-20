<?php
$mysql_host="localhost"; // Setup connection to databasae
$mysql_user="root";
$mysql_password="";
$mysql_db="evidence_db";

$con = new mysqli($mysql_host,$mysql_user,$mysql_password,$mysql_db);
?>
<?php
include("init.php");
require "Authenticator.php";

if(isset($_POST['but_upload'])){
    
    
    
    
    $inputSuccess=true; //specify a variable which will initially be true, and set to false if the input fails the validation checks

    $username = $_REQUEST['username'];
    if(!preg_match("/^[a-zA-Z0-9]{1,255}$/",$username)){ //this regex will validate if the username only has alphanumeric chars
        echo "<script type='text/javascript'>alert('ERROR. Check your username format and try again. It should only contain alphanumeric characters');</script>";
         //set the following the false so that the user inputs will not be added to database should it not meet the formatting requirements.
       $inputSuccess=false;
     }
    $email = $_REQUEST['email'];
    if(!preg_match("/[a-zA-Z0-9_\-]+@([a-zA-Z_\-])+[.]+[a-zA-Z]{2,4}/",$email)){ //this regex will validate if the user email matches the format of an email i.e example@email.com
        echo "<script type='text/javascript'>alert('ERROR. Check your email format and try again');</script>";
        $inputSuccess=false;
    }
    $password = $_REQUEST['password'];
    if(!preg_match("/[a-zA-Z0-9!@#$ ]{8,255}/",$password)){ //this regex will validate if the user password contains at least 8 chars, and only contains alphanumeric chars, spaces and some symbols
        echo "<script type='text/javascript'>alert('ERROR. Passwords must be of minimum length 8 characters. We only accept alphanumeric characters, spaces and select symbols: @,# and $.');</script>";
        $inputSuccess=false;
    }
    $number = $_REQUEST['number'];
    if(!preg_match("/^[689]+[0-9]{7}$/",$number)){ //this regex will validate if the user email matches the format of an email i.e example@email.com
        echo "<script type='text/javascript'>alert('ERROR. Check your phone number format and try again');</script>";
       $inputSuccess=false;
    }


    if($inputSuccess){ //if the variable $inputSuccess created is true, it will go through and run the following statements:

    $username1 = mysqli_real_escape_string($conn, $username); //escape strings
    $email1 = mysqli_real_escape_string($conn, $email); //escape strings
    $password1 = mysqli_real_escape_string($conn, $password); //escape strings
    $number1 = mysqli_real_escape_string($conn, $number); //escape strings
    $userid = uniqid(); // generate unique ID
    //----------------------------------------------------------------------------------------------------------------------------------------

        $Authenticator = new Authenticator();
        $secret = $Authenticator->generateRandomSecret();
        echo $secret;
    //----------------------------------------------------------------------------------------------------------------------------------------
    $hash = password_hash($password1, PASSWORD_BCRYPT);
    // echo $username;
    // echo $email;
    // echo $password;
    // echo $number;
    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
    session_start();
    $_SESSION['email'] = $email1;
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

        // Insert record
     //   $query = "insert into users(username, email, password, number, image, role, zone, creditCard, ccv, 2fasecret) values('$username1','$email1', '$hash', '$number1',  '".$name."', 'users', 'normaluser', '$encryptedCreditCard', '$encryptedCcv' , '$secret')";
     //   mysqli_query($conn,$query);
        $role_signup="investigator";
        $query= $con->prepare("INSERT INTO users VALUES (?,?,?,?,?,?,?,?)"); //prepared statement
        $query->bind_param("sssissss", $username1,$email1, $hash, $number1, $name, $role_signup,$secret,$userid); //bind the parameters
        $query->execute();


        // Upload file
        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
        //header("location: 2faactivation.php");
       //Email Verification redirection ///////////////////////////////////////
        header("location: emailcode.php");
        ////////////////////////////////////////////

    } }

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
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Place Holder</a>
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
                    <h1 class="mx-auto my-0 text-uppercase">SIGN UP</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Let's get started, shall we?</h2>
                    <!-- <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a> -->
                    <form action="" method="POST" enctype='multipart/form-data'>
                        <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="username"  type="text" placeholder="Enter Name..." />
                        <br>
                        <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="email"  type="email" placeholder="Enter Email..." />
                        <br>
                        <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="password"  type="password" placeholder="Enter Password..." />
                        <br>
                        <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="number"  type="text" placeholder="Enter mobile number..." />
                        <br>
                        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                        <br>
                        <button class="btn btn-primary " name='but_upload' type="submit">Sign up!</button>
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
