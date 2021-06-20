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

<!DOCTYPE html>
<html lang="en">

<?php include 'adminTopbar.php'; ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">WELCOME ADMIN!</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">This is your admin pannel.</h2>
                <a class="btn btn-primary js-scroll-trigger" href="#projects">User Panel</a>
            </div>
        </div>
    </header>


    <!-- About-->
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container">
            <!-- <h1 class="mx-auto my-0 text-uppercase">USERS!</h1>
            <br> -->
            <!-- <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Role</th>
                    <th scope="col">Reset</th>
                    <th scope="col">Admin</th>
                    </tr>
                </thead>
                <tbody> -->
            <?php
            $query = "SELECT * FROM users";
            $result = mysqli_query($conn, $query);
            echo "<h1 class='mx-auto my-0 text-uppercase'>USERS!</h1>";
            echo "<br>";
            echo "<table class='table table-bordered table-dark'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>Username</th>";
            echo "<th scope='col'>Email</th>";
            echo "<th scope='col'>Number</th>";
            echo "<th scope='col'>Role</th>";
            echo "<th scope='col'>Reset</th>";
            echo "<th scope='col'>Admin</th>";
            echo "<tbody>";
            // echo "<th scope='col'>Zone</th>";
            echo "</tr>";
            echo "</thead>";
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $username1 = $row["username"];
                    $email1 = $row["email"];
                    $password1 = $row["password"];
                    $imagesrc1 = $row["image"];
                    $number1 = $row["number"];
                    $role1 = $row["role"];
                    //$zone1 = $row["zone"];
                    //echo $zone1;
                    //header("Location: " .  $row['link'] . " ");
                    //echo
                    //echo "number: " . $number1. "<br>";
                    // echo "email: " . $email. "<br>";
                    // echo "password: " . $row["password"]. "<br>";
                    // echo "image: " . $row["image"]. "<br>";

                  
                    
                    echo "<form action='profileAdmin.php' method='POST' >";
                    echo "<tr>";
                    echo "<td>$username1</th>";
                    echo "<td>$email1</td>";
                    echo "<td>$number1</td>";
                    echo "<td>$role1</td>";
                    // echo "<td>$zone1</td>";
                    echo "<input type='hidden' name='emailToEdit' id='hiddenField' value='$email1' />";
                    echo "<input type='hidden' name='userToEdit' id='hiddenField' value='$username1' />";
                    echo "<td><button type='submit' class='btn btn-primary btn-sm'>Edit</button></td>";
                    if ($role1 == 'admin') {
                        echo "</form>";
                        echo "<form action='revokeAdmin.php' method='POST' >";
                        echo "<input type='hidden' name='userToRevokeAdmin' id='hiddenField' value='$username1' />";
                        echo "<td><button type='submit' class='btn btn-primary btn-sm'>Revoke Admin</button></td>";
                        echo "</form>";
                    } else {
                        echo "</form>";
                        echo "<form action='makeAdmin.php' method='POST' >";
                        echo "<input type='hidden' name='userToMakeAdmin' id='hiddenField' value='$username1' />";
                        echo "<td><button type='submit' class='btn btn-primary btn-sm'>Make Admin</button></td>";
                        echo "</form>";
                    }
                   /*  echo "<td>";
                    echo "<form action='editZone.php' method='POST' >";
                    echo "<select value='stores' class='form-control' name='newzone' id='exampleFormControlSelect1'>";
                    echo "<option ";
                    if ($zone1 == 'all') {
                        echo ("selected");
                    }
                    echo ">all</option>";

                    echo "<option ";
                    if ($zone1 == 'stores') {
                        echo ("selected");
                    }
                    echo ">stores</option>";

                    echo "<option ";
                    if ($zone1 == 'reviews') {
                        echo ("selected");
                    }
                    echo ">reviews</option>";

                    echo "<option ";
                    if ($zone1 == 'inventory') {
                        echo ("selected");
                    }
                    echo ">inventory</option>";

                    echo "<option ";
                    if ($zone1 == 'staff') {
                        echo ("selected");
                    }
                    echo ">staff</option>";

                    echo "<option ";
                    if ($zone1 == 'users') {
                        echo ("selected");
                    }
                    echo ">users</option>";

                    echo "<option ";
                    if ($zone1 == 'normaluser') {
                        echo ("selected");
                    }
                    echo ">normal user</option>";

                    echo "</select>";
                    echo "</div>";
                    echo "<button type='submit' class='btn btn-primary btn-sm'>Edit</button>";
                    echo "<input type='hidden' name='userToEditZone' id='hiddenField' value='$username1' />";
                    echo "</form>";
                    echo "</td>"; */
                    
                    //cant display password; data exposure vuln!
                }
                    echo "</tr>";
                    echo "</tbody>";
                    echo "</table>";
            } else {
                echo "0 results";
                //header('Location: ../cdenoexst');
            }

            ?>
            <br>
            <br>
            <br>


            <?php
            $mysql_host = "localhost"; // Setup connection to databasae
            $mysql_user = "root";
            $mysql_password = "";
            $mysql_db = "evidence_db";

            $con = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
            ?>





            <br>
            <br>
            <br>
            <?php
            //add stores here
            ?>



    </section>
    
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
                            <div class="small text-black-50">Block 1 Temasek Polytechnic</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="#!">support@mylocalmarketplace.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">+6567882000</div>
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
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container">Copyright Group 5's Website 2020</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>