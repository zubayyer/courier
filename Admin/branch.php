
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Here</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="/style.css">
</head>
<style>


</style>
<body>
<?php
    require_once("header.php");
  //   if($_SESSION["role"] != "Admin"){
  //     header("location:../Registeration/login.php");
  // }
  echo '<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-md-12">
          <div class="bg-secondary rounded h-100 p-4">
  <form method="post" action="branchExport.php" align="right">  
  <input type="submit" name="export" value="CSV Export" class="btn btn-primary" />  
  </form> 
  </div>
  </div>
  </div>
  </div>'
  ;

?>
<!-- <div class="container" style="margin-top:70px;"> -->
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="bg-secondary rounded h-100 p-4">
                <form action="" method="post">
                  <label class="form-label text-white" for="form3Example1m">Name</label>
                      <input type="text" id="form3Example1m" class="form-control text-white"  name="name" required/>
                      <label class="form-label text-white" for="form3Example1n">Area</label>
                      <!-- <textarea name="area" class="form-control" ></textarea> -->
                      <input type="text" id="form3Example1m" class="form-control text-white"  name="area" required/>
                 
                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-danger btn-lg ms-2" name="btn">Submit form</button>
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
    $area = $_POST["area"];
        $query = "INSERT INTO `branch`( `Name`, `Area`) VALUES
        ('$name','$area')";
        $run = mysqli_query($cnct , $query);
        if($run==true){
            echo "<script>alert('Branch Added')</script>";
            header("location:branch.php");
        }
        else{
            echo mysqli_error($cnct);
        }
    }
    else{
        echo mysqli_error($cnct);
    }

    require_once("footer.php");
?>
</body>
</html>
