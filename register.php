<?php require("config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet"  href="style.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php $config_blogname ?> </title>

<script type="text/javascript">
function check()
   { 
     var p1 = document.getElementById("Password").value;
     var p2 = document.getElementById("Password2").value;
	 if(p1==p2){
	      //alert("correct");
		}
	else	
	   {
	   alert("Both The Passwords are  not same");
	   }
	     }
</script>

</head>
<body>
   <?php include("site-title.php") ?>
   <div  align="center"><form action="reg_req.php" method="post">  
    
	  <table width="100%" align="center" border="1">
  <tr>
    <td width="25%"></td>
    <td width="50%" border="1"> <center><p><b>REGISTRATION</b></p></center>
	<pre>
  Current ID      : <input name="ID" id="ID" type="text" size="25" />
	   
  Password        : <input name="Password" id="Password" type="password" size="25" />

  Retype Password : <input name="Password2" id="Password2" type="password" size="25"  onblur="javascript:check()"/>
  
  <center><input name="Register" type="submit" value="Register" /></center>
	</pre>
	</td>
	<td width="25%"></td>
  </tr>
</table>

</form></div>


</body>
</html>
