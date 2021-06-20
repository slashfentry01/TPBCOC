<?php
include 'init.php';
/////////////////////////////////////////////////
session_start();
if (isset($_SESSION['email']) == true) {
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    // echo "WELCOMEEEEE" . $email;
}else{
    header("location: signup.php");
}
//CHECK IF VALID USER
//////////////////////////////////////////////////
$inputSuccess=true;
$usernameold = $_REQUEST['usernameold'];
$newpassword = $_REQUEST['newpassword'];
if(!preg_match("/[a-zA-Z0-9!@#$ ]{8,255}/",$newpassword)){ //this regex will validate if the user password contains at least 8 chars, and only contains alphanumeric chars, spaces and some symbols
    echo "<script type='text/javascript'>alert('ERROR. Passwords must be of minimum length 8 characters. We only accept alphanumeric characters, spaces and select symbols: @,# and $.'); window.location.replace('plogindexAdminUsers.php');</script>";
    $inputSuccess=false;
}

    if($inputSuccess){
$newpasswordrepeat = $_REQUEST['newpasswordrepeat'];
$newpassword1 = mysqli_real_escape_string($conn, $newpassword); //escape strings
$newpasswordrepeat1 = mysqli_real_escape_string($conn, $newpasswordrepeat); //escape strings
if ($newpassword1 == $newpasswordrepeat1){
    $hash = password_hash($newpasswordrepeat1, PASSWORD_BCRYPT);
    // echo $username;
    // echo $email;
    // echo $password;
    // echo $number;

    $query = "UPDATE users SET password='$hash'WHERE username='$usernameold' ";
    // mysqli_query($conn,$query);
    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully";
        header("location: plogindexAdmintest.php");
    }else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} }

?>
