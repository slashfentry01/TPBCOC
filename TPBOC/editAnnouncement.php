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
<?php


if(isset($_POST['edit_announcement'])){

$idForEdit = $_REQUEST['announcementToEdit'];

$queryP="SELECT * FROM announcements WHERE id = '$idForEdit'"; //sql query
$pQuery = $conn->prepare($queryP); //Prepared statement
$result=$pQuery->execute(); //execute the prepared statement
$result=$pQuery->get_result(); //store the result of the query from prepared statement
if(!$result) {
    die("SELECT query failed<br> ".$conn->error);
}
else {
    echo "SELECT query successful<br>";
}
$nrows=$result->num_rows; //store the number of rows from the results
echo "#rows=$nrows<br>";

if ($nrows>0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    $username1 = $row["username"];
    $datetime1 = $row["datetime"];
    $title1 = $row["title"];
    $message1 = $row["message"];
    $idForEditFinal = $row["id"];
}
}


}

if(isset($_POST['edited_announcement'])){

    $idToEdit = $_REQUEST['finalAnnouncementToEdit'];
    $title2 = $_REQUEST['editedTitle']; 
    $message2 = $_REQUEST['editedMessage'];
    date_default_timezone_set( 'Asia/Singapore' ) ;
    $today = date( "Y-m-d H:i:s" ) ;
    
    $query = "UPDATE announcements SET title='$title2', message='$message2' , username='$username' ,datetime='$today' WHERE id='$idToEdit' ";
    
    if (mysqli_query($conn, $query)) {
         echo "Record updated successfully";
         header("location: announcements.php");
     }else {
         echo "Error updating record: " . mysqli_error($conn);
       }



}

?>

<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="notePadTextarea.css">

<header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">WELCOME ADMIN!</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Edit here</h2>
                <a class="btn btn-primary js-scroll-trigger" href="#addannouncement"><b>Edit Announcement</b></a>
            </div>
        </div>
    </header>
    <?php include 'adminTopbar.php'; ?>
    <body>
<!-- <section class="projects-section bg-light" id="addannouncement"> -->
<div id="wrapper">

	<form id="paper" method="POST" action="">

		<div id="margin">Title: <input id="title" type="text" name="editedTitle" placeholder='<?php echo $title1; ?>'></div>
        <input type='hidden' name='finalAnnouncementToEdit' id='hiddenField' value='<?php echo $idForEditFinal; ?>' />
		<textarea placeholder='<?php echo $message1; ?>' id='text' name='editedMessage' rows='4' style='overflow: hidden; word-wrap: break-word; resize: none; height: 160px; '></textarea>  
		<br>
		<input id="button" type="submit" name="edited_announcement" value="Edit">
		
	</form>

</div>
<!-- </section> -->
<script src="notePadTextarea.js"></script>
</body>
</html>