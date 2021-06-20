<?php
include 'init.php';
include 'init2.php';
/////////////////////////////////////////////////
?>

<?php

?>

<?php
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
// set time-out period (in seconds)

//CHECK IF VALID USER
//////////////////////////////////////////////////

//$productToAdd = $_REQUEST['productToAdd'];
$productToAdd = $_GET['productToAdd'];
echo $productToAdd;
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
//"UPDATE products SET location='$svr3002ProductId' , product_state='$svr3002Status' , timestamp='$timestamp3002' WHERE product_title='$svr3002ProductModel' "
//$query = "UPDATE `products` SET `product_state` = 'archive in' WHERE `products`.`product_id` ='$productToAdd'";
$query = "UPDATE products SET product_state='in' WHERE product_id='$productToAdd'";
if (mysqli_query($conn, $query)) {
    // echo "Record updated successfully";
}else {
    // echo "Error updating record: " . mysqli_error($conn);
}


$query = "SELECT * FROM products WHERE product_id='$productToAdd'";
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

    echo $productID;
    echo $productTitle;
    echo $productDesc;
    echo $productImage;
    echo $productKeywords;
    echo $productPort;    
    echo $productState;
    echo $location;

    $_SESSION['product_id'] = $productID;
    $_SESSION['product_title'] = $productTitle;
    $_SESSION['product_desc'] = $productDesc;
    $_SESSION['product_image'] = $productImage;
    $_SESSION['product_keywords'] = $productKeywords;
    $_SESSION['product_port'] = $productPort;
    $_SESSION['product_state'] = $productState;
    $_SESSION['location'] = $location;

}
} 
else {
    echo "Nothing Has Been Checked out!";
}
header("location: reuseInReq.php");
//header("location: jeff.php");


?>