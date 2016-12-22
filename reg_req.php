<?php
$text="";
require("config.php"); 
$id = $_POST["ID"];
$password = $_POST["Password"];
if(!strcmp($_POST["Password"],$_POST["Password2"]))
{
   
    $result = mysqli_query($con,"Select * from login where ID='".$id."'");
    if($row=mysqli_fetch_array($result))
        {
		 $text =" <pre><center>  <h2> THIS ID IS ALREADY USERD </h2></center>
			   <center>  <h3>Try With Some Other ID </h3></center>
			   <center><h1>THANKS!!</h1></center></pre>";
     
        }
    else
	    {
          $sql= "INSERT INTO login(ID,Password,Status,Access)VALUES
          ('".$id."','".$password."','Pending','User')";
   
			   if(mysqli_query($con, $sql))
	      			{
						$text = " <pre><center><h2> YOUR REQUEST IS ACCEPTED AND IS SENT TO THE ADMINISTRATOR</h2></center>
					      <center>  <h3>It Will Take 24hrs. In Conformation </h3></center>
						  <center><h1>THANKS!!</h1></center></pre>";
					  }
		}
 }
 
 else
    {
	   //$text ="both password not correct";
	   header('location:'.$config_basedir.'register.php');
	 }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet"  href="style.css">
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
