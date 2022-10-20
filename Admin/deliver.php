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
        $track = $arr[1];
        $status = "Delivered";
        $date = $arr[3];
    
        $query = "UPDATE `orderstatus` SET `Courier_Id`='$track',`Status`='$status',`Date`='$date' WHERE Id = $id";
        $run = mysqli_query($cnct,$query);
          if($run){?>
<script>
            window.location.href = "orders.php"
            </script>
         <?php }
      }
    ?>

<?php
    require_once("../admin/footer.php");
    ?>
</body>
</html>