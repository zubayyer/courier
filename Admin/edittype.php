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
    $query = "select * from couriertype where id = $id";
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
                  <label class="form-label" for="form3Example1m">Add type</label>
                      <input type="text" id="form3Example1m" class="form-control" value="<?php echo $arr[1];  ?>" name="type" required/>
                  <br>
                      <label class="form-label" for="form3Example1n">Discription</label>
                      <br>

                      <input type="text" id="form3Example1n" class="form-control" value="<?php echo $arr[2];  ?>" name="discript" required/>
                      <label class="form-label" for="form3Example1n">Amount</label>
                      <br>

                      <input type="text" id="form3Example1n" class="form-control" value="<?php echo $arr[3];  ?>" name="amount" required/>
                      <br>
                      <br>
                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-primary btn-lg ms-2" name="btn">Add</button>
                </div>
                </form>
</div>    
<?php
if(isset($_POST["btn"])){
    $type = $_POST["type"];
    $discript = $_POST["discript"];
    $amount = $_POST["amount"];

    $query = "UPDATE `couriertype` SET `Type`='$type',`Discription`='$discript',`Amount`='$amount' WHERE id=$id";
    $run = mysqli_query($cnct,$query);
    if($run){
  echo " <script>
    alert('Successfully edited');
    window.location.href = 'typeshow.php';
    </script>";
 }
}

?>


<?php
    require_once("footer.php");
    ?>
</body>
</html>