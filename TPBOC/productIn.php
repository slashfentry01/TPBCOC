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

$query = "UPDATE `products` SET `product_state` = 'in' WHERE `products`.`product_id` ='$productToAdd'";
$result = mysqli_query($conn,$query);


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
    $timestamp = $row["timestamp"]; // This is meant for this page only

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

/////////////////////////////////////////////////
date_default_timezone_set( 'Asia/Singapore' ) ;
$today = date( "Y-m-d H:i:s" ) ;
///////////////////////////////////////////////////
$caseid = uniqid(); // generate unique ID
$query1 = "INSERT INTO `data`(`action`, `case_id`, `username`, `timestamp`) VALUES ('$productState','$caseid','$username','$today')";
$result = mysqli_query($connn,$query1);

// $Insertquery= $connn->prepare("INSERT INTO data VALUES (?,?,?,?)"); //prepared statement
// $Insertquery->bind_param("ssss", $productState,$caseid,$username,$timestamp); //bind the parameters
// $Insertquery->execute(); 


//header("location: checkInReq.php");
//header("location: jeff.php");


?>
<?php

/////////////////////////////////////
$hostname3="127.0.0.1";
$username3="root";
$password3="";
$db3 = "audit_trail";
$dbh = new PDO("mysql:host=$hostname3;dbname=$db3", $username3, $password3);
foreach($dbh->query('SELECT action,COUNT(*) FROM data GROUP BY action ') as $row) {
/* echo "<tr>";
echo "<td>" . $row['action'] . "</td>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "</tr>";
 */

$action=$row['action'];
$count=$row['COUNT(*)'];

/* $Insertquery= $connn->prepare("INSERT INTO action_count VALUES (?,?)"); //prepared statement
$Insertquery->bind_param("si", $action,$count); //bind the parameters
$query->execute(); */




$host4 = '127.0.0.1';  //the name of the mysql service inside the docker file.
$user4 = 'root';
$password4 = '';
$db24 = 'audit_trail';
$connn4 = new mysqli($host4,$user4,$password4,$db24);


//if($connn4->connect_error){
 // echo 'connection failed'. $connn4->connect_error;
//}


/* $Insertquery = "insert into action_count(action, occurences) values('$action',$count)";
mysqli_query($connn,$Insertquery); */

$queryUpdate = "UPDATE action_count SET occurences='$count' WHERE action='$action'";
if (mysqli_query($connn4, $queryUpdate)) {
     echo "Record updated successfully";
    header("location: checkInReq.php");
}else {
     //echo "Error updating record:  PS EPIC FAIL" . mysqli_error($connn4);
}



}

//////////////////////////////////////////

?>