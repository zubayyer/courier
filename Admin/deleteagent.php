<?php
require_once("../Connection.php");
$id = $_GET["id"];
$run = mysqli_query($cnct,"delete from register where Id = '$id'");
header("location:agent.php");

?>