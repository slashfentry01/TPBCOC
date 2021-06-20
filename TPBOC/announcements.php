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
if(isset($_POST['add_announcement'])){
     //datetime
        ///////////////////////////////////////////////
        date_default_timezone_set( 'Asia/Singapore' ) ;
        $today = date( "Y-m-d H:i:s" ) ;
        ///////////////////////////////////////////////
        $title = $_REQUEST['title']; 
        //echo $title;
        $message = $_REQUEST['message']; 
        //echo $message;
    
    $inputSuccess=true;

    if(empty($title)){
        echo "<script type='text/javascript'>alert('ERROR. TYPE SMTHINGIN THE TITLE!!!!!');</script>";
        $inputSuccess=false;

    }
    if (empty($message)){
        echo "<script type='text/javascript'>alert('ERROR. TYPE SMTHING IN THE MESSAGE!!!!!');</script>";
        $inputSuccess=false;

    }
    
    if($inputSuccess){ //if the variable $inputSuccess created is true, it will go through and run the following statements:

        $query = "insert into announcements(username,title,message,datetime) values('$username','$title','$message','$today')";
        mysqli_query($conn,$query);
    }
     
    

 
}


if(isset($_POST['delete_announcement'])){
    $idToDelete = $_REQUEST["announcementToDelete"];
    $query= $conn->prepare("Delete from announcements where id = ?");
    $query->bind_param('i', $idToDelete); //bind the parameters

    if ($query->execute()){  //execute query
        echo "Query executed.";
    }else{
        echo "Error executing query.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'adminTopbar.php'; ?>

<header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">WELCOME ADMIN!</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">This is the announcements page</h2>
                <a class="btn btn-primary js-scroll-trigger" href="#listannouncement"><b>List Announcements</b></a>
                <a class="btn btn-primary js-scroll-trigger" href="#addannouncement"><b>Add Announcements</b></a>
            </div>
        </div>
    </header>
    <body>
    
    <section class="projects-section bg-light" id="listannouncement">
    <div class="container d-flex h-100 align-items-center">
    <?php
        $query = "SELECT * FROM announcements";
        $result = mysqli_query($conn, $query);
        echo "<h1 class='mx-auto my-0 text-uppercase'>Announcements</h1>";
        echo "</div>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table class='table table-bordered table-dark'>";
                  echo "<thead>";
                  echo "<tr>";
                  echo "<th scope='col'>Username</th>";
                  echo "<th scope='col'>Datetime</th>";
                  echo "<th scope='col'>Title</th>";
                  echo "<th scope='col'>Message</th>";
                 /*  echo "<th scope='col'>Edit</th>";
                  echo "<th scope='col'>Delete</th>"; */
                  echo "</tr>";
                  echo "</thead>";
                  echo "<tbody>";
             while ($row = $result->fetch_assoc()) {
                  $idDisplay = $row["id"];
                  $usernameDisplay = $row["username"];
                  $datetimeDisplay = $row["datetime"];
                  $titleDisplay = $row["title"];
                  $messageDisplay = $row["message"];
                  
                  echo "<form action='editAnnouncement.php' method='POST' >";
                  echo "<tr>";
                  echo "<td>$usernameDisplay</td>";
                  echo "<td>$datetimeDisplay</td>";
                  echo "<td>$titleDisplay</td>";
                  echo "<td>$messageDisplay</td>";
                  // echo "<td>$zone1</td>";
                  echo "<input type='hidden' name='announcementToEdit' id='hiddenField' value='$idDisplay' />";
                  echo "<td><button type='submit' class='btn btn-primary btn-sm' name='edit_announcement'>Edit</button></td>";
                  echo "</form>";
                  echo "<form action='' method='POST' >";
                  echo "<input type='hidden' name='announcementToDelete' id='hiddenField' value='$idDisplay' />";
                  echo "<td><button type='submit' class='btn btn-primary btn-sm' name='delete_announcement'>Delete</button></td>";
                  echo "</form>";
                  /* echo "<td><button type='submit' class='btn btn-primary btn-sm'>Reset</button></td>";
                  if($role1 == 'admin'){
                  echo "</form>";
                  echo "<form action='revokeAdmin.php' method='POST' >";
                  echo "<input type='hidden' name='userToRevokeAdmin' id='hiddenField' value='$username1' />";
                  echo "<td><button type='submit' class='btn btn-primary btn-sm'>Revoke Admin</button></td>";
                  echo "</form>";
                  }
                  else{
                  echo "</form>";
                  echo "<form action='makeAdmin.php' method='POST' >";
                  echo "<input type='hidden' name='userToMakeAdmin' id='hiddenField' value='$username1' />";
                  echo "<td><button type='submit' class='btn btn-primary btn-sm'>Make Admin</button></td>";
                  echo "</form>";
                  }
                  echo "<td>";
                  echo "<form action='editZone.php' method='POST' >";
                  echo "<select value='stores' class='form-control' name='newzone' id='exampleFormControlSelect1'>";
                  echo "<option ";
                  if($zone1 == 'all'){echo("selected");}
                  echo ">all</option>";

                  echo "<option ";
                  if($zone1 == 'stores'){echo("selected");}
                  echo ">stores</option>";

                  echo "<option ";
                  if($zone1 == 'reviews'){echo("selected");}
                  echo ">reviews</option>";

                  echo "<option ";
                  if($zone1 == 'inventory'){echo("selected");}
                  echo ">inventory</option>";

                  echo "<option ";
                  if($zone1 == 'staff'){echo("selected");}
                  echo ">staff</option>";

                  echo "<option ";
                  if($zone1 == 'users'){echo("selected");}
                  echo ">users</option>";

                  echo "<option ";
                  if($zone1 == 'normaluser'){echo("selected");}
                  echo ">normal user</option>";

                  echo "</select>";
                  echo "</div>";
                  echo "<button type='submit' class='btn btn-primary btn-sm'>Edit</button>";
                  echo "<input type='hidden' name='userToEditZone' id='hiddenField' value='$username1' />";
                  echo "</form>";
                  echo "</td>"; */
                 
        
                }
                echo "</tr>";
                echo "</tbody>";
                echo "</table>";
            }
            
    ?>
       
       
    </section>


 <!-- Bootstrap core JS-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</html>
<?php
include 'init.php';

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="notePadTextarea.css">


    <body>
    <section id="addannouncement"> 

    <!-- <section class="projects-section bg-light" id="addannouncement"> -->
        
        <div id="wrapper">

<form id="paper" method="POST" action="">
<!-- <div class="container d-flex h-100 align-items-center"> -->
    <?php //echo "<h1 class='mx-auto my-0 text-uppercase'>Add Announcement Here</h1>"; ?>
    
    <!-- </div> -->
     <br><br> 
    <div id="margin">Title: <input id="title" type="text" name="title" placeholder="Add Title Here!"></div>
    <textarea placeholder="Enter something funny." id="text" name="message" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px; "></textarea>  
    <br>
    <input id="button" type="submit" name="add_announcement" value="Create">
    
</form>

</div>
        </section>
<!-- <div class="container d-flex h-100 align-items-center"> -->
        <?php
        $query = "SELECT * FROM announcements";
        $result = mysqli_query($conn, $query);
        // echo "<h1 class='mx-auto my-0 text-uppercase'>Announcements</h1>";
            echo "<br>";
            if ($result->num_rows > 0) {
                // output data of each row
                // while ($row = $result->fetch_assoc()) {
                //     $username1 = $row["username"];
                //     $email1 = $row["email"];
                //     $password1 = $row["password"];
                //     $imagesrc1 = $row["image"];
                //     $number1 = $row["number"];
                //     $role1 = $row["role"];
                //     $zone1 = $row["zone"];
                }
            
    ?>
        <!-- </div> -->
    <!-- </section> -->


 
    <script src="notePadTextarea.js"></script>

</html>