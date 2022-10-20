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
    ?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                <form action="" method="post">
                  <label class="form-label" for="form3Example1m">Send_to</label>
                      <input type="text" id="form3Example1m" class="form-control "  name="sent" required/>
                  <br>
                      <label class="form-label" for="form3Example1n">Message</label>
                      <br>
                      <input type="text" id="form3Example1n" class="form-control" name="msg" required/>
                      <br>
                      <br>
                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-warning btn-lg ms-2" name="btn">Add</button>
                </div>
                </form>
                </div>
                </div>
                </div>
                </div>
    
<?php
if(isset($_POST["btn"])){
    $sent = $_POST["sent"];
    $msg = $_POST["msg"];
}

?>


<?php
    require_once("../admin/footer.php");
    ?>
</body>
</html>