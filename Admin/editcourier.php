
<body>
<?php
    require_once("header.php");
    unset($_SESSION["Track"]);
    $id = $_GET["id"];
    $query = "select * from courier where id = '$id'";
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
                <label class="form-label" for="form3Example1m">Item</label>
                      <input type="text" id="form3Example1m" class="form-control " value="<?php echo $arr[1];  ?>" name="item" required/>
                      <label class="form-label" for="form3Example1m">Type</label>
                     
                      <?php
                      $query = "select * from couriertype where Id = $arr[2]";
                      $run = mysqli_query($cnct,$query);
                      $check = mysqli_num_rows($run);
                      if($check > 0){
                        $x = mysqli_fetch_array($run)?>
                       <input type="text" value="<?php echo $x[1]; ?>" class="form-control " name="type">
                       <?php } 
                      ?>
                     
                  <label class="form-label" for="form3Example8">sender</label>
                  <input type="text" id="form3Example8" class="form-control" value="<?php echo $arr[3];  ?>" name="sender" required/>
                  <label class="form-label" for="form3Example8">Sender address</label>
                  <input type="text" id="form3Example8" class="form-control" value="<?php echo $arr[4];  ?>" name="Saddress" required/>
                      <label class="form-label" for="form3Example1n">Sender phone</label>
                      <input type="text" id="form3Example1n" class="form-control" value="<?php echo $arr[5];  ?>" name="Sphone" required/>
                      <label class="form-label" for="form3Example1n">Reciever</label>
                      <input type="text" id="form3Example1n" class="form-control" value="<?php echo $arr[6];  ?>" name="reciever" required/>
                      <label class="form-label" for="form3Example1n">Reciever email</label>
                      <input type="email" id="form3Example1n" class="form-control" value="<?php echo $arr[7];  ?>" name="email" required/>
                  <label class="form-label" for="form3Example8">Reciever address</label>
                  <input type="text" id="form3Example8" class="form-control" value="<?php echo $arr[8];  ?>" name="address" required/>
                      <label class="form-label" for="form3Example1n">Reciever phone</label>
                      <input type="text" id="form3Example1n" class="form-control" value="<?php echo $arr[9];  ?>" name="phone" required/>
                  <label class="form-label" for="form3Example1m">Send date</label>
                      <input type="text" id="form3Example1n" class="form-control" value="<?php echo $arr[10];  ?>" name="send" required/>
                  <label class="form-label" for="form3Example1m">Delivery date</label>
                      <input type="date" id="form3Example1m" class="form-control " value="<?php echo $arr[11];  ?>"  name="delivery" required/>
                  <label class="form-label" for="form3Example1m">Weight</label>
                      <input type="text" id="form3Example1m" class="form-control " value="<?php echo $arr[12];  ?>" name="weight" required/>
                  <label class="form-label" for="form3Example8">Desired date</label>
                  <input type="date" id="form3Example8" class="form-control" value="<?php echo $arr[13];  ?>" name="desired" required/>
                  <br>
                <label class="form-label" for="form3Example8">Track Id</label>
                  <input type="text" id="form3Example8" class="form-control" value="<?php echo $arr[0];  ?>" readonly/>
                  <br>
                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-warning btn-lg ms-2" name="btn">Submit form</button>
                </div>
                <br>
               
                <br>
               
                <br>
</form>
                </div> 
                <?php
                    require_once("footer.php");
                ?>
<?php
if(isset($_POST["btn"])){
  $item = $_POST["item"];
  $type = $_POST["type"];
  $sender = $_POST["sender"];
  $Sphone = $_POST["Sphone"];
  $Saddress = $_POST["Saddress"];
  $reciever = $_POST["reciever"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $phone = $_POST["phone"];
  $send = $_POST["send"];
  $delivery = $_POST["delivery"];
  $weight = $_POST["weight"];
//   $TrackId = "ord:" . random_int(1000,99999). "xx";
//   $_SESSION["Track"] = $TrackId;
      $query = "select * from couriertype where Id = $type";
      $run = mysqli_query($cnct,$query);
      $check = mysqli_num_rows($run);
      if($check > 0){
        $arr = mysqli_fetch_array($run);
        $amount = $arr[3] * $weight;
      }
    $desired = $_POST["desired"];
        $query1 = "UPDATE `courier` SET `Item`='$item',`Type`='$type',`Sender`='$sender',`SenderAddress`='$Saddress',`SenderPhone`='$Sphone',
        `Reciever`='$reciever',`RecieverEmail`='$email',`RecieverAddress`='$address',`RecieverPhone`='$phonepho',
        `SendDate`='$send',`DeliveryDate`='$delivery',`Amount`='$amount',`desiredDate`='$desired' WHERE Id = $id";
        $run1 = mysqli_query($cnct , $query1);
        if($run1==true){
            echo " <script>
            alert('Successfully edited');
            window.location.href = 'detail.php';
            </script>";
            }
        else{
            echo mysqli_errno($cnct);
        }
    }


?>
</body>
</html>
