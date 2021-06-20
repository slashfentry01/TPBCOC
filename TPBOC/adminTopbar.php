<?php
include 'init.php';
/////////////////////////////////////////////////


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>B-COC Portal</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">B-COC Portal</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <div class="btn-group"><button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Control
                        </button>

                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item <?php echo ($page == 'plogindexAdmintest.php') ? 'active' : ''; ?>" href="plogindexAdmintest.php">
                                <span data-feather="shopping-cart"></span>
                                Users
                            </a>
                            <a class="dropdown-item <?php echo ($page == 'announcements.php') ? 'active' : ''; ?>" href="announcements.php">
                                <span data-feather="shopping-cart"></span>
                                Announcements
                            </a>
                            <a class="dropdown-item <?php echo ($page == 'plogEvidence.php') ? 'active' : ''; ?>" href="plogEvidence.php">
                                <span data-feather="shopping-cart"></span>
                                Evidences
                            </a>
                            <a class="dropdown-item <?php echo ($page == 'blockchain-data.php') ? 'active' : ''; ?>" href="blockchain-data.php">
                                <span data-feather="shopping-cart"></span>
                                Evidences Blockchain
                            </a>
                        </div>
                    </div>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="profile.php">My Profile -- <?php echo $username ?> </a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>


</body>


</html>