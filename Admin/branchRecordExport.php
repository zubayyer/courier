<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
    require_once("../connection.php");
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Branch Name','Area', 'Status'));  
      $query = "SELECT * from branch ";  
      $result = mysqli_query($cnct, $query);  
      while($row = mysqli_fetch_array($result))  
      {  
           fputcsv($output, array($row[1],$row[2],$row[3]));
      }  
      fclose($output);  
 }  
 ?>