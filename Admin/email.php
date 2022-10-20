
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
<body>
<?php
    require_once("header.php");
    $trackId = $_SESSION["Track"];
    $query = "select * from courier where Id = '$trackId'";
    $run = mysqli_query($cnct,$query);
    $x = mysqli_fetch_array($run);
?>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                <form action="" method="post">
                  <label class="form-label" for="form3Example1m">from</label>
                      <input type="email" id="form3Example1m" class="form-control "  name="from" required/>
                      <label class="form-label" for="form3Example1n">To</label>
                      <input type="email" id="form3Example1n" class="form-control" value="<?php echo $x[7] ?>" name="to" required/>
                  <label class="form-label" for="form3Example8">Subject</label>
                  <input type="text" id="form3Example8" class="form-control" name="subject" required/>
                  <label class="form-label" for="form3Example8">Message</label>
                  <textarea name="msg" cols="30" rows="10">Message</textarea>
                  <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-warning btn-lg ms-2" name="btn">Submit form</button>
                  <?php echo $error ?>
                </div>
                <br>
                <br>
                <br>
</form>
                </div> 
<?php
if(isset($_POST["btn"])){
    $from = $_POST["from"];
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $msg = $_POST["msg"];
        $send = mail($from,$to,$subject,$msg);
        if($send==true){
            
        }
        else{
            $error = "message not sent";
        }
    }

    require_once("footer.php");
?>
</body>
</html>
