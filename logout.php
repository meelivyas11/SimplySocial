<?php
include("user-auth.php");
require("config.php");
$id =$_SESSION['ID'];
unset($_SESSION['ID']);
session_destroy();
header('location:'.$config_basedir.'index.php');
//echo "hello";
?>