<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            include '../init.php';
            require 'case.php';
            require 'coc.php';
            $name='Mohd Fawaz';
            /*session_start();
            if (isset($_SESSION['email']) == true) {
                $email = $_SESSION['email'];
                $username = $_SESSION['username'];
                echo "WELCOMEEEEE" . $email . $name;
                $time = $_SERVER['REQUEST_TIME'];

                //for a 30 minute timeout, specified in seconds
                $timeout_duration = 1800;

                //Here we look for the user's LAST_ACTIVITY timestamp.
                //If it's set and indicates our $timeout_duration has passed,
                //blow away any previous $_SESSION data and start a new one.
                if (isset($_SESSION['LAST_ACTIVITY']) && ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
                    session_unset();
                    session_destroy();
                    header("location: ../signup.php");
                }
                
                //Finally, update LAST_ACTIVITY so that our timeout is based on it and not the user's login time.  
                $_SESSION['LAST_ACTIVITY'] = $time;
            }else{
                header("location: ../signup.php");
            }*/
        ?>
        <!-- Yususf's Deco -->
        <link href="../animated/yusuf.css" rel="stylesheet">

        <!-- Favicons -->
        <link href="../assets/img/favicon.png" rel="icon">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="../assets/css/style.css" rel="stylesheet">

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
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">B-COC</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#evidences">Evidences</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../archives/">Archives</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../plogindex.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase"><?= $_POST['caseID'] ?></h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Solved Cases of <?= $name ?></h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#evidences">Evidences</a>
                    
                </div>
            </div>
        </header>
        <section id="evidences" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title"><h2>Evidences of <?= $_POST['caseID'] ?></h2></div>
                    <div class='row' style='width: 900px; margin-left: 132.5px'>
                        <?php
                            $conn = new mysqli('localhost','root','','evidence_db');
                            if ($conn->connect_errno)
                            {
                                echo "<script>alert('Unable to connect to database')</script>";
                            } else {
                                $stmt=$conn->prepare("SELECT blockchain FROM archival WHERE caseID=?");
                                $stmt->bind_param("s", $_POST['caseID']); //$_SESSION['name']);
                                $res=$stmt->execute();
                                $stmt->store_result();
                                $stmt->bind_result($string);
                                while($stmt->fetch()){
                                    $BC=unserialize($string);
                                    if (count($BC->chain) > 1) {
                                        for ($i=1; $i<count($BC->chain); $i++) {
                                            echo "<div class='column' style='width: 425px; height: 595px'>";
                                                echo "<div style='width: 425px; height: 570px; padding-top: 0.75rem; padding-bottom: 0.75rem; border-style: solid; border-color: black; border-width: 1px' class='container'>";
                                                    echo "<img src='".$BC->chain[0]->Ipath."' style='width: 400px; height:400px' class='img-fluid' alt=''>";
                                                    echo "<h4>".$BC->chain[$i]->title."</h4>";
                                                    echo "<h6 style='height: 40px'>".$BC->chain[0]->title." - ".$BC->chain[$i]->description."</h6>";
                                                    echo "<div class='portfolio-links'>";
                                                        $title=$BC->chain[0]->title." ".$BC->chain[$i]->title;
                                                        $conn1 = new mysqli('localhost','root','','evidence_db');
                                                        if($conn1->connect_errno){
                                                            echo "<script>alert('Unable to connect to database')</script>";
                                                        }else{
                                                            $stmt1=$conn1->prepare("SELECT blockchain FROM checkinout WHERE title=?");
                                                            $stmt1->bind_param("s", $title);
                                                            $res1=$stmt1->execute();
                                                            $stmt1->store_result();
                                                            $stmt1->bind_result($str);
                                                            while($stmt1->fetch()){
                                                                $coc=unserialize($str);
                                                                if ($coc->chain[count($coc->chain)-1]->status == "check-in"){
                                                                    echo "<form action='checkout.php' method='POST'>";
                                                                        echo "<input type='hidden' id='caseID' name='caseID' value='".$BC->chain[0]->title."'>";
                                                                        echo "<input type='hidden' id='title' name='title' value='".$title."'>";
                                                                        echo "<input class='btn btn-outline-success' type='submit' value='Check Out Evidence'>";
                                                                    echo "</form>";
                                                                } elseif ($coc->chain[count($coc->chain)-1]->status == "check-out"){
                                                                    echo "<form action='checkin.php' method='POST'>";
                                                                        echo "<input type='hidden' id='caseID' name='caseID' value='".$BC->chain[0]->title."'>";
                                                                        echo "<input type='hidden' id='title' name='title' value='".$title."'>";
                                                                        echo "<input class='btn btn-outline-success' type='submit' value='Check In Evidence'>";
                                                                    echo "</form>";
                                                                }
                                                            }
                                                        }
                                                    echo "</div>";
                                                echo "</div>";
                                                echo "<div style='width: 425px; height: 25px;'></div>";
                                            echo "</div>";
                                            echo "<div style='width: 25px; height: 595px;'></div>";
                                        }
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <!--  <section class="signup-section" id="signup">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-lg-8 mx-auto text-center">
                                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                                <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                                <form class="form-inline d-flex">
                                    <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email" placeholder="Enter email address..." />
                                    <button class="btn btn-primary mx-auto" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
        -->
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
        <footer class="footer bg-black small text-center text-white-50">
            <div class="container">Copyright © Your Website 2020</div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
        <!-- Vendor JS Files -->
        <script src="../assets/vendor/aos/aos.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../assets/vendor/php-email-form/validate.js"></script>
        <script src="../assets/vendor/purecounter/purecounter.js"></script>
        <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
        <!-- Template Main JS File -->
        <script src="../assets/js/main.js"></script>
    </body>
</html>