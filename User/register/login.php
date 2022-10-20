<?php
require_once("../../connection.php");
session_start();
unset($_SESSION["user"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
											<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
											<input type="email" name="email" class="form-control" placeholder="Email Address">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="password" name="pswd" class="form-control" placeholder="Password">
										</div>
									</div>
									  <button type="submit" name="btn" class="btn btn-danger btn-block">Login</button>
                        <p class="text-center mb-0">Don't have an account <a href="signup.php">Sign Up</a></p>
								</form>
							</article>
						</section></div>
                        <?php
if(isset($_POST["btn"])){
    $email = $_POST["email"];
    $pswd = $_POST["pswd"];
    $login = "select * from User where Email = '$email' and Password = '$pswd'";
    $execute = mysqli_query($cnct,$login);
    $check = mysqli_num_rows($execute);
    if ($check > 0) {
        $fetch = mysqli_fetch_array($execute);
          $_SESSION["user"] = $fetch[1];
          $_SESSION["email"] = $fetch[2];
                echo "<script>
                     window.location.href = '../indexx.php'
                    </script>";
          } 
            else{
                echo "<script>alert('account not available')
                    window.location.href = 'login.php'
                    </script>";
            }
    }
  
?>
</body>
</html>