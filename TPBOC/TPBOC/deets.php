<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Eterna Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assetsEterna/img/favicon.png" rel="icon">
  <link href="assetsEterna/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assetsEterna/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assetsEterna/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assetsEterna/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assetsEterna/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assetsEterna/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assetsEterna/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assetsEterna/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v2.2.1
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<?php

include 'init.php';
?>


<?php
  $productToDisplay = $_GET['productToDisplay'];
  $query = "SELECT * FROM products WHERE product_id='$productToDisplay'";
  $result = mysqli_query($conn, $query);
  
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $productID = $row["product_id"];
      $productTitle = $row["product_title"];
      $productDesc = $row["product_desc"];
      $productImage = $row["product_image"];
      $productKeywords = $row["product_keywords"];
      $productPort = $row["product_port"];
      $productState = $row["product_state"];
      $location = $row["location"];
      $timestamp = $row["timestamp"];
      $category = $row["category"];
      $case_name = $row["case_name"];
  
  /*  echo $productID;
      echo $productTitle;
      echo $productDesc;
      echo $productImage;
      echo $productKeywords;
      echo $productPort;    
      echo $productState;
      echo $location;
      echo $timestamp;
      echo $case_name;;
      
      
      $_SESSION['location'] = $location;
      $_SESSION['product_id'] = $productID;
      $_SESSION['product_title'] = $productTitle;
      $_SESSION['product_desc'] = $productDesc;
      $_SESSION['product_image'] = $productImage;
      $_SESSION['product_keywords'] = $productKeywords;
      $_SESSION['product_port'] = $productPort;
      $_SESSION['product_state'] = $productState;
   */
  }
  } 
  else {
      echo "Nothing Has Been Checked out!";
  }
  
?>
<body>

  <!-- ======= Top Bar ======= -->
  <!-- section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section> -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>BCOC</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li><a href="plogindex.php">Home</a></li>
          <!-- <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="team.html">Team</a></li>

              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li> -->

        <!--   <li><a href="services.html">Services</a></li>
          <li class="active"><a href="portfolio.html">Portfolio</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
 -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="plogindex.php">Home</a></li>
          <li>Evidence Details</li>
        </ol>
        <h2>Evidence Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title"><?php echo $productTitle?> Details</h2>
            <!-- <div class="owl-carousel portfolio-details-carousel"> -->
              <?php echo"<img src='product_images/$productImage' class='img-fluid' alt=''>" ?>
            <!--   <img src="assetsEterna/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <img src="assetsEterna/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            </div> -->
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Evidence information</h3>
            <ul>
              <li><strong>Category</strong>: <?php echo $category?></li>
              <li><strong>Location</strong>: <?php echo $location ?></li>
              <li><strong>Date</strong>: <?php echo $timestamp?></li>
              <li><strong>Port</strong>: <?php echo $productPort?></li>
              <li><strong>Evidence status</strong>: <?php echo $productState?></li>
              <li><strong>Case name</strong>: <?php echo $case_name?></li>
              <!-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
            </ul>

            <p>
            <?php echo $productDesc?>            
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Eterna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div> -->

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Nathan</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Nathan&Yusuf</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assetsEterna/vendor/jquery/jquery.min.js"></script>
  <script src="assetsEterna/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assetsEterna/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assetsEterna/vendor/php-email-form/validate.js"></script>
  <script src="assetsEterna/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assetsEterna/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assetsEterna/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assetsEterna/vendor/counterup/counterup.min.js"></script>
  <script src="assetsEterna/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assetsEterna/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assetsEterna/js/main.js"></script>

</body>

</html>