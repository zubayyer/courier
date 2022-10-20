<!DOCTYPE html>
<html lang="en">
<body class="g-sidenav-show  bg-gray-200">
 <!-- ======= Header ======= -->
 <!-- <header id="header" class="header fixed-top d-flex align-items-center"> -->


<?php
require_once("header.php");

 echo '<div class="container-fluid pt-4 px-4">
<div class="row g-4">
    <div class="col-md-12">
        <div class="bg-secondary rounded h-100 p-4">
<form method="post" action="statusExport.php" align="right">  
<input type="submit" name="export" value="CSV Export" class="btn btn-primary" />  
</form> 
</div>
</div>
</div>
</div>'
;
if($_SESSION["role"] != "Admin"){
    header("location:../Registeration/login.php");
}
$fetch1 = "select * from orderstatus where Status = 'Recieved'";
$execute1 = mysqli_query($cnct, $fetch1);
$receive = mysqli_num_rows($execute1);
$arr1 = mysqli_fetch_array($execute1);

$fetch2 = "select * from orderstatus where Status = 'Delivered'";
$execute2 = mysqli_query($cnct, $fetch2);
$deliver = mysqli_num_rows($execute2);
if($deliver > 0){
    $arr2 = mysqli_fetch_array($execute2);
}else{
    $del = "empty";
}
$fetch3 = "select * from orderstatus where Status = 'OTW'";
$execute3 = mysqli_query($cnct, $fetch3);
$otw = mysqli_num_rows($execute3);
$arr3 = mysqli_fetch_array($execute3);
    ?>
         <div class="container-fluid pt-4 px-4">

                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    </div>
      <div class="table-responsive">
      <table class="table text-start align-middle table-bordered table-hover mb-0" >
           <thead>
           <tr class="text-white">
           <th scope="col"><h3>Received</h3></th>
           <th scope="col"><h3>On The Way</h3></th>
           <th scope="col"><h3>Delivered</h3></th>
           </tr>
           </thead>
           <tbody>
            <?php
                echo" <tr>
                <td><a href='receive.php?id=$arr1[2]'>$receive</a></td>
                <td><a href='otw.php?id=$arr3[2]'>$otw</a></td>
                <td><a href='delivered.php?id=$arr2[2]'>$deliver</a></td>
                </tr>";
               echo "</tbody>
               </table>
               </div></div></div>";
require_once("footer.php");
?>
</body>
</html>