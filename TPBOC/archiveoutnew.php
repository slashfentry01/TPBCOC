<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
    include 'init.php';
    ?>
    <?php
// PORT 3001 Validation

$url3001 = "http://svr1.tpboc.xyz:3001/";

$curl3001 = curl_init($url3001);
curl_setopt($curl3001, CURLOPT_URL, $url3001);
curl_setopt($curl3001, CURLOPT_RETURNTRANSFER, true);

$headers3001 = array(
   "Accept: application/json",
);
curl_setopt($curl3001, CURLOPT_HTTPHEADER, $headers3001);
//for debug only!
curl_setopt($curl3001, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3001, CURLOPT_SSL_VERIFYPEER, false);

$resp3001 = curl_exec($curl3001);
curl_close($curl3001);
//var_dump($resp);



$decodedJson = json_decode($resp3001); 
$size3001 = sizeof($decodedJson);
$size3001 = $size3001 - 1;
#echo $size;
#var_dump($decodedJson);
/* echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size3001]->Index . " <br> " . "Product Id: " . $decodedJson[$size3001]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size3001]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size3001]->Location. " <br> " . "User: " . $decodedJson[$size3001]->User. " <br> " . "Status: " . $decodedJson[$size3001]->Status. " <br> " . "Timestamp: " . $decodedJson[$size3001]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size3001]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size3001]->Hash;
 */
 $svr3001Index = $decodedJson[$size3001]->Index;
$svr3001ProductId = $decodedJson[$size3001]->ProductId;
$svr3001ProductModel = $decodedJson[$size3001]->ProductModel;
$svr3001Location = $decodedJson[$size3001]->Location;
$svr3001User = $decodedJson[$size3001]->User;
$svr3001Status = $decodedJson[$size3001]->Status;
$svr3001Timestamp = $decodedJson[$size3001]->Timestamp;
/*echo $svr3001Index;
echo "<br>";
echo $svr3001ProductId;
echo "<br>";
echo $svr3001ProductModel;
echo "<br>";
echo $svr3001Location;
echo "<br>";
echo $svr3001User;
echo "<br>";
echo $svr3001Status;
echo "<br>";
echo $svr3001Timestamp;
echo "<br>";
echo "<br>";
 */
?>


<?php
// PORT 3002 Validation

$url3002 = "http://svr1.tpboc.xyz:3002/";

$curl3002 = curl_init($url3002);
curl_setopt($curl3002, CURLOPT_URL, $url3002);
curl_setopt($curl3002, CURLOPT_RETURNTRANSFER, true);

$headers3002 = array(
   "Accept: application/json",
);
curl_setopt($curl3002, CURLOPT_HTTPHEADER, $headers3002);
//for debug only!
curl_setopt($curl3002, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3002, CURLOPT_SSL_VERIFYPEER, false);

$resp3002 = curl_exec($curl3002);
curl_close($curl3002);
//var_dump($resp);



$decodedJson = json_decode($resp3002); 
$size3002 = sizeof($decodedJson);
$size3002 = $size3002 - 1;
#echo $size;
#var_dump($decodedJson);
/* echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size3001]->Index . " <br> " . "Product Id: " . $decodedJson[$size3001]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size3001]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size3001]->Location. " <br> " . "User: " . $decodedJson[$size3001]->User. " <br> " . "Status: " . $decodedJson[$size3001]->Status. " <br> " . "Timestamp: " . $decodedJson[$size3001]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size3001]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size3001]->Hash;
 */
$svr3002Index = $decodedJson[$size3002]->Index;
$svr3002ProductId = $decodedJson[$size3002]->ProductId;
$svr3002ProductModel = $decodedJson[$size3002]->ProductModel;
$svr3002Location = $decodedJson[$size3002]->Location;
$svr3002User = $decodedJson[$size3002]->User;
$svr3002Status = $decodedJson[$size3002]->Status;
$svr3002Timestamp = $decodedJson[$size3002]->Timestamp;
/* echo $svr3002Index;
echo "<br>";
echo $svr3002ProductId;
echo "<br>";
echo $svr3002ProductModel;
echo "<br>";
echo $svr3002Location;
echo "<br>";
echo $svr3002User;
echo "<br>";
echo $svr3002Status;
echo "<br>";
echo $svr3002Timestamp;
echo "<br>";
echo "<br>"; */

?>

<?php
// PORT 3003 Validation

$url3003 = "http://svr1.tpboc.xyz:3003/";

$curl3003 = curl_init($url3003);
curl_setopt($curl3003, CURLOPT_URL, $url3003);
curl_setopt($curl3003, CURLOPT_RETURNTRANSFER, true);

$headers3003 = array(
   "Accept: application/json",
);
curl_setopt($curl3003, CURLOPT_HTTPHEADER, $headers3003);
//for debug only!
curl_setopt($curl3003, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3003, CURLOPT_SSL_VERIFYPEER, false);

$resp3003 = curl_exec($curl3003);
curl_close($curl3003);
//var_dump($resp);



$decodedJson = json_decode($resp3003); 
$size3003 = sizeof($decodedJson);
$size3003 = $size3003 - 1;
#echo $size;
#var_dump($decodedJson);
/* echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size3001]->Index . " <br> " . "Product Id: " . $decodedJson[$size3001]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size3001]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size3001]->Location. " <br> " . "User: " . $decodedJson[$size3001]->User. " <br> " . "Status: " . $decodedJson[$size3001]->Status. " <br> " . "Timestamp: " . $decodedJson[$size3001]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size3001]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size3001]->Hash;
 */
$svr3003Index = $decodedJson[$size3003]->Index;
$svr3003ProductId = $decodedJson[$size3003]->ProductId;
$svr3003ProductModel = $decodedJson[$size3003]->ProductModel;
$svr3003Location = $decodedJson[$size3003]->Location;
$svr3003User = $decodedJson[$size3003]->User;
$svr3003Status = $decodedJson[$size3003]->Status;
$svr3003Timestamp = $decodedJson[$size3003]->Timestamp;
/* echo $svr3003Index;
echo "<br>";
echo $svr3003ProductId;
echo "<br>";
echo $svr3003ProductModel;
echo "<br>";
echo $svr3003Location;
echo "<br>";
echo $svr3003User;
echo "<br>";
echo $svr3003Status;
echo "<br>";
echo $svr3003Timestamp;
echo "<br>";
echo "<br>"; */

?>

<?php
// PORT 3004 Validation

$url3004 = "http://svr1.tpboc.xyz:3004/";

$curl3004 = curl_init($url3004);
curl_setopt($curl3004, CURLOPT_URL, $url3004);
curl_setopt($curl3004, CURLOPT_RETURNTRANSFER, true);

$headers3004 = array(
   "Accept: application/json",
);
curl_setopt($curl3004, CURLOPT_HTTPHEADER, $headers3004);
//for debug only!
curl_setopt($curl3004, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3004, CURLOPT_SSL_VERIFYPEER, false);

$resp3004 = curl_exec($curl3004);
curl_close($curl3004);
//var_dump($resp);



$decodedJson = json_decode($resp3004); 
$size3004 = sizeof($decodedJson);
$size3004 = $size3004 - 1;
#echo $size;
#var_dump($decodedJson);
/* echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size3001]->Index . " <br> " . "Product Id: " . $decodedJson[$size3001]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size3001]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size3001]->Location. " <br> " . "User: " . $decodedJson[$size3001]->User. " <br> " . "Status: " . $decodedJson[$size3001]->Status. " <br> " . "Timestamp: " . $decodedJson[$size3001]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size3001]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size3001]->Hash;
 */
$svr3004Index = $decodedJson[$size3004]->Index;
$svr3004ProductId = $decodedJson[$size3004]->ProductId;
$svr3004ProductModel = $decodedJson[$size3004]->ProductModel;
$svr3004Location = $decodedJson[$size3004]->Location;
$svr3004User = $decodedJson[$size3004]->User;
$svr3004Status = $decodedJson[$size3004]->Status;
$svr3004Timestamp = $decodedJson[$size3004]->Timestamp;
/* echo $svr3004Index;
echo "<br>";
echo $svr3004ProductId;
echo "<br>";
echo $svr3004ProductModel;
echo "<br>";
echo $svr3004Location;
echo "<br>";
echo $svr3004User;
echo "<br>";
echo $svr3004Status;
echo "<br>";
echo $svr3004Timestamp;
echo "<br>";
echo "<br>"; */

?>

<?php
// PORT 3005 Validation

$url3005 = "http://svr1.tpboc.xyz:3005/";

$curl3005 = curl_init($url3005);
curl_setopt($curl3005, CURLOPT_URL, $url3005);
curl_setopt($curl3005, CURLOPT_RETURNTRANSFER, true);

$headers3005 = array(
   "Accept: application/json",
);
curl_setopt($curl3005, CURLOPT_HTTPHEADER, $headers3005);
//for debug only!
curl_setopt($curl3005, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3005, CURLOPT_SSL_VERIFYPEER, false);

$resp3005 = curl_exec($curl3005);
curl_close($curl3005);
//var_dump($resp);



$decodedJson = json_decode($resp3005); 
$size3005 = sizeof($decodedJson);
$size3005 = $size3005 - 1;
#echo $size;
#var_dump($decodedJson);
/* echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size3001]->Index . " <br> " . "Product Id: " . $decodedJson[$size3001]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size3001]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size3001]->Location. " <br> " . "User: " . $decodedJson[$size3001]->User. " <br> " . "Status: " . $decodedJson[$size3001]->Status. " <br> " . "Timestamp: " . $decodedJson[$size3001]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size3001]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size3001]->Hash;
 */
$svr3005Index = $decodedJson[$size3005]->Index;
$svr3005ProductId = $decodedJson[$size3005]->ProductId;
$svr3005ProductModel = $decodedJson[$size3005]->ProductModel;
$svr3005Location = $decodedJson[$size3005]->Location;
$svr3005User = $decodedJson[$size3005]->User;
$svr3005Status = $decodedJson[$size3005]->Status;
$svr3005Timestamp = $decodedJson[$size3005]->Timestamp;
/* echo $svr3005Index;
echo "<br>";
echo $svr3005ProductId;
echo "<br>";
echo $svr3005ProductModel;
echo "<br>";
echo $svr3005Location;
echo "<br>";
echo $svr3005User;
echo "<br>";
echo $svr3005Status;
echo "<br>";
echo $svr3005Timestamp;
echo "<br>";
echo "<br>"; */
?>

<?php
// PORT 3006 Validation

$url3006 = "http://svr1.tpboc.xyz:3006/";

$curl3006 = curl_init($url3006);
curl_setopt($curl3006, CURLOPT_URL, $url3006);
curl_setopt($curl3006, CURLOPT_RETURNTRANSFER, true);

$headers3006 = array(
   "Accept: application/json",
);
curl_setopt($curl3006, CURLOPT_HTTPHEADER, $headers3006);
//for debug only!
curl_setopt($curl3006, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3006, CURLOPT_SSL_VERIFYPEER, false);

$resp3006 = curl_exec($curl3006);
curl_close($curl3006);
//var_dump($resp);



$decodedJson = json_decode($resp3006); 
$size3006 = sizeof($decodedJson);
$size3006 = $size3006 - 1;
#echo $size;
#var_dump($decodedJson);
/* echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size3001]->Index . " <br> " . "Product Id: " . $decodedJson[$size3001]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size3001]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size3001]->Location. " <br> " . "User: " . $decodedJson[$size3001]->User. " <br> " . "Status: " . $decodedJson[$size3001]->Status. " <br> " . "Timestamp: " . $decodedJson[$size3001]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size3001]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size3001]->Hash;
 */
$svr3006Index = $decodedJson[$size3006]->Index;
$svr3006ProductId = $decodedJson[$size3006]->ProductId;
$svr3006ProductModel = $decodedJson[$size3006]->ProductModel;
$svr3006Location = $decodedJson[$size3006]->Location;
$svr3006User = $decodedJson[$size3006]->User;
$svr3006Status = $decodedJson[$size3006]->Status;
$svr3006Timestamp = $decodedJson[$size3006]->Timestamp;
/* echo $svr3006Index;
echo "<br>";
echo $svr3006ProductId;
echo "<br>";
echo $svr3006ProductModel;
echo "<br>";
echo $svr3006Location;
echo "<br>";
echo $svr3006User;
echo "<br>";
echo $svr3006Status;
echo "<br>";
echo $svr3006Timestamp;
echo "<br>";
echo "<br>"; */
?>
<?php

$arrayString3001timestamp=  explode(" ", $svr3001Timestamp ); // split string with space (white space) as a delimiter.
/* echo "<br>";
echo "<br>";
Print_r($arrayString3001timestamp[0]); // printing the output array…
echo "<br>";
echo "<br>";
echo $arrayString3001timestamp[0];
echo "<br>";
echo "<br>"; */
$timestamp3001=$arrayString3001timestamp[0];
/* echo "<br>";
echo "<br>";
echo $timestamp3001;
echo "<br>";
echo "<br>"; */
$query = "UPDATE products SET location='$svr3001Location' , product_state='$svr3001Status' , timestamp='$timestamp3001' WHERE product_title='$svr3001ProductModel' ";
// mysqli_query($conn,$query);
if (mysqli_query($conn, $query)) {
    //echo "Record updated successfully";
}else {
    //echo "Error updating record: " . mysqli_error($conn);
}

?>
<?php
$arrayString3002timestamp=  explode(" ", $svr3002Timestamp ); // split string with space (white space) as a delimiter.
$timestamp3002=$arrayString3002timestamp[0];

$query = "UPDATE products SET location='$svr3002Location' , product_state='$svr3002Status' , timestamp='$timestamp3002' WHERE product_title='$svr3002ProductModel' ";
// mysqli_query($conn,$query);
if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
}else {
    echo "Error updating record: " . mysqli_error($conn);
}

?>
<?php
$arrayString3003timestamp=  explode(" ", $svr3003Timestamp ); // split string with space (white space) as a delimiter.
$timestamp3003=$arrayString3003timestamp[0];

$query = "UPDATE products SET location='$svr3003Location' , product_state='$svr3003Status' , timestamp='$timestamp3003' WHERE product_title='$svr3003ProductModel' ";
// mysqli_query($conn,$query);
if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
}else {
    echo "Error updating record: " . mysqli_error($conn);
}

?>
<?php
$arrayString3004timestamp=  explode(" ", $svr3004Timestamp ); // split string with space (white space) as a delimiter.
$timestamp3004=$arrayString3004timestamp[0];

$query = "UPDATE products SET location='$svr3004Location' , product_state='$svr3004Status' , timestamp='$timestamp3004' WHERE product_title='$svr3004ProductModel' ";
// mysqli_query($conn,$query);
if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
}else {
    echo "Error updating record: " . mysqli_error($conn);
}

?>
<?php
$arrayString3005timestamp=  explode(" ", $svr3005Timestamp ); // split string with space (white space) as a delimiter.
$timestamp3005=$arrayString3005timestamp[0];

$query = "UPDATE products SET location='$svr3005Location' , product_state='$svr3005Status' , timestamp='$timestamp3005' WHERE product_title='$svr3005ProductModel' ";
// mysqli_query($conn,$query);
if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
}else {
    echo "Error updating record: " . mysqli_error($conn);
}

?>
<?php
$arrayString3006timestamp=  explode(" ", $svr3006Timestamp ); // split string with space (white space) as a delimiter.
$timestamp3006=$arrayString3006timestamp[0];

$query = "UPDATE products SET location='$svr3006Location' , product_state='$svr3006Status' , timestamp='$timestamp3006' WHERE product_title='$svr3006ProductModel' ";
// mysqli_query($conn,$query);
if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
}else {
    echo "Error updating record: " . mysqli_error($conn);
}

?>
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
        <title>B-COC</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

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
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="checkin.php">In</a></li> -->
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="archiveinnew.php">Archive In</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="plogindex.php">Home</a></li>
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Login</a></li> -->
                      </ul>
                </div>
            </div>
        </nav>
         <!-- Masthead-->
         <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Evidence Archival</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">A responsive blockchain system.</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#portfolio">ARCHIVE-OUT</a>
                </div>
            </div>
        </header>
           <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Check-In</h2>
    </div>
    <div class="row" data-aos="fade-up" data-aos-delay="150">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <!-- <li data-filter="*" class="filter-active">All</li> -->
          <li data-filter=".filter-app">TAKE OUT EVIDENCE FROM THE ARCHIVE HERE!</li>
          <!-- <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li> -->
        </ul>
      </div>
    </div>


    <?php
   /*    $query = "SELECT * FROM products WHERE product_state='out'";
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
          echo "<div class='row portfolio-container' data-aos='fade-up' data-aos-delay='300'>";
          echo"<div class='col-lg-4 col-md-6 portfolio-item filter-app'>";
          echo"<div class='portfolio-wrap'>";
          echo"<img src='product_images/$productImage' class='img-fluid' alt=''>";
          echo"<div class='portfolio-info'>";
          echo"<h4>App 1</h4>";
          echo" <p>App</p>";
          echo"<div class='portfolio-links'>";
          echo"<a href='assets/img/portfolio/portfolio-1.jpg' data-gallery='portfolioGallery' class='portfolio-lightbox' title='App 1'><i class='bx bx-plus'></i></a>";
          echo"<a href='productIn.php?productToAdd=$productID' title='More Details'><i class='bx bx-link'></i></a>";
          echo"</div>";
          echo"</div>";
          echo"</div>";
          echo"</div>";
        }
      } 
      else {
          echo "Nothing Has Been Checked out!";
      } */
    
    ?>
    
      </div>

        </div>
    </section><!-- End Portfolio Section -->
 <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

          <?php
            $query = "SELECT * FROM products WHERE product_state='archive in'";
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
                /* echo "<div class='row portfolio-container' data-aos='fade-up' data-aos-delay='300'>";
                echo"<div class='col-lg-4 col-md-6 portfolio-item filter-app'>";
                echo"<div class='portfolio-wrap'>";
                echo"<img src='product_images/$productImage' class='img-fluid' alt=''>";
                echo"<div class='portfolio-info'>";
                echo"<h4>App 1</h4>";
                echo" <p>App</p>";
                echo"<div class='portfolio-links'>";
                echo"<a href='assets/img/portfolio/portfolio-1.jpg' data-gallery='portfolioGallery' class='portfolio-lightbox' title='App 1'><i class='bx bx-plus'></i></a>";
                echo"<a href='productIn.php?productToAdd=$productID' title='More Details'><i class='bx bx-link'></i></a>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
                echo"</div>"; */

                echo'<article class="entry">';

                echo"<div class='entry-img'>";
                echo"<img src='product_images/$productImage' alt='' class='img-fluid'>";
                echo'</div>';

                echo"<h2 class='entry-title'>";
                echo"<a href='deets.php?productToDisplay=$productID'>";
                echo $productTitle;
                echo"</a>";
                echo"</h2>";
                echo"<div class='portfolio-links'>";
                echo"<a href='archiveOut.php?productToAdd=$productID' title='More Details'>";
                echo"<button type='button' class='btn btn-outline-success'>ARCHIVE OUT</button>";
                echo"</a>";
                echo"</div>";

            

                echo"</article>"; 
                //<!-- End blog entry -->
                }
            } 
            else {
                echo "Nothing Has Been Checked out!";
            }
    
    ?>
            



          </div><!-- End blog entries list -->

          <<!-- div class="col-lg-4">

<div class="sidebar">

  <h3 class="sidebar-title">Search</h3>
  <div class="sidebar-item search-form">
    <form action="searchin.php" method="POST">
      <input type="text" name="search">
      <button name="but_search" type="submit"><i class="icofont-search"></i></button>
    </form>

  </div> --><!-- End sidebar search formn-->

  <!-- <h3 class="sidebar-title">Categories</h3>
  <div class="sidebar-item categories">
    <ul>
      <li><a href="weapons.php">Weapons <span>(25)</span></a></li>
      <li><a href="narcotics.php">Narcotics <span>(12)</span></a></li>
      <li><a href="hardware.php">Hardware <span>(5)</span></a></li>
      <li><a href="documents.php">Documents <span>(22)</span></a></li>
      <li><a href="vehicles.php">Vehicles <span>(8)</span></a></li>
      <li><a href="others.php">Others <span>(14)</span></a></li>
    </ul>

  </div> --><!-- End sidebar categories-->

  

  

</div><!-- End sidebar -->

</div><!-- End blog sidebar -->

</div>

</div>
</section><!-- End Blog Section -->
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
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
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





  <!--     Eterna      -->
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