<?php
session_start();
require_once("../connection.php");
if(!isset($_SESSION["Name"])){
    header("location:../Registeration/login.php");

}
    
    
// else{
//     header("location:../registeration/login.php");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Courier Management Service</title>
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicon -->
    <link href="../assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    <link href="../Assets/vendor/simple-datatables/style.css" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Courier MS</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION["Name"]; ?></h6>
                        <span><?php echo $_SESSION["role"]; ?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="branchRecord.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Branches</a>
                <a href="typeshow.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Types</a>
                    <a href="agent.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Agents</a>
                    <a href="addcourier.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>New Courier</a>
                    <a href="type.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Add type</a>
                    <a href="profile.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="courierDetail.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Couriers detail</a>
                    <a href="orders.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Orders status</a>
                    <a href="detail.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>All data</a>

                <?php

                if($_SESSION["role"] == "Agent"){ ?>

                    <a href="agents.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Profile</a>
        <?php }
            else{ ?>
                    <a href="aboutUs.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>About Us</a>
                    <a href="courierstatus.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Courier Status</a>
                    <a href="branch.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>New Branch</a>
                    <a href="newAgent.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>New Agent</a>
                    <a href="question.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Frequently asked</a>

          <?php }
        ?>
        </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                  
                    <div class="nav-item dropdown">
                        <a href="contacts.php">
                            <span class="d-none d-lg-inline-flex">Messages</span>
                        </a>
                    </div>
                </div>
                
                <div class="navbar-nav align-items-center ms-auto">
                  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["Name"] ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="../Registeration/login.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            
</body>
</html>