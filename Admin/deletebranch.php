<?php
require_once("../Connection.php");
$id = $_GET["id"];
$run = mysqli_query($cnct,"delete from branch where Id = '$id'");
header("location:branchRecord.php");

?>