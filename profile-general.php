<?php
include("user-auth.php");
require("config.php");
$c = $_GET['counter'];
$id = $_SESSION['ID'];
//printf("counterid :: $c");

if(!strcmp($c,1))
	{
	// update
	 $fname =$_GET['Fname'];
	 $lname=$_GET['Lname'] ;
	 $gender = $_GET['Gender'];
	 $status = $_GET['Status'];
	 $birthday = $_GET['BirthDay'];
	 $birthmonth = $_GET['BirthMonth'];
	 $birthyr = $_GET['BirthYear'];
	 $city = $_GET['City'];
	 $state =$_GET['State'];
	 $country = $_GET['Country'];
	 $lang = $_GET['Language'];
	 $highschool =$_GET['HighSchool'];
	 $university = $_GET['University'];
	 $interest = $_GET['Interest'];
		
 	 
	 $result = mysqli_query($con, "UPDATE Social SET Fname='".$fname."', Lname='".$lname."',Gender='".$gender."' , BirthDay='".$birthday."', BirthMonth='".$birthmonth."', BirthYear='".$birthyr."', City='".$city."', State='".$state."', Country='".$country."', Language='".$lang."', HighSchool='".$highschool."', University='".$university."' ,Status='".$status."' , Interest='".$interest."' where ID ='".$id."'") or die(mysqli_error($con));

    }


if(!strcmp($c,0))
	{
	 // retrive
	 $result = mysqli_query($con, "Select * from social where ID='".$id."'");
     if($row=mysqli_fetch_array($result))
        {
	 	 $fname = $row['Fname'] ;
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
    <td width="10%" valign="top" height="100%"><br/><?php include("User-Option.php")?></td>
    <td width="90%">
	<table width="100%" border="1">
  <tr height="50%">
    <?php include("testimoni.php"); ?>
  </tr>
</table>

<?php include("profile-options.php"); ?>	
<pre>
	<form action="profile-general.php" method="GET">

	First Name : <input name="Fname" type="text" value="<?php echo $fname ?>" size="25" />
	
	Last Name : <input name="Lname" type="text" value="<?php echo $lname ?>" size="25" />

	Gender : <?php	
	$Gender = array('No answer','Male','Female');
	printf("<select name=Gender>");
	for($i=0;$i<3;$i++)
		{
		 printf("<option value=\"" .$Gender[$i] . "\" ");
		 if($Gender[$i]==$gender)
		 		printf("selected");
				
		 printf(" >".$Gender[$i] ."</option>");		
		}
?></select>

	Relationship status : <?php	
	$RS = array('No answer','Single','Married','Open Marriage','Open Relationship');
	printf("<select name=Status>");
	for($i=0;$i<5;$i++)
		{
		 printf("<option value=\"" .$RS[$i] . "\" ");
		 if($RS[$i]==$status)
		 		printf("selected");
				
		 printf(" >".$RS[$i] ."</option>");		
		}
?></select> 
	
	Birth Day : <?php	
	$Bday = array('No answer','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31');
	printf("<select name=BirthDay>");
	for($i=0;$i<32;$i++)
		{
		 printf("<option value=\"" .$Bday[$i] . "\" ");
		 if($Bday[$i]==$birthday)
		 		printf("selected");
				
		 printf(" >".$Bday[$i] ."</option>");		
		}
?></select>		<?php	
	$Bmonth = array('No answer','January','February','March','April','May','June','July','August','September','October','November','December');
	printf("<select name=BirthMonth>");
	for($i=0;$i<13;$i++)
		{
		 printf("<option value=\"" .$Bmonth[$i] . "\" ");
		 if($Bmonth[$i]==$birthmonth)
		 		printf("selected");
				
		 printf(" >".$Bmonth[$i] ."</option>");		
		}
?></select>

	Birth Year : <?php	
	$Byr = array('No answer','1960','1961','1962','1963','1964','1965','1966','1967','1968','1969','1970','1971','1972','1973','1974','1975','1976','1977','1978','1979','1980','1981','1982','1983','1984','1985','1986','1987','1988','1989','1990','1991','1992','1993','1994','1995','1996','1997','1998','1999','2000');
	printf("<select name=BirthYear>");
	for($i=0;$i<41;$i++)
		{
		 printf("<option value=\"" .$Byr[$i] . "\" ");
		 if($Byr[$i]==$birthyr)
		 		printf("selected");
				
		 printf(" >".$Byr[$i] ."</option>");		
		}
?></select>
	
	City : <input name="City" type="text" value="<?php echo $city ?>" size="35" />

	State : <input name="State" type="text" value="<?php echo $state ?>" size="35" />

	Country : <input name="Country" type="text" value="<?php echo $country ?>" size="35" />

	Language i Speek : <br/>		  <textarea name="Language" cols="30" rows="5" wrap="virtual"><?php echo $lang ?></textarea>
	
	High School : <input name="HighSchool" type="text" value="<?php echo $highschool ?>" size="35" />

	University : <input name="University" type="text" value="<?php echo $university ?>" size="35" />

	Interested In : <?php	
	$Iter = array('No answer','Friends','Activity Partner','Bussiness','Dating');
	printf("<select name=Interest>");
	for($i=0;$i<5;$i++)
		{
		 printf("<option value=\"" .$Iter[$i] . "\" ");
		 if($Iter[$i]==$interest)
		 		printf("selected");
				
		 printf(" >".$Iter[$i] ."</option>");		
		}
?></select> 
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
