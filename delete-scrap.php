<?php
include("user-auth.php");
require("config.php");
$rid = $_REQUEST['rid'];
$msg = $_REQUEST['msg'];
$myid = $_SESSION['ID'];
$result = mysqli_query($con,"Delete from scrap where Sender='".$rid."' and Destination='".$myid."' and Message ='".$msg."'");
header('location:'.$config_basedir.'view-scraps.php');
?>