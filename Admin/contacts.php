<?php

?>
<!DOCTYPE html>
<html lang="en">
<body class="g-sidenav-show  bg-gray-200">
 <!-- ======= Header ======= -->
 <!-- <header id="header" class="header fixed-top d-flex align-items-center"> -->


<?php
require_once("header.php");
    $fetch = "select * from contact";
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
           <th scope="col"><h3>Name</h3></th>
           <th scope="col"><h3>Email</h3></th>
           <th scope="col"><h3>Message</h3></th>
           <th scope="col"><h3></h3></th>
           </tr>
           </thead>
           <tbody>
            <?php
             while($x = mysqli_fetch_array($execute)){
                echo" <tr>
                <td>$x[1]</td>
                <td>$x[2]</td>
                <td>$x[3]</td>
                <td><a href='deliver.php?id=$x[0]'><button  class='btn btn-primary btn-lg ms-2'> Response </button></a></td>
                
                </tr>";
           }
               echo "</tbody>
               </table>
               </div></div></div>";
             }
require_once("footer.php");
?>
</body>
</html>