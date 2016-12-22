<?php
$text=" ";
session_start();
require("config.php"); 
$id = $_POST["ID"];
$Password = $_POST["Password"];

//$con=mysql_connect("localhost","root","");
//mysql_select_db("social-network",$con);
$result = mysqli_query($con, "Select * from Login where ID='".$id."' and Password='".$Password."' and Status='Active'");
if($row=mysqli_fetch_array($result))
   {
     $_SESSION['ID'] = $row['ID']; 
     $_SESSION['Access'] = $row['Access'];
	 if(!strcmp($_SESSION['Access'],"Admin")) 
	     {
		   //$text = "u r a admin";
		   header('location:'.$config_basedir.'admin-home.php');
		 }
	 else if (!strcmp($_SESSION['Access'] ,"User"))
	      {
		   //$text = "u are a user";
		    header('location:'.$config_basedir.'user-home.php');
		  }	
	else{
		  session_destroy();
      $text = "<pre><center>  <h2> SORRY TO SAY</h2></center>
      <center><h3>But, You Are Not Allowed To Access This Site</h3></center>
      <center><h1>THANKS!!</h1></center></pre>";
		  }
	 }
	
else
   {
     session_destroy();
      $text = " <pre><center><h2> SORRY TO SAY</h2></center>
      <center><h3>But, You Are Not Allowed To Access This Site</h3></center>
      <center><h1>THANKS!!</h1></center></pre>";
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="style.css">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php $config_blogname ?> </title>
</head>

<?php include("site-title.php") ?>
<div class="">
<?php 
echo $text;
?>
</div>
<?php include("footer.php") ?>
<body>

</body>
</html>
