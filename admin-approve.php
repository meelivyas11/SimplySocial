<?php
include("user-auth.php");
require("config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="style.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php $config_blogname ?> </title>
</head>
<body>
<?php include("site-title.php"); ?>
<div>
<table width="100%" border="1">
  <tr>
    <td width="100%">
	<?php
	 $result = mysqli_query($con, "Select * from Login where Status='Pending'");
	 if(mysqli_num_rows($result) == 0){echo "<center><h2>There Are No New Registration</h2></center>";}
     ?> <table width="50%" align="center" >
	
			   <?php 
  while($row=mysqli_fetch_array($result))
      {
	   $rid = $row['ID'];
	   ?>
	   <tr valign="middle"><td width="50%"><?php echo $rid." "; ?></td><td width="50%"><form action="admin-allow.php" method="get"><input type="hidden" name="rid" id="rid"  value="<?php echo $rid; ?>"><button name="allow" value="<?php echo $rid; ?>" onClick="submit()">Accept</button></form></td></tr>
	 <?php }  ?>
		
	
	            </table>
	
	</td>
  </tr>
</table></div>

<div id="footer" class="footer">
   </div>
</body></html>
