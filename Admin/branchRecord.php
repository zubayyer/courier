<?php

?>
<!DOCTYPE html>
<html lang="en">
<body class="g-sidenav-show  bg-gray-200">
 <!-- ======= Header ======= -->
 <!-- <header id="header" class="header  d-flex align-items-center"> -->

<main id="main" class="main">
<h3>Branches</h3>
</main>
</div>

<?php
require_once("header.php");

echo '<div class="container-fluid pt-4 px-4">
<div class="row g-4">
    <div class="col-md-12">
        <div class="bg-secondary rounded h-100 p-4">
<form method="post" action="branchRecordExport.php" align="right">  
<input type="submit" name="export" value="CSV Export" class="btn btn-primary" />  
</form> 
</div>
</div>
</div>
</div>'
;
    $fetch = "select * from branch";
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
           <th scope="col"><h3>ID</h3></th>
           <th scope="col"><h3>Name</h3></th>
           <th scope="col"><h3>Area</h3></th>
           <th scope="col"><h3>Status</h3></th>
           <th scope="col"><h3></h3></th>
           <th scope="col"><h3></h3></th>
           </tr>
           </thead>
           <tbody>
            <?php
             while($x = mysqli_fetch_array($execute)){
                echo" <tr>
                <td>$x[0]</td>
                <td>$x[1]</td>
                <td>$x[2]</td>
                <td>$x[3]</td>
                <td><a href='deletebranch.php?id=$x[0]'>Delete</a></td>
                <td><a href='editbranch.php?id=$x[0]'>Edit</a></td>
                </tr>";
           }
               echo "</tbody>
               </table>
               </div></div></div>";
             }
             else{
                Echo "<h1 align='center'> Nothing Here </h1>";
             }
require_once("footer.php");
?>
</body>
</html>