<?php
include("user-auth.php");
require("config.php");

$c = $_GET['counter'];
$id = $_SESSION['ID'];
//printf("counterid :: $c");

if(!strcmp($c,1))
	{
	// update
	
	 $first =$_GET['First'];
	 $height=$_GET['Height'] ;
	 $eye = $_GET['Eye'];
	 $hair = $_GET['Hair'];
	 $on = $_GET['Turnon'];
	 $off = $_GET['Off'];
	 $five = $_GET['Five'];
	 
	 	
 	 $result = mysqli_query($con,"UPDATE personal SET First='".$first."' , Height='".$height."',Eye='".$eye."', Hair = '".$hair."' , Off ='".$off."' , Five='".$five."' where ID ='".$id."'");
	 $result = mysqli_query($con,"UPDATE personal SET  Turnon='".$on."' where ID = '".$id."'");
  	}


if(!strcmp($c,0))
	{
	 // retrive
	  $result = mysqli_query($con,"Select * from personal where ID='".$id."'");
     if($row=mysqli_fetch_array($result))
        {
	 	 $first = $row['First'];
		 $height = $row['Height'];
		 $eye = $row['Eye'];
		 $hair = $row['Hair'];
		 $on = $row['Turnon'];
		 $off = $row['Off'];
		 $five = $row['Five'];
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
	<form action="profile-personal.php" method="GET">
	First thing that u will notice about me : <input name="First" type="text" value="<?php echo $first ?>" size="25" />
	
	Height : <input name="Height" type="text" value="<?php echo $height ?>" size="5" />(centimeter)
	
	Eye Color : <?php	
	$E = array('No answer','bown','black','gray','green','hazel');
	printf("<select name=Eye>");
	for($i=0;$i<6;$i++)
		{
		 printf("<option value=\"" .$E[$i] . "\" ");
		 if($E[$i]==$eye)
		 		printf("selected");
				
		 printf(" >".$E[$i] ."</option>");		
		}
?></select>
	
	Hair Color : <?php	
	$H = array('No answer','black','blonde','light brown','dark brown','red','gray','salt &pepper','bald');
	printf("<select name=Hair>");
	for($i=0;$i<9;$i++)
		{
		 printf("<option value=\"" .$H[$i] . "\" ");
		 if($H[$i]==$hair)
		 		printf("selected");
				
		 printf(" >".$H[$i] ."</option>");		
		}
?></select>
	
	Turns On at :
		 <textarea name="Turnon" cols="30" rows="5" wrap="virtual"><?php echo $on ?></textarea>

	Turns Off at :
    	 	 <textarea name="Off" cols="30" rows="5" wrap="virtual"><?php echo $off ?></textarea>
	
	Five things i can't live without : 	
		           <textarea name="Five" cols="30" rows="5" wrap="virtual"><?php echo $five ?></textarea>	
		
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
