<?php
include("user-auth.php");
require("config.php");
$c = $_GET['counter'];
$id = $_SESSION['ID'];
//printf("counterid :: $c");

if(!strcmp($c,1))
	{
	// update
	
	 $education =$_GET['Education'];
	 $college=$_GET['College'] ;
	 $major = $_GET['Major'];
	 $degree = $_GET['Degree'];
	 $occupation = $_GET['Occupation'];
	 $industry = $_GET['Industry'];
	 $company = $_GET['Company'];
	 $cwebpg = $_GET['Cwebpg'];
	 $title = $_GET['Title'];
	 $jobdes = $_GET['Jobdes'];
	 $workph = $_GET['Workph'];
	 $cskill = $_GET['Cskill'];
	 $cinterest = $_GET['Cinterest'];
	
	$result = mysqli_query($con, "UPDATE proffesional SET Education='".$education."', College='".$college."',Major='".$major."' , Degree='".$degree."', Occupation='".$occupation."' , Industry='".$industry."',Company='".$company."' , Cwebpg='".$cwebpg."', Title='".$title."' , Jobdes='".$jobdes."',Workph='".$workph."' , Cskill='".$cskill."', Cinterest='".$cinterest."' where ID ='".$id."'");
    
	}


if(!strcmp($c,0))
	{
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
<?php include("User-header.php"); ?>
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
	<form action="profile-proffesional.php" method="GET">
	
	Education : <?php	
	$E = array('No answer','Elementary','High School','Some College','Associates Degree','Bacholors Degree','Masters Degree','PhD','Post Doctor');
	printf("<select name=Education>");
	for($i=0;$i<9;$i++)
		{
		 printf("<option value=\"" .$E[$i] . "\" ");
		 if($E[$i]==$education)
		 		printf("selected");
				
		 printf(" >".$E[$i] ."</option>");		
		}
?></select>
	
	College/University : <input name="College" type="text" value="<?php echo $college ?>" size="30" />
	
	Major : <input name="Major" type="text" value="<?php echo $major ?>" size="30" />
	
	Degree : <input name="Degree" type="text" value="<?php echo $degree ?>" size="30" />
	
	Occupation : <input name="Occupation" type="text" value="<?php echo $occupation ?>" size="30" />
	
	Industry : <input name="Industry" type="text" value="<?php echo $industry ?>" size="30" />
	
	Company : <input name="Company" type="text" value="<?php echo $company ?>" size="30" />
	
	Company WebPage : <input name="Cwebpg" type="text" value="<?php echo $cwebpg ?>" size="30" />
	
	Title : <input name="Title" type="text" value="<?php echo $title ?>" size="30" />
	
	Job Describtion :  
	  	<textarea name="Jobdes" cols="30" rows="5" wrap="virtual"><?php echo $jobdes ?></textarea>
	
	Work Phone : <input name="Workph" type="text" value="<?php echo $workph ?>" size="30" />
	
	Carrier Skills :  
	  	<textarea name="Cskill" cols="30" rows="5" wrap="virtual"><?php echo $cskill ?></textarea>
	
	Carrier Interest :   
	  	<textarea name="Cinterest" cols="30" rows="5" wrap="virtual"><?php echo $cinterest ?></textarea>
	

		
	<input name="counter" type="hidden" value="1" size="35" />
	
	<center><input name="Update" type="submit" value="Update" /></center>	
			</form>
</pre>


	</td>
  </tr>
</table>
</div>

<?php include("footer.php") ?>

</body>
</html>
