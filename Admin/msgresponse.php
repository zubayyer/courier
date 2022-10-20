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
    $query = "select * from contact where id = $id";
      $run = mysqli_query($cnct,$query);
      $check = mysqli_num_rows($run);
      if($check > 0){?>

        <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-md-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Basic Form</h6>
        <form action="" method="post">
          
              <label class="form-label" for="form3Example1n">Message</label>
              <textarea name="area" class="form-control">
              </textarea>

        <div class="d-flex justify-content-end pt-3">
          <button type="submit" class="btn btn-primary btn-lg ms-2" name="btn">Add</button>
        </div>
        </form>
</div>   



<?php
        $arr = mysqli_fetch_array($run);
        $track = $arr[1];
        $status = "OTW";
        $date = $arr[3];
        $query = "UPDATE `orderstatus` SET `Courier_Id`='$track',`Status`='$status',`Date`='$date' WHERE Id = $id";
        $run = mysqli_query($cnct,$query);
          if($run){?>
<script>
            window.location.href = "contacts.php"
            </script>
         <?php }
      }
    ?>

<?php
    require_once("../admin/footer.php");
    ?>
</body>
</html>