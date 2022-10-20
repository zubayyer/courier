
<body>
<?php

    require_once("header.php");
    // unset($_SESSION["Track"]);
    
?>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="bg-secondary rounded h-100 p-4">
                <form action=""  method="post">
                <label class="form-label" for="form3Example1m">Item</label>
                      <input type="text" id="form3Example1m" class="form-control text-white"  name="item" required/>
                      <label class="form-label" for="form3Example1m">Type</label>
                      <select name="type" class="form-control " >
                      <?php
                      $query = "select * from couriertype";
                      $run = mysqli_query($cnct,$query);
                      $check = mysqli_num_rows($run);
                      if($check > 0){
                        while ($x = mysqli_fetch_array($run)) {?>
                        <option value="<?php echo $x[0]; ?>"><?php echo $x[1]; ?></option>
                       <?php }
                      }
                      ?>
                      </select>
                  <label class="form-label" for="form3Example8">sender</label>
                  <input type="text" id="form3Example8" class="form-control text-white" name="sender" required/>
                  <label class="form-label" for="form3Example8">Sender address</label>
                  <input type="text" id="form3Example8" class="form-control text-white" name="Saddress" required/>
                      <label class="form-label" for="form3Example1n">Sender phone</label>
                      <input type="text" id="form3Example1n" class="form-control text-white" name="Sphone" required/>
                      <label class="form-label" for="form3Example1n">Reciever</label>
                      <input type="text" id="form3Example1n" class="form-control text-white" name="reciever" required/>
                      <label class="form-label" for="form3Example1n">Reciever email</label>
                      <input type="email" id="form3Example1n" class="form-control text-white" name="email" required/>
                  <label class="form-label" for="form3Example8">Reciever address</label>
                  <input type="text" id="form3Example8" class="form-control text-white" name="address" required/>
                      <label class="form-label" for="form3Example1n">Reciever phone</label>
                      <input type="text" id="form3Example1n" class="form-control text-white" name="phone" required/>
                  <label class="form-label" for="form3Example1m">Delivery date</label>
                      <input type="date" id="form3Example1m" class="form-control bg-white"  name="delivery" required/>
                  <label class="form-label" for="form3Example1m">Weight</label>
                      <input type="number" id="form3Example1m" class="form-control text-white"  name="weight" required  min="0"/>
                  <label class="form-label" for="form3Example8">Desired date</label>
                  <input type="date" id="form3Example8" class="form-control bg-white" name="desired" required/>
                  <br>
                <label class="form-label" for="form3Example8">Track Id</label>
                  <input type="text" id="form3Example8" class="form-control" value=" <?php
                if(isset($_SESSION["Track"] )){
                  echo $_SESSION["Track"];
                }
                ?>" readonly/>
                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-primary" name="btn">Submit form</button>
                </div>
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
  $delivery = $_POST["delivery"];
  $weight = $_POST["weight"];
  $TrackId = "ord:" . random_int(1000,99999). "xx";
  $_SESSION["Track"] = $TrackId;
      $query = "select * from couriertype where Id = $type";
      $run = mysqli_query($cnct,$query);
      $check = mysqli_num_rows($run);
      if($check > 0){
        $arr = mysqli_fetch_array($run);
        $amount = $arr[3] * $weight;
      }
  $desired = $_POST["desired"];
        $query = "INSERT INTO `courier`(`Id`,`Item`, `Type`, `Sender`, `SenderAddress`, `SenderPhone`, `Reciever`,`RecieverEmail`, `RecieverAddress`, `RecieverPhone`,`DeliveryDate`, `Amount`, `desiredDate`)
         VALUES 
        ('$TrackId','$item','$type','$sender','$Saddress','$Sphone','$reciever','$email','$address','$phone','$delivery','$amount','$desired')";
        $run = mysqli_query($cnct , $query);
        if($run==true){
        $date = date("d/m/Y");
        $query1 = "INSERT INTO `orderstatus`(`Courier_Id`, `Date`) VALUES ('$TrackId','$date')";
        $run = mysqli_query($cnct , $query1);
        if($run){
          echo '<script>alert("Courier added")
          window.location.href = "addcourier.php"
          </script>';
        }
            }
        else{
            echo mysqli_errno($cnct);
        }
    }


?>
</body>
</html>
