<!DOCTYPE html>
<html lang="en">
<body class="g-sidenav-show  bg-gray-200">
 <!-- ======= Header ======= -->
 <!-- <header id="header" class="header fixed-top d-flex align-items-center"> -->

<main id="main" class="main">
<h3>Dashboard</h3>
</main>
</div>

<?php
require_once("header.php");

 echo '<div class="container-fluid pt-4 px-4">
 <div class="row g-4">
     <div class="col-md-12">
         <div class="bg-secondary rounded h-100 p-4">
 <form method="post" action="DeliveredExport.php" align="right">  
 <input type="submit" name="export" value="CSV Export" class="btn btn-primary" />  
 </form> 
 </div>
 </div>
 </div>
 </div>'
 ;
    $id = $_GET["id"];
    $fetch = "select * from orderstatus where Status = '$id'";
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
           <th scope="col"><h3>Courier Id</h3></th>
           <th scope="col"><h3>Status</h3></th>
           <th scope="col"><h3>Date</h3></th>
           </tr>
           </thead>
           <tbody>
            <?php
             while($x = mysqli_fetch_array($execute)){
                echo" <tr>
                <td>$x[1]</td>
                <td>$x[2]</td>
                <td>$x[3]</td>
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