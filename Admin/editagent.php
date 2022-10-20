<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("header.php");
    $id = $_GET["id"];
    $query = "select * from Register where id = $id";
      $run = mysqli_query($cnct,$query);
      $check = mysqli_num_rows($run);
      if($check > 0){
        $arr = mysqli_fetch_array($run);
      }
    ?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="bg-secondary rounded h-100 p-4">
                <form action="" method="post" enctype="multipart/form-data">
                  <label class="form-label" for="form3Example1m">Name</label>
                      <input type="text" id="form3Example1m" class="form-control " value="<?php echo $arr[1];  ?>" name="name" required/>
                  <br>
                      <label class="form-label" for="form3Example1n">Email</label>
                      <br>
                      <input type="email" id="form3Example1n" class="form-control" value="<?php echo $arr[2];  ?>" name="email" required/>
                      <label class="form-label" for="form3Example1n">Password</label>
                      <br>
                      <input type="text" id="form3Example1n" class="form-control" value="<?php echo $arr[3];  ?>" name="pswd" required/>
                  <label class="form-label" for="form3Example8">Address</label>
                  <textarea name="address" class="form-control">
                  <?php echo $arr[4];  ?>
                  </textarea>
                      <label class="form-label" for="form3Example1n">Phone</label>
                      <input type="text" id="form3Example1n" class="form-control" name="phone"  value="<?php echo $arr[5];  ?>" required/>
                      <label class="form-label" for="form3Example1n">CNIC</label>
                      <input type="text" id="form3Example1n" class="form-control" name="cnic"  value="<?php echo $arr[6];  ?>" required/>
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
                        <option value="<?php echo $x[1]; ?>"><?php echo  $x[1]; ?></option>
                       <?php }
                      }
                      else{?>
                        <option value="">No agents</option>
                     <?php }
                      ?>
                      </select>
                      <br>
                      <input type="file" name="image" onchange="image1.src=window.URL.createObjectURL(this.files[0])"> 
                        <img src=" <?php $x[9] ?>" id="image1" alt="" height="150px" width="150px" />
                      <br>
                  
                      <br>
                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-primary btn-lg ms-2" name="btn">Add</button>
                </div>
                </form>
</div>    
<?php
    require_once("footer.php");
    ?>
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

    $query = "UPDATE `register` SET `Name`='$name',`Email`='$email',`Password`='$pswd',`Address`='$address',`Phone`='$phone',`CNIC`='$cnic',`Branch`='$branch',`Image`='$img_folder' WHERE id=$id";
    $run = mysqli_query($cnct,$query);
    if(move_uploaded_file($imageTmp,$img_folder)){
  echo " <script>
    alert('Successfully edited');
    window.location.href = 'agent.php';
    </script>";
 }
 else{
  echo mysqli_error($cnct);
}
}

?>



</body>
</html>