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
<script language="JavaScript">
 function testresize()
    {    
	 if (onresize)
        { window.location.reload(); }
    }
</script>
</head>

<body onresize="javascript:testresize()">
<?php include("user-header.php"); ?>
<div>
<table width="100%" border="1">
  <tr>
    <td width="10%" valign="top" height="100%"><br/><?php include("user-option.php")?></td>
    <td width="90%">
	<table width="100%" border="1">
  <tr height="50%">
    <td height="50%">
<?php include("testimoni.php"); ?>
	</td>
  </tr>
</table>

	
<?php include("profile-options.php"); ?>	
<pre>
	<form action="photo-change2.php" method="post" enctype="multipart/form-data">
	Please choose an image to upload: <input type="file" id="file" name="file"><br>
	Please enter the title of that picture: <input name="whatsit"><br>


<center> <input type="submit"></center>

</form>

</pre>


	</td>
  </tr>
</table>
</div>
<?php include("footer.php") ?>
</body>
</html>


