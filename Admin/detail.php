<?php
require_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body class="g-sidenav-show  bg-gray-200">
 <!-- ======= Header ======= -->
 <!-- <header id="header" class="header fixed-top d-flex align-items-center"> -->



<?php

    $fetch = "select * from courier";
    $execute = mysqli_query($cnct, $fetch);
    $row_num = mysqli_num_rows($execute);
    if ($row_num > 0) {?>
      <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    </div>
      <div class="table-responsive">
      <table class="table text-start align-middle table-bordered table-hover mb-0" id="myTable">
           <thead>
           <tr class="text-white">
           <th scope="col"><h3>Item</h3></th>
           <th scope="col"><h3>Type</h3></th>
           <th scope="col"><h3>Sender</h3></th>
           <th scope="col"><h3>Address</h3></th>
           <th scope="col"><h3>Phone</h3></th>
           <th scope="col"><h3>Reciever</h3></th>
           <th scope="col"><h3>Reciever email</h3></th>
           <th scope="col"><h3>Address</h3></th>
           <th scope="col"><h3>Phone</h3></th>
           <th scope="col"><h3>Sending date</h3></th>
           <th scope="col"><h3>Delivery date</h3></th>
           <th scope="col"><h3>Amount</h3></th>
           <th scope="col"><h3>Desired date</h3></th>
           <th scope="col"><h3>Track Id</h3></th>
           <th scope="col"><h3></h3></th>
           <th scope="col"><h3></h3></th>
           </tr>
           </thead>
           <tbody>
             <?php
             while($x = mysqli_fetch_array($execute)){?>
                 <tr>
                 <td ><?php echo $x[1]; ?></td>
                 <td ><?php echo $x[2]; ?></td>
                 <td ><?php echo $x[3]; ?></td>
                 <td ><?php echo $x[4]; ?></td>
                 <td ><?php echo $x[5]; ?></td>
                 <td ><?php echo $x[6]; ?></td>
                 <td ><?php echo $x[7]; ?></td>
                 <td ><?php echo $x[8]; ?></td>
                 <td ><?php echo $x[9]; ?></td>
                 <td ><?php echo $x[10]; ?></td>
                 <td ><?php echo $x[11]; ?></td>
                 <td ><?php echo $x[12]; ?></td>
                 <td ><?php echo $x[13]; ?></td>
                 <td ><?php echo $x[0]; ?></td>
                 <td ><a href="deletedetail.php?id=<?php echo $x[0]; ?>" >Delete</td>
                 <td ><a href="editcourier.php?id=<?php echo $x[0]; ?>" >Edit</td>
                 </tr>
               
             <?php
             }
             echo'</tbody></table></div></div></div>';
             }
    
require_once("footer.php");
?>
</body>
</html>