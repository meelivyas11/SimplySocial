<?php
include("user-auth.php");
require("config.php");

$id = $_REQUEST['ID'];
//echo $id;
//Array ( [name] => Sunset.jpg [type] => image/pjpeg [tmp_name] => C:\wamp\tmp\php24D.tmp [error] => 0 [size] => 71189 ) 

$result = mysqli_query($con,"Select * from personal where ID='". $id."'");
//echo "Select * from personal where ID='". $id."'";
header("Content-type:image/jpeg");
if($row=mysqli_fetch_array($result))
        {
		 print $row['image'];
		}
//echo $im;

?>

