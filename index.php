<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="stylesheet"  href="style.css">
<?php require("config.php");
?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php $config_blogname ?> </title>
</head>
<body>
<?php include("site-title.php") ?>
<table width="100%" border="1">
  <tr>
    <td width="70%"></td>
    <td width="30%">
	<pre>
	<form action="logincheck.php" method="post">
  ID       : <input name="ID" type="text" size="25" />
	   
  Password : <input name="Password" type="password" size="25" />
	<center><input name="Login" type="submit" value="Login" /></center>
	</form><form action="register.php" method="post">
  Not A User Yet?? <input name="register" type="submit" value="SignUP" />
	</form></pre>
	
	</td>
  </tr>
</table>

</div>
<?php include("footer.php") ?>
</body>
<?php
//phpinfo();
?>
</body>
</html>
