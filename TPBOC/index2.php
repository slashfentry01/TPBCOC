<!DOCTYPE html>
<html lang="en">
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
<head>
<?php
if(isset($_POST['refresh'])){
/////////////////////////////////////
$hostname3="127.0.0.1";
$username3="root";
$password3="";
$db3 = "evidence_db";
$dbh = new PDO("mysql:host=$hostname3;dbname=$db3", $username3, $password3);
foreach($dbh->query('SELECT category,COUNT(*) FROM products GROUP BY category ') as $row) {
 echo "<tr>";
echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "</tr>";
 

$category=$row['category'];
$count=$row['COUNT(*)'];

/* $Insertquery= $connn->prepare("INSERT INTO action_count VALUES (?,?)"); //prepared statement
$Insertquery->bind_param("si", $action,$count); //bind the parameters
$query->execute(); */




$host = '127.0.0.1';  //the name of the mysql service inside the docker file.
$user = 'root';
$password = '';
$db2 = 'audit_trail';
$connn = new mysqli($host,$user,$password,$db2);


if($connn->connect_error){
  echo 'connection failed'. $connn->connect_error;
}



/* $Insertquery = "insert into action_count(action, occurences) values('$action',$count)";
mysqli_query($connn,$Insertquery); */

$queryUpdate = "UPDATE category_count SET count=$count WHERE category='$category'";
if (mysqli_query($connn, $queryUpdate)) {
    // echo "Record updated successfully";
}else {
     echo "Error updating record:  PS EPIC FAIL" . mysqli_error($connn);
}


}


}

?>
    <?php
    include 'init.php';
    include 'init2.php';

    $query = "SELECT * FROM data";

    $result = mysqli_query($connn, $query);


    if ($result->num_rows > 0) {

        // output data of each row

        while ($row = $result->fetch_assoc()) {

            $product_id = $row["product_id"];

            $action = $row["action"];

            $case_id = $row["case_id"];

            $type = $row["type"];

            $username = $row["username"];

            $timestamp = $row["timestamp"];
        }
    } else {

        echo "Nothing has been fetched!";
    }

    ?>
    <?php
$query = "SELECT * FROM category_count WHERE category='others'";

$result = mysqli_query($connn, $query);


if ($result->num_rows > 0) {

    // output data of each row

    while ($row = $result->fetch_assoc()) {

        $countOthers = $row["count"];
    
    }
} else {

    echo "Nothing has been fetched!";
}
    ?>
     <?php
$query = "SELECT * FROM category_count WHERE category='vehicle'";

$result = mysqli_query($connn, $query);


if ($result->num_rows > 0) {

    // output data of each row

    while ($row = $result->fetch_assoc()) {

        $countVehicle = $row["count"];
    
    }
} else {

    echo "Nothing has been fetched!";
}
    ?>
        <?php
$query = "SELECT * FROM category_count WHERE category='narcotic'";

$result = mysqli_query($connn, $query);


if ($result->num_rows > 0) {

    // output data of each row

    while ($row = $result->fetch_assoc()) {

        $countNarcotic = $row["count"];
    
    }
} else {

    echo "Nothing has been fetched!";
}
    ?>
          <?php
$query = "SELECT * FROM category_count WHERE category='document'";

$result = mysqli_query($connn, $query);


if ($result->num_rows > 0) {

    // output data of each row

    while ($row = $result->fetch_assoc()) {

        $countDocument = $row["count"];
    
    }
} else {

    echo "Nothing has been fetched!";
}
    ?>
             <?php
$query = "SELECT * FROM category_count WHERE category='hardware'";

$result = mysqli_query($connn, $query);


if ($result->num_rows > 0) {

    // output data of each row

    while ($row = $result->fetch_assoc()) {

        $countHardware= $row["count"];
    
    }
} else {

    echo "Nothing has been fetched!";
}
    ?>
            <?php
$query = "SELECT * FROM category_count WHERE category='weapon'";

$result = mysqli_query($connn, $query);


if ($result->num_rows > 0) {

    // output data of each row

    while ($row = $result->fetch_assoc()) {

        $countWeapon= $row["count"];
    
    }
} else {

    echo "Nothing has been fetched!";
}
    
    ?>
                <?php
$query = "SELECT COUNT(*) FROM products";

$result = mysqli_query($conn, $query);


if ($result->num_rows > 0) {

    // output data of each row

    while ($row = $result->fetch_assoc()) {

        $total= $row["COUNT(*)"];
        
    
    }
} else {

    echo "Nothing has been fetched!";
}
    
    ?>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blockchain Chain of Custody</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">



                <!-- Fullscreen & Dark Mode Option -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-slide="true" href="logout.php" role="button"><span class="text">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png"  class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">B-COC</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src='<?php print_r("upload/" . $imagesrc)?>' class='img-circle elevation-2' alt='User Image'>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $usernameSesh; ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form (Optional)-->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <!-- <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> -->
                            <!-- <ul class="nav nav-treeview"> -->
                        <li class="nav-item">
                            <a href="./index2.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Audit Trail</p>
                            </a>
                        </li>
                       
                            <!--  <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a> -->
                            <!-- <ul class="nav nav-treeview"> -->

                            <!-- EVIDENCE BLOCK CHAIN DISPLAY -->
                    <!--     <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Tables</p>
                            </a>
                        </li> -->
                        <!-- CSV STUFF @ pages/tables/data.html -->

                        <!--  <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li> -->
                        <!-- </ul> -->
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Audit Trail</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Audit Trail</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Inventory</h5>

                                    <!-- <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div> -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                        <p class="text-center">
                                                <strong>Type</strong>
                                            </p>

                                            <div class="progress-group">
                                                Weapons
                                                <span class="float-right"><?php echo $countWeapon . "/" . $total ?></span>
                                                <div class="progress progress-sm">
                                                <?php  $calc1=$countWeapon/$total*100;?>
                                                    <div class="progress-bar bg-primary" style="width: <?php echo $calc1;?>%"></div>
                                                </div>
                                            </div>
                                            <!-- /.progress-group -->

                                            <div class="progress-group">
                                                Narcotics
                                                <span class="float-right"><?php echo $countNarcotic . "/" . $total ?></span>
                                                <div class="progress progress-sm">
                                                <?php $calc2=$countNarcotic/$total*100;?>
                                                    <div class="progress-bar bg-danger" style="width: <?php echo $calc2;?>%"></div>
                                                </div>
                                            </div>

                                            <!-- /.progress-group -->
                                            <div class="progress-group">
                                                <span class="progress-text">Hardware</span>
                                                <span class="float-right"><?php echo $countHardware . "/" . $total ?></span>
                                                <div class="progress progress-sm">
                                                <?php $calc3=$countNarcotic/$total*100;?>
                                                    <div class="progress-bar bg-success" style="width: <?php echo $calc3;?>%"></div>
                                                </div>
                                            </div>

                                            <!-- /.progress-group -->
                                            <div class="progress-group">
                                                Documents
                                                <span class="float-right"><?php echo $countDocument . "/" . $total ?></span>
                                                <div class="progress progress-sm">
                                                <?php $calc4=$countDocument/$total*100;?>
                                                    <div class="progress-bar bg-warning" style="width: <?php echo $calc4;?>%"></div>
                                                </div>
                                            </div>

                                            <div class="progress-group">
                                                Others
                                                <span class="float-right"><?php echo $countOthers . "/" . $total ?></span>
                                                <div class="progress progress-sm">
                                                <?php $calc5=$countOthers/$total*100;?>
                                                    <div class="progress-bar bg-warning" style="width: <?php echo $calc5;?>%"></div>
                                                </div>
                                            </div>
                                            <!-- /.progress-group -->

                                            <!-- <div class="chart"> -->
                                                <!-- Sales Chart Canvas -->
                                                <!-- <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                            </div> -->
                                            <!-- /.chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-4">
                                        <form action="" method="POST" enctype='multipart/form-data'>
                                            <button class="btn btn-primary " name='refresh' type="submit">Refresh Stats!</button>
                                        </form>
                                            <!-- <p class="text-center">
                                                <strong>Type</strong>
                                            </p> -->

                                            <!-- <div class="progress-group">
                                                Weapons
                                                <span class="float-right"><b>160</b>/200</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                </div>
                                            </div> -->
                                            <!-- /.progress-group -->

                                            
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./card-body -->
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <!-- <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                                                <h5 class="description-header">$35,210.43</h5> -->
                                                <span class="description-text">CHECKED IN</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <!-- <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                                                <h5 class="description-header">$10,390.90</h5> -->
                                                <span class="description-text">CHECKED OUT</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <!-- <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                                                <h5 class="description-header">$24,813.53</h5> -->
                                                <span class="description-text">ARCHIVE IN</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block">
                                                <!-- <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                                                <h5 class="description-header">1200</h5> -->
                                                <span class="description-text">ARCHIVE OUT</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->



                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Inventory</h3>

                            <!-- <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div> -->
                        </div>

                        <?php
                        $query = "SELECT * FROM data";
                        $result = mysqli_query($connn, $query);

                        echo '<div class="card-body p-0">';
                        echo '<div class="table-responsive">';
                        echo '<table id="example1" class="table m-0">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>productID</th>';
                        echo '<th>action</th>';
                        echo '<th>case_id</th>';
                        // echo'<th>custody</th>';
                        echo '<th>username </th>';
                        echo '<th>timestamp</th>';
                        //echo'<th>type</th>';

                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $product_id1 = $row["product_id"];
                                $action1 = $row["action"];
                                $case_id1 = $row["case_id"];
                                $username1 = $row["username"];
                                $timestamp1 = $row["timestamp"];
                                echo '<tr>';
                                echo '<td>';
                                echo $product_id1;
                                echo '</td>';
                                echo '<td>';
                                echo $action1;
                                echo '</td>';
                                echo '<td>';
                                echo $case_id1;
                                echo '</td>';
                                echo '<td>';
                                echo $username1;
                                echo '</td>';
                                echo '<td>';
                                echo $timestamp1;
                                echo '</td>';
                            

                                echo '</tr>';
                            }
                        } else {
                            echo "Nothing Has Been Checked out!";
                        }
                        echo '</tr>';
                        echo '</tbody>';
                        echo '</table>';
                        echo '</div>';
                        //<!-- /.table-responsive -->
                        echo '</div>';

                        ?>




                    </div>
                    <!-- /.content-wrapper -->

                    <!-- Control Sidebar -->
                    <aside class="control-sidebar control-sidebar-dark">
                        <!-- Control sidebar content goes here -->
                    </aside>
                    <!-- /.control-sidebar -->

                    <!-- Main Footer -->
                    <footer class="main-footer">
                        <strong>Copyright &copy; 2021 <a href="https://tpboc.xyz">TPBOC</a>.</strong>
                        Property of Yusuf & Nigel Corp
                        <div class="float-right d-none d-sm-inline-block">
                            <b>Version</b> MP
                        </div>
                    </footer>
                </div>
                <!-- ./wrapper -->

                <!-- REQUIRED SCRIPTS -->
                <!-- jQuery -->
                <script src="plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap -->
                <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- overlayScrollbars -->
                <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                <!-- AdminLTE App -->
                <script src="dist/js/adminlte.js"></script>

                <!-- PAGE PLUGINS -->
                <!-- jQuery Mapael -->
                <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
                <script src="plugins/raphael/raphael.min.js"></script>
                <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
                <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
                <!-- ChartJS -->
                <script src="plugins/chart.js/Chart.min.js"></script>

                <!-- AdminLTE for demo purposes -->
                <script src="dist/js/demo.js"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="dist/js/pages/dashboard2.js"></script>

                <!-- REQUIRED SCRIPTS -->
                <!-- jQuery -->
                <script src="plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap -->
                <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- overlayScrollbars -->
                <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                <!-- AdminLTE App -->
                <script src="dist/js/adminlte.js"></script>

                <!-- PAGE PLUGINS -->
                <!-- jQuery Mapael -->
                <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
                <script src="plugins/raphael/raphael.min.js"></script>
                <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
                <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
                <!-- ChartJS -->
                <script src="plugins/chart.js/Chart.min.js"></script>

                <!-- AdminLTE for demo purposes -->
                <script src="dist/js/demo.js"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="dist/js/pages/dashboard2.js"></script>
                <!-- jQuery -->
                <script src="plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap 4 -->
                <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- DataTables  & Plugins -->
                <script src="plugins/datatables/jquery.dataTables.min.js"></script> <!-- All -->
                <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> <!-- Buttons -->
                <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> <!-- Leave it be -->
                <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> <!-- Leave it be -->
                <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script> <!-- Buttons -->
                <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script> <!-- Bootstrap -->
                <script src="plugins/jszip/jszip.min.js"></script> <!-- Leave it be -->
                <script src="plugins/pdfmake/pdfmake.min.js"></script> <!-- PDF -->
                <script src="plugins/pdfmake/vfs_fonts.js"></script> <!-- Leave it be -->
                <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script> <!-- Buttons -->
                <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
                <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
                <!-- AdminLTE App -->
                <script src="dist/js/adminlte.min.js"></script> <!-- Leave it be -->
                <!-- AdminLTE for demo purposes -->
                <script src="dist/js/demo.js"></script> <!-- Leave it be -->
                <!-- Page specific script -->
                <script>
                    $(function() {
                        $("#example1").DataTable({
                            "responsive": true,
                            "lengthChange": false,
                            "autoWidth": false,
                            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        $('#example2').DataTable({
                            "paging": true,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": true,
                            "autoWidth": false,
                            "responsive": true,
                        });
                    });
                </script>


</body>

</html>