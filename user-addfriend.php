<?php
include("user-auth.php");
require("config.php");
$to_id = $_REQUEST['sid'];
$from_id = $_SESSION['ID'];

if($from_id!="" && $to_id!="" )
{

 $res1 = mysqli_query($con, "Select * from friend where ID='".$from_id." ' and SearchID ='".$to_id."'");
 $res2 = mysqli_query($con, "Select * from friend where ID='".$to_id." ' and SearchID ='".$from_id."'");
 if(mysqli_fetch_array($res1) ||  mysqli_fetch_array($res2))
 	{
	 $text = "<pre><center><h2>THE FRIEND FOR WHICH THE REQUEST IS MADE </h2></center>
			  <center>  <h3>Is Already In Your Friends List</h3></center>
			  <center><h1>THANKS!!</h1></center></pre>";
	}
 else
 	{
	 $sql= "INSERT INTO friend(ID,SearchID,Status)VALUES ('".$from_id."','".$to_id."','Pending')";
   
			   if(mysqli_query($con,$sql))
	      			{
						$text = " <pre><center><h2> A REQUEST FOR A FRIEND IS MADE</h2></center>
					      <center>  <h3>You Need To Wait For The Conformation From The Other Side</h3></center>
						  <center><h1>THANKS!!</h1></center></pre>";
    				 }
	}
}

else
  {
  $text = " <pre><center><h2> IT SEAMS THAT YOU ARE NOT A VALID USER</h2></center>
			<center>  <h3>So Are Not Allowed To Make A Friends</h3></center>
			<center><h1>SORRY FOR INCONVIENCE!!</h1></center></pre>";
    				 
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
	