<?php
include("user-auth.php");
require("config.php");
$c = $_GET['counter'];
$id = $_SESSION['ID'];
//printf("counterid :: $c");

if(!strcmp($c,1))
	{
	// update
	
	 $child =$_GET['Children'];
	 $ethnic=$_GET['Ethnicity'] ;
	 $political = $_GET['Political'];
	 $religion = $_GET['Religion'];
	 $humour = $_GET['Humour'];
	 $fashion = $_GET['Fashion'];
	 $smoking = $_GET['Smoking'];
	 $drinking = $_GET['Drinking'];
	 $pets =$_GET['Pets'];
	 $living = $_GET['Living'];
	 $hometown = $_GET['Hometown'];
	 $webpage =$_GET['Webpage'];
	 $aboutme=$_GET['Aboutme'];
	 $passion=$_GET['Passion'];
	 $sports=$_GET['Sports'];
	 $activities=$_GET['Activities'];
	 $books=$_GET['Books'];
	 $music=$_GET['Music'];
	 $tvshow=$_GET['Tvshow'];
	 $movies=$_GET['Movies'];
		
 	 $result = mysqli_query($con, "UPDATE Social SET Children='".$child."', Ethnicity='".$ethnic."',Political='".$political."' , Religion='".$religion."', Humour='".$humour."', Fashion='".$fashion."', Smoking='".$smoking."', Drinking='".$drinking."', Pets='".$pets."', Living='".$living."', Hometown='".$hometown."', Webpage='".$webpage."' ,Aboutme='".$aboutme."' , Passion='".$passion."', Sports='".$sports."', Activities='".$activities."', Books='".$books."', Music='".$music."' ,Tvshow='".$tvshow."' , Movies='".$movies."'where ID ='".$id."'");
     
	}


if(!strcmp($c,0))
	{
	 // retrive
    $result = mysqli_query($con, "Select * from social where ID='".$id."'");
    if($row=mysqli_fetch_array($result))
        {
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
 <td height="50%">
	<?php include("testimoni.php"); ?>
	</td>
  </tr>
</table>

	
<?php include("profile-options.php"); ?>	
<pre>
	<form action="profile-social.php" method="GET">

	children : <?php	
	$C = array('No answer','No','Yes','Yes-at home Full Time','Yes-not at home','Yes-at home Part Time');
	printf("<select name=Children>");
	for($i=0;$i<6;$i++)
		{
		 printf("<option value=\"" .$C[$i] . "\" ");
		 if($C[$i]==$child)
		 		printf("selected");
				
		 printf(" >".$C[$i] ."</option>");		
		}
?></select>		Ethnicity : <?php	
	$E = array('No answer','Asian','East Indian','Middle Easten','Multi Ethnic','Others');
	printf("<select name=Ethnicity>");
	for($i=0;$i<6;$i++)
		{
		 printf("<option value=\"" .$E[$i] . "\" ");
		 if($E[$i]==$ethnic)
		 		printf("selected");
				
		 printf(" >".$E[$i] ."</option>");		
		}
?></select>

	Religion : <?php	
	$R = array('No answer','Hindu','Jain','Sikh','Catholic','Protestant','Jewish','Others');
	printf("<select name=Religion>");
	for($i=0;$i<8;$i++)
		{
		 printf("<option value=\"" .$R[$i] . "\" ");
		 if($R[$i]==$religion)
		 		printf("selected");
				
		 printf(" >".$R[$i] ."</option>");		
		}
?></select>			Political View : <?php	
	$P = array('No answer','Not Potitical','Depends','Left Liberal','Political','Centric');
	printf("<select name=Political>");
	for($i=0;$i<6;$i++)
		{
		 printf("<option value=\"" .$P[$i] . "\" ");
		 if($P[$i]==$political)
		 		printf("selected");
				
		 printf(" >".$P[$i] ."</option>");		
		}
?></select>  

	Humour :  <?php	
	$H = array('No answer','Cheeasy','Friendly','Cleaver','Sarcastic','None From Above');
	printf("<select name=Humour>");
	for($i=0;$i<6;$i++)
		{
		 printf("<option value=\"" .$H[$i] . "\" ");
		 if($H[$i]==$humour)
		 		printf("selected");
				
		 printf(" >".$H[$i] ."</option>");		
		}
?></select>		Fashion :<?php	
	$F = array('No answer','Alternative','Casual','Classic','Designer','Smart','Trendy','None From Above');
	printf("<select name=Fashion>");
	for($i=0;$i<8;$i++)
		{
		 printf("<option value=\"" .$F[$i] . "\" ");
		 if($F[$i]==$fashion)
		 		printf("selected");
				
		 printf(" >".$F[$i] ."</option>");		
		}
?></select>   

	Smoking : <?php	
	$S = array('No answer','No','Socially','Occassionally','Regularly','Heavily');
	printf("<select name=Smoking>");
	for($i=0;$i<6;$i++)
		{
		 printf("<option value=\"" .$S[$i] . "\" ");
		 if($S[$i]==$smoking)
		 		printf("selected");
				
		 printf(" >".$S[$i] ."</option>");		
		}
?></select>		Drinking : <?php	
	$D = array('No answer','No','Socially','Occassionally','Regularly','Heavily');
	printf("<select name=Drinking>");
	for($i=0;$i<6;$i++)
		{
		 printf("<option value=\"" .$D[$i] . "\" ");
		 if($D[$i]==$drinking)
		 		printf("selected");
				
		 printf(" >".$D[$i] ."</option>");		
		}
?></select>   

	Pets : <?php	
	$Pe = array('No answer','I love them','I have them','I like them','I like them in zoo','I dont like them');
	printf("<select name=Pets>");
	for($i=0;$i<6;$i++)
		{
		 printf("<option value=\"" .$Pe[$i] . "\" ");
		 if($Pe[$i]==$pets)
		 		printf("selected");
				
		 printf(" >".$Pe[$i] ."</option>");		
		}
?></select>   		Living : <?php	
	$L= array('No answer','Alone','With parents','With partner','With kids','With roommates');
	printf("<select name=Living>");
	for($i=0;$i<6;$i++)
		{
		 printf("<option value=\"" .$L[$i] . "\" ");
		 if($L[$i]==$living)
		 		printf("selected");
				
		 printf(" >".$L[$i] ."</option>");		
		}
?></select>  
 
 
	Home Town : <input name="Hometown" value="<?php echo $hometown ?>" type="text" size="35" />
	
	Webpage : <input name="Webpage"  value="<?php echo $webpage ?>" type="text" size="35" />
	
	
	About Me :				   Passion : 
	  <textarea name="Aboutme" cols="30" rows="5" wrap="virtual"><?php echo $aboutme ?></textarea>		<textarea name="Passion" cols="30" rows="5" wrap="virtual"><?php echo $passion ?></textarea>	
	
	Sports : 				   Activities :
	  <textarea name="Sports" cols="30" rows="5" wrap="virtual"><?php echo $sports ?></textarea>             <textarea name="Activities" cols="30" rows="5" wrap="virtual"><?php echo $activities ?></textarea>
	
	Books : 				   Music :
	  <textarea name="Books" cols="30" rows="5" wrap="virtual"><?php echo $books ?></textarea>		<textarea name="Music" cols="30" rows="5" wrap="virtual"><?php echo $music ?></textarea>
	
	Tv Show : 				   Movies :
	  <textarea name="Tvshow" cols="30" rows="5" wrap="virtual"><?php echo $tvshow ?></textarea>		<textarea name="Movies" cols="30" rows="5" wrap="virtual"><?php echo $movies ?></textarea>

 
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
