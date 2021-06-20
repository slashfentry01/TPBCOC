<?php
include 'init.php';
/////////////////////////////////////////////////
session_start();
if (isset($_SESSION['email']) == true) {
    $email = $_SESSION['email'];
    //$username = $_SESSION['username'];
    // echo "WELCOMEEEEE" . $email;
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
        //header("Location: " .  $row['link'] . " ");
        // echo "name: " . $username. "<br>";
        // echo "email: " . $email. "<br>";
        // echo "password: " . $row["password"]. "<br>";
        // echo "image: " . $row["image"]. "<br>";
    }
    } else {
     echo "0 results";
    //header('Location: ../cdenoexst');
    }

    if(isset($_POST['but_update'])){
      $inputSuccess=true;
      $newpassword = $_REQUEST['newpassword'];
      if(!preg_match("/[a-zA-Z0-9!@#$ ]{8,255}/",$newpassword)){ //this regex will validate if the user password contains at least 8 chars, and only contains alphanumeric chars, spaces and some symbols
          echo "<script type='text/javascript'>alert('ERROR. Passwords must be of minimum length 8 characters. We only accept alphanumeric characters, spaces and select symbols: @,# and $.');</script>";
          $inputSuccess=false;
      }

        if($inputSuccess){
        $newpasswordrepeat = $_REQUEST['newpasswordrepeat'];
        $newpassword1 = mysqli_real_escape_string($conn, $newpassword); //escape strings
        $newpasswordrepeat1 = mysqli_real_escape_string($conn, $newpasswordrepeat); //escape strings
        if ($newpassword1 == $newpasswordrepeat1){
            $hash = password_hash($newpasswordrepeat1, PASSWORD_BCRYPT);
            $f2aaemail = $_POST['2faemail'];
            if ($f2aaemail == $f2asecret){
                $lol = "hi";
            }else{
                header('Location: index.php');
            }
            // echo $username;
            // echo $email;
            // echo $password;
            // echo $number;
           ////////////////////////////////////////////////////////////
           $query= $conn->prepare("UPDATE users set password=? WHERE email=?");
         $query->bind_param('ss', $hash,$email); //bind the parameters
         
         if ($query->execute()){  //execute query
             echo "Query executed."; //update the row successfully
             echo $hash;
             header("location: logout.php"); //return to index
         }
           ///////////////////////////////////////////////////////////
          }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Insert Website name here</title>
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
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="plogindex.php">Home</a></li>
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
                    <h1 class="text-white-50 mx-auto mt-2 mb-5">Password Management</h1>
                    <!-- <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a> -->
                    <form action="" method="POST" >
                    <p class="text-white-50">
                        Code from email
                    </p>
                    <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="2faemail"  type="password"/>
                    <br>
                    <p class="text-white-50">
                        New Password
                    </p>
                    <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="newpassword"  type="password"/>
                    <br>
                    <p class="text-white-50">
                        Repeat New Password
                    </p>
                    <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="newpasswordrepeat"  type="password"/>

                    <!-- <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1"> -->
                    <br>
                    <button class="btn btn-primary " name='but_update' type="submit">Update password!</button>
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
