<?php
include("user-auth.php");
require("config.php");

$id = $_SESSION['ID'];
	 // retrive
	 $result = mysqli_query($con,"Select * from personal where ID='".$id."'");
     if($row=mysqli_fetch_array($result))
        {
	 	 $first = $row['First'];
		 $height = $row['Height'];
		 $eye = $row['Eye'];
		 $hair = $row['Hair'];
		 $on = $row['Turnon'];
		 $off = $row['Off'];
		 $five = $row['Five'];
	 }
	 


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="style.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php $config_blogname ?> </title>
<script language="JavaScript">
 function testresize()
    {    
	 if (onresize)
        { window.location.reload(); }
    }
</script>
</head>
<!--<h1>This is User Home </h1>-->


<body onresize="javascript:testresize()">
<?php include("user-header.php"); ?>
<div>
<table width="100%" border="1">
  <tr>
    <td width="10%" valign="top" height="100%"><br/><?php include("user-option.php")?></td>
    <td width="90%">
	
<?php include("profile-view-options.php"); ?>	
	
<pre>
	
	<table width="100%" border="0" cellpadding="5">
 <tr bgcolor="#CD9BFF"><td width="200"align="justify">First Thing You Will Notice About Me :</td><td width="500" align="justify"><?php echo $first ?></td></tr>   
 <tr><td width="30%">Height :</td><td width="500" align="justify"><?php echo $height ?></td></tr> 
 <tr bgcolor="#CD9BFF"><td width="30%">Eye's Color :</td><td width="500" align="justify"><?php echo $eye ?></td></tr>   
 <tr><td width="30%">Hair Colour :</td><td width="500" align="justify"><?php echo $hair ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td>Turns On :</td><td width="500" align="justify"><?php echo $on ?></td></tr>   
 <tr><td>Turns Off  :</td><td width="500" align="justify"><?php echo $off ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td width="200"align="justify">Five Things Without Which i Cant Live :</td><td width="500" align="justify"><?php echo $five ?></td></tr>   
 
</table>

	
</pre>


	</td>
  </tr>
</table>
</div>
<?php include("footer.php") ?>
</body>
</html>
