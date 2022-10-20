<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
    require_once("../connection.php");
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Recieved','On The Way', 'Delivered'));  
      $query = "SELECT * from orderstatus ";  
      $result = mysqli_query($cnct, $query);  
      while($row = mysqli_fetch_array($result))  
      {  
        $D= $row[2] == 'Delivered';
        $Otw = $row[2] == 'OTW';
        $R = $row[2] == 'Recieved';

           fputcsv($output, array($R,$Otw,$R));
      }  
      fclose($output);  
 }  
 ?>