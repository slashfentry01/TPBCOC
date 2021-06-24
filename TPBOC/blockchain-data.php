<?php
include 'init.php';
/////////////////////////////////////////////////
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
    }

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


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TPBCOC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">TPBCOC</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="plogindexAdmintest.php">Home</a></li>
          
          <li><a class="getstarted scrollto" href="profile.php">>My Profile -- <?php echo $username ?></a></li>
    
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

 

  <main id="main">

<?php
   
   $query = "SELECT * FROM products";
   $result = mysqli_query($conn, $query);
   
   
   
   
   
   
   if ($result->num_rows > 0) {
       // output data of each row
       while ($row = $result->fetch_assoc()) {
           $product_title11 = $row["product_title"];
           $product_port11 = $row["product_port"];
           $product_state11 = $row["product_state"];
           $category11 = $row["category"];
           $location11 = $row["location"];
           $case_name11 = $row["case_name"];
           $product_id11 = $row["product_id"];
           ?>

           <!-- ======= Services Section ======= -->
           <section id="services" class="services section-bg">
             <div class="container" data-aos="fade-up">
       
               <div class="section-title">
                 <h2>Port: <?php echo $product_port11; ?></h2>
                 <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
               </div>
       
               <div class="row">
                 <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                   <div class="icon-box iconbox-blue">
                     <div class="icon">
                       <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                         <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                       </svg>
                       <i class="bx bxl-dribbble"></i>
                     </div>
                     <h4><a href=""><?php echo $product_title11; ?></a></h4>
                     <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                   <div class="icon-box iconbox-orange ">
                     <div class="icon">
                       <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                         <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                       </svg>
                       <i class="bx bx-file"></i>
                     </div>
                     <h4><a href=""><?php echo $category11; ?></a></h4>
                     <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                   <div class="icon-box iconbox-pink">
                     <div class="icon">
                       <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                         <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                       </svg>
                       <i class="bx bx-tachometer"></i>
                     </div>
                     <h4><a href=""><?php echo $product_state11; ?></a></h4>
                     <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                   <div class="icon-box iconbox-yellow">
                     <div class="icon">
                       <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                         <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                       </svg>
                       <i class="bx bx-layer"></i>
                     </div>
                     <h4><a href=""><?php echo $location11; ?></a></h4>
                     <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                   <div class="icon-box iconbox-red">
                     <div class="icon">
                       <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                         <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                       </svg>
                       <i class="bx bx-slideshow"></i>
                     </div>
                     <h4><a href=""><?php echo $case_name11; ?></a></h4>
                     <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                   </div>
                 </div>
       
                 <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                   <div class="icon-box iconbox-teal">
                     <div class="icon">
                       <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                         <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                       </svg>
                       <i class="bx bx-arch"></i>
                     </div>
                     <h4><a href="">Product ID: <?php echo $product_id11; ?></a></h4>
                     <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                   </div>
                 </div>
       
               </div>
       
             </div>
           </section><!-- End Sevices Section -->
<?php
       }
           echo "</tr>";
           echo "</tbody>";
           echo "</table>";
   } else {
       echo "0 results";
       //header('Location: ../cdenoexst');
   }
?>


   


  
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Yosef</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by Yosef</a>
        </div>
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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