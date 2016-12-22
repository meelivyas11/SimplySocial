
<?php
	 // retrive
	include("user-auth.php");
	require("config.php");

     $id = $_SESSION['ID'];
 
     $result = mysqli_query($con, "Select * from social where ID='".$id."'");
     if($row=mysqli_fetch_array($result))
        {
		 $fname = $row['Fname'];
		 $lname = $row['Lname'];
		 $gender = $row['Gender'];
		 $status = $row['Status'];
		 $birthday = $row['BirthDay'];
		 $birthmonth = $row['BirthMonth'];
		 $birthyr = $row['BirthYear'];
		 $city = $row['City'];
		 $state = $row['State'];
		 $country = $row['Country'];
		 $lang = $row['Language'];
		 $highschool = $row['HighSchool'];
		 $university = $row['University'];
		 $interest = $row['Interest'];
		 
	 	 $child = $row['Children'];
		 $ethnic = $row['Ethnicity'];
		 $political = $row['Political'];
		 $religion = $row['Religion'];
		 $humour = $row['Humour'];
		 $fashion = $row['Fashion'];
		 $smoking = $row['Smoking'];
		 $drinking = $row['Drinking'];
		 $pets = $row['Pets'];
		 $living = $row['Living'];
		 $hometown = $row['Hometown'];
		 $webpage = $row['Webpage'];
		 $aboutme = $row['Aboutme'];
		 $passion = $row['Passion'];
		 $sports = $row['Sports'];
		 $activities = $row['Activities'];
		 $books = $row['Books'];
	 	 $music = $row['Music'];
		 $tvshow = $row['Tvshow'];
		 $movies = $row['Movies'];
	
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
  <tr bgcolor="#CD9BFF"><td width="30%">Name :</td><td width="70%"><?php echo $fname .".". $lname ?></td></tr>
  <tr><td width="20%">About Me :</td><td width="500" align="justify"><?php echo $aboutme ?></td></tr>     
 <tr bgcolor="#CD9BFF"><td width="30%">Gender :</td><td width="70%"><?php echo $gender ?></td></tr>   
 <tr><td width="30%">Relationship status :</td><td width="70%"><?php echo $status ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td width="30%">Birth Day :</td><td width="70%"><?php echo $birthday ." ". $birthmonth .",". $birthyr  ?></td></tr>   
 <tr><td width="30%"> City/State :</td><td width="70%"><?php echo $city .",". $state ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td width="30%">Country :</td><td width="70%"><?php echo $country ?></td></tr>   
 <tr><td width="30%">Language i Speek :</td><td width="70%"><?php echo $lang ?></td></tr> 
 <tr bgcolor="#CD9BFF"><td width="30%">High School :</td><td width="70%"><?php echo $highschool ?></td></tr>   
 <tr><td width="30%">University :</td><td width="70%"><?php echo $university ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td>Interested In :</td><td width="70%"><?php echo $interest ?></td></tr>   
 <tr><td>children :</td><td width="70%"><?php echo $child ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td>Ethnicity :</td><td width="70%"><?php echo $ethnic ?></td></tr>   
 <tr><td>Political View :</td><td width="70%"><?php echo $political ?></td></tr>
 <tr bgcolor="#CD9BFF"><td>Religion :</td><td width="70%"><?php echo $religion ?></td></tr>      
 <tr><td>Humour :</td><td width="70%"><?php echo $humour ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td>Fashion :</td><td width="70%"><?php echo $fashion ?></td></tr>   
 <tr><td>Smoking :</td><td width="70%"><?php echo $smoking ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td>Drinking :</td><td width="70%"><?php echo $drinking ?></td></tr>   
 <tr><td>Pets :</td><td width="70%"><?php echo $pets ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td>Living :</td><td width="70%"><?php echo $living ?></td></tr>   
 <tr><td>Home Town :</td><td width="70%"><?php echo $hometown ?></td></tr>   
 <tr bgcolor="#CD9BFF"><td>Webpage :</td><td width="70%"><?php echo $webpage ?></td></tr>     
 
 <tr><td width="30%">Passion :</td><td width="500" align="justify"><?php echo $passion ?></td></tr>     
 <tr bgcolor="#CD9BFF"><td width="30%">Sports :</td><td width="500" align="justify"><?php echo $sports ?></td></tr>     
 <tr><td>Activities :</td><td width="500" align="justify"><?php echo $activities ?></td></tr>     
 <tr bgcolor="#CD9BFF"><td>Books :</td><td width="500" align="justify"><?php echo $books ?></td></tr>     
 <tr><td>Music :</td><td width="500" align="justify"><?php echo $music ?></td></tr>     
 <tr bgcolor="#CD9BFF"><td>Tv Show :</td><td width="500" align="justify"><?php echo $tvshow ?></td></tr>     
 <tr><td>Movies :</td><td width="500" align="justify"><?php echo $movies ?></td></tr>     
</table>

	</td>
  </tr>
</table>
</div>
<?php include("footer.php") ?>
</body>
</html>
