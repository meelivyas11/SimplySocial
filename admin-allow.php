<?php
include("user-auth.php");
require("config.php");

$rid = $_GET['rid'];

$result = mysqli_query($con,"UPDATE login set Status='Active' where ID ='" . $rid ."'");
   
$sql= "INSERT INTO social(ID)VALUES('".$rid."')";
mysqli_query($con,$sql);

$sql2= "INSERT INTO personal(ID)VALUES('".$rid."')";
mysqli_query($con,$sql2);

$sql3= "INSERT INTO proffesional(ID)VALUES('".$rid."')";
mysqli_query($con,$sql3);

header('location:'.$config_basedir.'admin-home.php');
 	 ?>
