<?php

$LIST = $_POST['list'];
include "config.php";
mysqli_query($con, "INSERT INTO `tabletodo`(`List`) VALUES ('$LIST')");

header("location:index.php");

?>