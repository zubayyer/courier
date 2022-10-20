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


 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="bg-secondary rounded h-100 p-4">
      <form method="post" action="export.php" align="right">  
        <input type="submit" name="export" value="CSV Export" class="btn btn-primary" />  
      </form> 
      </div>
      </div>
      </div>
      </div>
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
             <th scope="col"><h3>From</h3></th>
             <th scope="col"><h3>To</h3></th>
             <th scope="col"><h3>Track Id</h3></th>
             </tr>
           </thead>
           <tbody>
           <?php
             while($x = mysqli_fetch_array($execute)){
         

                 echo "<tr>
                 <td >$x[3]</td>
                 <td >$x[7]</td>
                 <td >$x[0]</td>
                 </tr>
               ";
             }
             echo'</tbody></table></div></div></div>';
        

             }
?>
<?php
require_once("../admin/footer.php");
?>
</body>
</html>