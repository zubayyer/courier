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
    $query = "select * from branch where id = $id";
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
                            <h6 class="mb-4">Basic Form</h6>
                <form action="" method="post">
                  <label class="form-label" for="form3Example1m">Name</label>
                      <input type="text" id="form3Example1m" class="form-control" value="<?php echo $arr[1];  ?>" name="name" required/>
                  <br>
                      <label class="form-label" for="form3Example1n">Area</label>
                      <br>
                      <textarea name="area" class="form-control">
                      <?php echo $arr[2];  ?>
                      </textarea>

                      <label class="form-label" for="form3Example1n">Status</label>
                      <br>
                      <select name="status" class="form-control">
                        <option value="Close">Close</option>
                        <option value="Open">Open</option>
                      </select>

                      <br>
                      <br>


                        <!-- <select name="agent" class="form-control">  -->
                    <?php
                    //   $query = "select * from agentdata";
                    //   $run = mysqli_query($cnct,$query);
                    //   $check = mysqli_num_rows($run);
                    //   if($check > 0){?>
                      <!-- <option value=""></option> -->
                      <?php
                        // while ($x = mysqli_fetch_array($run)) {?>
                        <!-- <option value="<?php echo $arr[3]; ?>"><?php echo $arr[3]; ?></option> -->
                       <?php
                        // }
                    //   } 
                      ?>
                      <!-- </select> -->

                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-primary btn-lg ms-2" name="btn">Add</button>
                </div>
                </form>
</div>    
<?php
if(isset($_POST["btn"])){
    $name = $_POST["name"];
    $area = $_POST["area"];
    $status = $_POST["status"];

    $query = "UPDATE `branch` SET `Name`='$name',`Area`='$area',`Status`='$status' WHERE id=$id";
    $run = mysqli_query($cnct,$query);
    if($run){
  echo " <script>
    alert('Successfully edited');
    window.location.href = 'branchRecord.php';
    </script>";
 }
 else{
    echo mysqli_error($cnct);

 }
}

?>


<?php
    require_once("footer.php");
    ?>
</body>


</html>