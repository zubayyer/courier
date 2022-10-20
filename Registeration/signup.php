<?php
    require_once("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

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


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Courier MS</h3>
                            </a>
                        </div>
                        <form action="" method="post">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText"name="name">
                            <label for="floatingText">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" name="pswd">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="floatingPassword" name="address">
                            <label for="floatingPassword">Address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" pattern="^03[0-9+]{2} [0-9+]{7}$" title="type phoneno like '03xx xxxxxxx'" id="floatingPassword" name="phone">
                            <label for="floatingPassword">Phone</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" pattern="^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$" title="type CNIC like '12345-1234567-1'" id="floatingPassword" name="cnic">
                            <label for="floatingPassword">CNIC</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4"name="btn">Sign Up</button>
                        <p class="text-center mb-0">Already have an Account? <a href="login.php">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/chart/chart.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
    <!-- validation -->
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="../validation/dist/jquery.validate.js"></script>
<script src="../validation/dist/additional-methods.js"></script>
</body>
</html>
<?php
if(isset($_POST["btn"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pswd"];
    $Phone = $_POST["phone"];
    $address = $_POST["address"];
    $cnic = $_POST["cnic"];
        $query = "INSERT INTO `register`( `Name`, `Email`, `Password`,`Address`,`Phone`,`CNIC`) VALUES
        ('$name','$email','$password','$address','$phone','$cnic')";
        $run = mysqli_query($cnct , $query);
        if($run==true){
            echo "<script>alert('Account created successfully')</script>";
            header("location:login.php");
        }
        else{
            mysqli_errno($cnct);
        }
    }
?>

<script>
$(document).ready(function(){
    $("form").validate({
        rules:{
            "name":{
                required:true,
                minlenght:3,
                maxlenght:30,
                lettersonly:true
            },
            "email":{
                required:true,
                email:true
            },
            "pswd":{
                required:true,
                password:true   
            },
            "phone":{
                required:true,
                },
            "address":{
                required:true,
                minlenght:3,
            },
            "cnic":{
                required:true,
            },
        },
        messages: { 
                "name":{
                required:"Please enter a valid First Name.",
                minlenght:"Please enter atleast 3 letters.",
                maxlenght:"maximum 30 characters allowed",
                lettersonly:"numbers are not allowed"
            },

            "email":{
                required:"Please enter a valid First Name.",
                email:"true"
            },
            "pswd":{
                required:"Please enter a valid First Name.",
                password:"true"   
            },
            "phone":{
                required:"Please enter a valid First Name.",
                },
            "address":{
                required:"Please enter a valid First Name.",
                minlenght:"Please enter atleast 3 letters.",
            },
            "cnic":{
                required:"Please enter a valid First Name.",
            },
}
} ,
           
    })
})
</script>
