<?php
include("user-auth.php");
require("config.php");
$rid = $_GET['rid'];
$myid = $_SESSION['ID'];

if($rid!="" && $myid!="")
{
   $result = mysqli_query($con,"UPDATE friend set Status='Active' where ID ='" . $rid ."' and SearchID='".$myid."'");
   
   $text = "<br><center>
      <center><h2>THANK YOU VERY MUCH</h2></center>
      <center>  <h3>For Being My Friend </h3></center>
      <center><h1>ALWAYS BE IN TOUCH!!</h1></center>
  
      <BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Regards From

	  <BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Friend : ".$rid."

              <br></center>";
	}
    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="style.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php $config_blogname ?> </title>
</head>
<body>
<?php include("user-header.php"); ?>
<div>
<table width="100%" border="1">
  <tr>
    <td width="10%" height="100%"><br/><?php include("user-option.php")?></td>
    <td width="90%"><?php echo $text;?></td>
  </tr>
</table>
</div>
<?php include("footer.php") ?>
</body>
</html>
	