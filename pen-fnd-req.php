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
<?php include("user-header.php"); ?>
<div>
<table width="100%" border="1">
  <tr>
    <td width="10%" height="100%"><br/><?php include("user-option.php")?></td>
    <td width="90%">
	<?php
 
 $myid = $_SESSION['ID'];

 $result = mysqli_query($con,"Select * from Friend where status='Pending' and SearchID = '".$myid."'") or die(mysqli_error($con));
 
 if(mysqli_num_rows($result) == 0){echo "<center><h2>You Have No Pending Request</h2></center>";}
 while($row = mysqli_fetch_array($result))
      {
	   $rid = $row['ID'];
	   $res = mysqli_query($con,"Select * from social where ID='".$rid."'") or die(mysqli_error($con));
       while($row1=mysqli_fetch_array($res))
        {
		 $rid = $row1['ID']; 
	 	 $fname = $row1['Fname'];
		 $lname = $row1['Lname'];
	   	 //$photo = $row['Photo'];
				?>		
    			<table border="2" align="left">
			      <td align="center">
                    <center><img align="center" src="get-profile-pic.php?ID=<?php echo $rid?>" width="150" height="100" alt="<?php echo $fname?>"/></center>
                    <center><?php echo $fname." ".$lname ?></center>
                    <center><?php echo $rid ;?></center>
         
        			<form action="allow_friend.php" method="get">
                        <input type="hidden" name="rid" id="rid"  value="<?php echo $rid; ?>">
                        <button name="allow" value="<?php echo $rid; ?>" onClick="submit()">Accept Request</button>
                    </form>

         		</td> 
		      </table>

    <?php 
				
	     }
	  }
		?>

	</td>
  </tr>
</table></div>
<?php include("footer.php") ?>
</body></html>
