<?php
include("user-auth.php");
require("config.php");
$c = $_GET['counter'];
$id = $_SESSION['ID'];
//printf("counterid :: $c");

if(!strcmp($c,1))
	{
	// update
	
	 $email =$_GET['Email'];
	 $home=$_GET['Homeph'] ;
	 $cell = $_GET['Cellph'];
	 $ad1 = $_GET['Address1'];
	 $ad2 = $_GET['Address2'];
	 	
 	 $result = mysqli_query($con, "UPDATE proffesional SET Email='".$email."', Homeph='".$home."',Cellph='".$cell."' , Address1='".$ad1."', Address2='".$ad2."' where ID ='".$id."'");
    
	}


if(!strcmp($c,0))
	{
	 // retrive
	 $result = mysqli_query($con,"Select * from proffesional where ID='".$id."'");
     if($row=mysqli_fetch_array($result))
        {
	 	 $email = $row['Email'];
		 $home = $row['Homeph'];
		 $cell = $row['Cellph'];
		 $ad1 = $row['Address1'];
		 $ad2 = $row['Address2'];
		 }
	 
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
	<table width="100%" border="1">
  <tr height="50%">
    <td height="50%">
		<?php include("testimoni.php"); ?>
	</td>
  </tr>
</table>

<?php include("profile-options.php"); ?>	
<pre>
	<form action="profile-contact.php" method="GET">

	Email id : <input name="Email" type="text" value="<?php echo $email ?>" size="40" />
	
	Residential No.: <input name="Homeph" type="text" value="<?php echo $home ?>" size="20" />
	
	Cell No. : <input name="Cellph" type="text" value="<?php echo $cell ?>" size="10" />
	
	Address-1 :  					Address-2 :
	  <textarea name="Address1" cols="30" rows="5" wrap="virtual"><?php echo $ad1 ?></textarea>			<textarea name="Address2" cols="30" rows="5" wrap="virtual"><?php echo $ad2 ?></textarea>
		
	<input name="counter" type="hidden" value="1" size="35" />
<!--
<a href='profile-general.php?counter=1' name="Update">Update</a>	
--><center><input name="Update" type="submit" value="Update" /></center>	
			</form>
</pre>


	</td>
  </tr>
</table>
</div>

<?php include("footer.php") ?>

</body>
</html>
