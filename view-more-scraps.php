<?php
include("user-head.php");
//$temp=0;
//$_SESSION['Count'] = $temp; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="style.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<!--<script language="JavaScript">
 function testresize()
    {    
	 if (onresize)
        { window.location.reload(); }
    }
</script>

<body onresize="javascript:testresize()">

-->

</head>
<!--<h1>This is User Home </h1>-->
<body>

<?php include("User-header.php"); ?>

<div>
<table width="100%" border="1">
  <tr>
    <td width="10%" height="100%" valign="top"><br/><?php include("User-Option.php")?></td>
    <td width="90%" valign="top"><?php include("VS-logic.php")?>
	</td>
  </tr>
</table>
</div>

<!--/*<div id="footer" class="footer">
i m here</div>
*/-->
</body>
</html>
