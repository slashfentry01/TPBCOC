<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
?>


<?php
include 'init.php';
/////////////////////////////////////////////////
session_start();
if (isset($_SESSION['email']) == true) {
    $email = $_SESSION['email'];
    //$username = $_SESSION['username'];
    // echo "WELCOMEEEEE" . $email . $name;
}else{
    header("location: signup.php");
}
//CHECK IF VALID USER
//////////////////////////////////////////////////
$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $password = $row["password"];
        $imagesrc = $row["image"];
        $number = $row["number"];
        $f2asecret =  $row["2fasecret"];
    }
    } else {
     echo "0 results";
    //header('Location: ../cdenoexst');
    }
?>



<?php

 
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "randomEmail@gmail.com";
    $mail->Password   = "EmailPassword";
    $mail->IsHTML(true);
    $mail->AddAddress($email, "Customer");
    $mail->SetFrom("randomEmail@gmail.com", "Joseph");
    /* 
    $mail->AddAddress("recipient-email@domain", "recipient-name");
    $mail->SetFrom("from-email@gmail.com", "from-name");
    $mail->AddReplyTo("reply-to-email@domain", "reply-to-name"); */

    //$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
    $mail->Subject = "MyLocal MarketPlace Support Team!!!";
    $content = '<body>
    <div align="center"><p7><strong>HELLO THANKS FOR SIGNING UP!</strong></p7></div>
    <h9><u>Details</u></h9><br/>
    <h9><strong>CODE:</strong>' . $f2asecret . '
    </body>';
    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
    echo "Error while sending Email."; 
    var_dump($mail);
    } else {
    echo "Email sent successfully";
    header("Location:emailverification.php");
    }
?>