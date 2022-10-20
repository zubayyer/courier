<?php
    require_once("../../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<!------ Include the above in your HEAD tag ---------->

<div class="col-md-4 col-md-offset-4" id="login">
						<section id="inner-wrapper" class="login">
							<article>
								<form method="post">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"> </i></span>
											<input type="text" class="form-control" name="name" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
											<input type="email" class="form-control" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="password" class="form-control" name="pswd" placeholder="Password">
										</div>
									</div>
									  <button type="submit" name="btn" class="btn btn-danger btn-block">Sign Up</button>
                        <p class="text-center mb-0">Already have an Account? <a href="login.php">Sign In</a></p>
								</form>
							</article>
						</section></div>

                        <?php
if(isset($_POST["btn"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pswd"];
        $query = "INSERT INTO `User`( `Name`, `Email`, `Password`) VALUES
        ('$name','$email','$password')";
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


<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="../../validation/dist/jquery.validate.js"></script>
<script src="../../validation/dist/additional-methods.js"></script>



</body>
</html>