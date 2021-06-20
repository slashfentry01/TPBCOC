<!DOCTYPE html>

<html lang="en">

    <head>

    <?php 

    include 'init.php';

    session_start();

    if (isset($_SESSION['email']) == true) {

      $email = $_SESSION['email'];

      $username = $_SESSION['username'];

      // echo "WELCOMEEEEE" . $email . $name;

      ////////////////////////////////////

      $time = $_SERVER['REQUEST_TIME'];



      /**

      * for a 30 minute timeout, specified in seconds

      */

      $timeout_duration = 1800;



      /**

      * Here we look for the user's LAST_ACTIVITY timestamp. If

      * it's set and indicates our $timeout_duration has passed,

      * blow away any previous $_SESSION data and start a new one.

      */

      if (isset($_SESSION['LAST_ACTIVITY']) &&

        ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {

          session_unset();

          session_destroy();

          header("location: signup.php");

      }



      /**

      * Finally, update LAST_ACTIVITY so that our timeout

      * is based on it and not the user's login time.

      */

      $_SESSION['LAST_ACTIVITY'] = $time;

      //////////////////////////////////////////

    }else{

        header("location: signup.php");

    }

    ?>

    <!-- Yususf's Deco -->

    <link href="animated/yusuf.css" rel="stylesheet">

     

        <!-- Favicons -->

  <link href="assets/img/favicon.png" rel="icon">

  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



  <!-- Vendor CSS Files -->

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">



  <!-- Template Main CSS File -->

  <link href="assets/css/style.css" rel="stylesheet">



  <!-- =======================================================

  * Template Name: OnePage - v4.1.0

  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/

  * Author: BootstrapMade.com

  * License: https://bootstrapmade.com/license/

  ======================================================== -->

        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta name="description" content="" />

        <meta name="author" content="" />

        <title>TPBOC</title>

        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

        <!-- Font Awesome icons (free version)-->

        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

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

                <a class="navbar-brand js-scroll-trigger" href="#page-top">B-COC</a>

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                    Menu

                    <i class="fas fa-bars"></i>

                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">

                    <ul class="navbar-nav ml-auto">

                      <!--   <li class="nav-item"><a class="nav-link js-scroll-trigger" href="checkinnew.php">In</a></li>

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="checkoutnew.php">Out</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="archiveLanding.php">Archive</a></li> -->
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="checkinnew.php">In</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="checkoutnew.php">Out</a></li>

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="plogindex.php">Home</a></li>

                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li> -->

                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Login</a></li> -->

                      </ul>

                </div>

            </div>

        </nav>

        <!-- Masthead-->

        <header class="masthead">

            <div class="container d-flex h-100 align-items-center">

                <div class="mx-auto text-center">

                    <h1 class="mx-auto my-0 text-uppercase">Archival</h1>

                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Chain of Custody portal using blockchain that manages evidences.</h2>

                    <a class="btn btn-primary js-scroll-trigger" href="archiveinnew.php">Archive In</a>
                    <a class="btn btn-primary js-scroll-trigger" href="archiveoutnew.php">Archive Out</a>
                    <a class="btn btn-primary js-scroll-trigger" href="reusenew.php">Reuse Evidence</a>

                </div>

            </div>

        </header>




          <!-- Contact-->

          <section class="contact-section bg-black">

<div class="container">

    <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">

            <div class="card py-4 h-100">

                <div class="card-body text-center">

                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>

                    <h4 class="text-uppercase m-0">Address</h4>

                    <hr class="my-4" />

                    <div class="small text-black-50">4923 Market Street, Orlando FL</div>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-3 mb-md-0">

            <div class="card py-4 h-100">

                <div class="card-body text-center">

                    <i class="fas fa-envelope text-primary mb-2"></i>

                    <h4 class="text-uppercase m-0">Email</h4>

                    <hr class="my-4" />

                    <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-3 mb-md-0">

            <div class="card py-4 h-100">

                <div class="card-body text-center">

                    <i class="fas fa-mobile-alt text-primary mb-2"></i>

                    <h4 class="text-uppercase m-0">Phone</h4>

                    <hr class="my-4" />

                    <div class="small text-black-50">+1 (555) 902-8832</div>

                </div>

            </div>

        </div>

    </div>


</div>

</section>

<!-- Footer-->

<footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Your Website 2020</div></footer>

<!-- Bootstrap core JS-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Third party plugin JS-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!-- Core theme JS-->

<script src="js/scripts.js"></script>



<!-- Vendor JS Files -->

<script src="assets/vendor/aos/aos.js"></script>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<script src="assets/vendor/php-email-form/validate.js"></script>

<script src="assets/vendor/purecounter/purecounter.js"></script>

<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>



<!-- Template Main JS File -->

<script src="assets/js/main.js"></script>

</body>

</html>
