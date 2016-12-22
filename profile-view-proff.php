<?php
include("user-auth.php");
require("config.php");

$id = $_SESSION['ID'];


	 // retrive
	 $result = mysqli_query($con,"Select * from proffesional where ID='".$id."'");
     if($row=mysqli_fetch_array($result))
        {
	 	 $education = $row['Education'];
		 $college = $row['College'];
		 $major = $row['Major'];
		 $degree = $row['Degree'];
		 $occupation = $row['Occupation'];
		 $industry = $row['Industry'];
		 $company = $row['Company'];
		 $cwebpg = $row['Cwebpg'];
		 $title = $row['Title'];
		 $workph = $row['Workph'];
		 $cskill = $row['Cskill'];
		 $cinterest = $row['Cinterest'];
		 $jobdes = $row['Jobdes'];
		 $email = $row['Email'];
		 $home = $row['Homeph'];
		 $cell = $row['Cellph'];
		 $ad1 = $row['Address1'];
		 $ad2 = $row['Address2'];
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
	
	<?php include("profile-view-options.php"); ?>		
<pre>

<table width="100%" border="0" cellpadding="5">
 <tr bgcolor="#CD9BFF"><td width="30%">Education :</td><td width="70%"><?php echo $education ?></td></tr>
 <tr><td width="20%" >College :</td><td width="70%"><?php echo $college ?></td></tr>     
 <tr bgcolor="#CD9BFF"><td width="30%">Major :</td><td width="70%"><?php echo $major ?></td></tr>   
 <tr><td width="30%">Degree :</td><td width="70%"><?php echo $degree ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td width="30%">Occupation :</td><td width="70%"><?php echo $occupation  ?></td></tr>   
 <tr><td width="30%"> Industry :</td><td width="70%"><?php echo $industry ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td width="30%">Company :</td><td width="500" align="justify"><?php echo $company ?></td></tr>   
 <tr><td width="30%">Cwebpg :</td><td width="500" align="justify"><?php echo $cwebpg ?></td></tr> 
 <tr bgcolor="#CD9BFF"><td width="30%">Title :</td><td width="500" align="justify"><?php echo $title ?></td></tr>   
 <tr><td width="30%">Work Phone no. :</td><td width="500" align="justify"><?php echo $workph ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td>Current Skills :</td><td width="500" align="justify"><?php echo $cskill ?></td></tr>   
 <tr><td>Current Interest :</td><td width="500" align="justify"><?php echo $cinterest ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td>Job Description :</td><td width="500" align="justify"><?php echo $jobdes ?></td></tr>   
 <tr><td>Email :</td><td width="500" align="justify"><?php echo $email ?></td></tr>
 <tr bgcolor="#CD9BFF"><td>Home Phone no. :</td><td width="500" align="justify"><?php echo $home ?></td></tr>      
 <tr><td>Cell Phone no. :</td><td width="500" align="justify"><?php echo $cell ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td>Address 1 :</td><td width="500" align="justify"><?php echo $ad1 ?></td></tr>   
 <tr><td>Address 2 :</td><td width="500" align="justify"><?php echo $ad2 ?></td></tr>   
 
</table>
	
</pre>
	</td>
  </tr>
</table>
</div>
<?php include("footer.php") ?>
</body>
</html>
