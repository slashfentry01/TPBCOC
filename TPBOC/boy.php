<?php
session_start();
if (isset($_SESSION['email']) == true) {
    $emailSesh = $_SESSION['email'];
    $usernameSesh = $_SESSION['username'];
    // echo "WELCOMEEEEE" . $email;
    //////////////////////////////////
    $time = $_SERVER['REQUEST_TIME'];
    echo $emailSesh;

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
////////////////////////////////////////////////////////////
}else{
    header("location: signup.php");
}

include("init.php");

// select statement
$queryP="SELECT * FROM users WHERE email = '$emailSesh'"; //sql query
$pQuery = $conn->prepare($queryP); //Prepared statement
$result=$pQuery->execute(); //execute the prepared statement
$result=$pQuery->get_result(); //store the result of the query from prepared statement
$nrows=$result->num_rows; //store the number of rows from the results

if ($nrows>0) {
// output data of each row
while($row = $result->fetch_assoc()) { 
    $imagesrc = $row["image"];

}
}
else {
 echo "0 results";
//header('Location: ../cdenoexst');
}

echo $imagesrc;


?>