<?php
require_once("../connection.php");
$id = $_GET["id"];
$run = mysqli_query($cnct,"delete from couriertype where Id = $id");
header("location:typeshow.php");

?>