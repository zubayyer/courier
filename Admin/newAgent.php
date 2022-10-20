
<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
<?php
    require_once("header.php");
    if($_SESSION["role"] != "Admin"){
        header("location:../Registeration/login.php");
    }
?>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                <form action="" method="post" enctype="multipart/form-data">
                  <label class="form-label" for="form3Example1m">Name</label>
                      <input type="text" id="form3Example1m" class="form-control "  name="name" required/>
                      <label class="form-label" for="form3Example1n">Email</label>
                      <input type="email" id="form3Example1n" class="form-control" name="email" required/>
                  <label class="form-label" for="form3Example8">Password</label>
                  <input type="password" id="form3Example8" class="form-control" name="pswd" required/>
                  <label class="form-label" for="form3Example8">Address</label>
                  <textarea name="address" class="form-control "></textarea>
                      <label class="form-label" for="form3Example1n">Phone</label>
                      <input type="text" id="form3Example1n" class="form-control" name="phone" required/>
                      <label class="form-label" for="form3Example1n">CNIC</label>
                      <input type="text" id="form3Example1n" class="form-control" name="cnic" required/>
                      <label class="form-label" for="form3Example1n">Branch</label>
                  <select name="branch" class="form-control">
                     <?php
                      $query = "select * from branch";
                      $run = mysqli_query($cnct,$query);
                      $check = mysqli_num_rows($run);
                      if($check > 0){?>
                      <option value=""></option>
                      <?php
                        while ($x = mysqli_fetch_array($run)) {?>
                        <option value="<?php echo $x[1]; ?>"><?php echo $x[1]; ?></option>
                       <?php }
                      }
                      else{?>
                        <option value="">No agents</option>
                     <?php }
                      ?>
                      </select>
                      <br>
                      <input type="file" name="image" onchange="image1.src=window.URL.createObjectURL(this.files[0])"> 
                        <img id="image1" alt="" height="150px" width="150px">
                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-primary btn-lg ms-2" name="btn">Submit form</button>
                </div>
                <br>
                <br>
                <br>
</form>
</div> 
</div> 
</div> 
</div> 
<?php
if(isset($_POST["btn"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pswd = $_POST["pswd"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $cnic = $_POST["cnic"];
    $branch = $_POST["branch"];
    $imageName = $_FILES["image"]["name"];
    $imageTmp = $_FILES["image"]["tmp_name"];
    $img_folder = "Image/". $imageName;

$query = "INSERT INTO `register`( `Name`, `Email`, `Password`, `Address`, `Phone`, `CNIC`, `Branch`, `Image`) VALUES 
        ('$name','$email','$pswd','$address','$phone','$cnic','$branch','$img_folder')";
        $run = mysqli_query($cnct , $query);
        if(move_uploaded_file($imageTmp,$img_folder)){
            echo "<script>alert('New agent registered')
            window.location.href = 'newAgent.php'
            </script>";
        }
        else{
            mysqli_errno($cnct);
        }
    }

    require_once("footer.php");
?>
</body>
</html>
