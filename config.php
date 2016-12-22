<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbdatabase = "social-network";
$config_blogname = "Simply Social";
$config_author = "Meeli Vyas";
$config_basedir = "http://localhost:8080/SimplySocial/";

$con = mysqli_connect($dbhost,$dbuser,$dbpassword, $dbdatabase);
mysqli_select_db($con, $dbdatabase);
?>