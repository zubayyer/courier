<?php
require_once("../Connection.php");
$id = $_GET["id"];
$run = mysqli_query($cnct,"delete from courier where Id = '$id'");
header("location:detail.php");

?>