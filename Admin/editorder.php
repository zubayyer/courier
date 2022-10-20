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
    require_once("../Admin/header.php");
    $id = $_GET["id"];
    $query = "select * from orderstatus where id = $id";
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
                <form action="" method="post">
                  <label class="form-label" for="form3Example1m">tracking Id</label>
                      <input type="text" id="form3Example1m" class="form-control" value="<?php echo $arr[1];  ?>" name="trackid" readonly/>
                  <br>
                      <select name="status" class="form-control">
                          <option value="Recieved">Recieved</option>
                          <option value="OTW">On the way</option>
                          <option value="Delivered">Delivered</option>
                      </select>
                      <label class="form-label" for="form3Example1n">Date</label>
                      <br>
                      <input type="date" id="form3Example1n" class="form-control" value="<?php echo $arr[3];  ?>" name="date" readonly/>
                      <br>
                      <br>
                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-primary btn-lg ms-2" name="btn">Add</button>
                </div>
                </form>

</div>
</div>
</div>
</div>    
<?php
if(isset($_POST["btn"])){
    $track = $_POST["trackid"];
    $status = $_POST["status"];
    $date = $_POST["date"];

    $query = "UPDATE `orderstatus` SET `Courier_Id`='$track',`Status`='$status',`Date`='$date' WHERE Id = $id";
    $run = mysqli_query($cnct,$query);
    if($run){
  echo " <script>
    alert('Successfully edited');
    window.location.href = 'orders.php';
    </script>";
 }
}

?>


<?php
    require_once("../admin/footer.php");
    ?>
</body>
</html>