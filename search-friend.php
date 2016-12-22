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
 $temp = $_SESSION['Cnt'];
 //echo "The Value of temp :".$temp;
 $times=0;
 
 if($temp==0)
 	{
	$search = $_REQUEST['Search'];
	$_SESSION['Search']=$search;
    $result = mysqli_query($con, "Select * from social where ID='".$search."' or Fname='".$search."' or Lname='".$search."'");
 
    if(mysqli_fetch_array($result)== false) {header('location:'.$config_basedir.'user-home.php');} 
	$total_num_of_rows = mysqli_num_rows($result);
	//echo "((".$total_num_of_rows."))";	
	$_SESSION['total_num_of_rows']=$total_num_of_rows;
    mysqli_data_seek($result,0);
	$times = $_SESSION['total_num_of_rows'];
	//$crow = 0;
	$_SESSION['current_pos']=0;
	}
 else
 	{
	$search =$_SESSION['Search'];
	$result = mysqli_query($con, "Select * from social where ID='".$search."' or Fname='".$search."' or Lname='".$search."'");
 
	//$crow= $_SESSION["current_row_no"]; 
	
	$times = $_SESSION['total_num_of_rows'];
	$pos=$_SESSION['current_pos'];
	mysqli_data_seek($result,$pos);
	 }   
	 
 $xyz=0; 	 
 $times = $_SESSION['total_num_of_rows']; 
 //echo $xyz;
 if($times >= 0) 
			{
			 while($row= mysqli_fetch_array($result))	 	
			 	{
				 if($xyz > 3) 
				        {
						 //echo $xyz;
						 $_SESSION['current']=$xyz;
						 $_SESSION['Cnt']=$xyz;
						 $_SESSION['current_pos']= $_SESSION['current_pos'] + $xyz; 
						 //echo "Round ".$_SESSION['Count'];
						 ?>
						<div align="right"><br/><br/><br/><br/><br/> <a href="search-friend.php"> View More </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>			 				 		<?php break;
						}
				 $id = $row['ID'];
				 $fname = $row['Fname'];
				 $lname = $row['Lname'];
				 //$photo = $row['Photo'];
				 //echo $id;
				 $xyz++
	?>		
    			<table border="2" align="left">
			     <td align="center">
			        <center><img width="125" height="100"  align="middle" src="try.php?ID=<?php echo $id?>"/></center>
			        <center><?php echo $fname."."?> <?php  echo $lname ?></center>
			        <center><?php  echo $id?></center>
		
			        <form action="user-addfriend.php" method="get">
		               <input type="hidden" name="sid" id="sid" value="<?php echo $id ?>">
		               <button name="Addfriend" value="<?php $id ?>" onclick="submit()">Add Friend</button>
			        </form>
			      </td>
			    </table>

    <?php 
				$times--;
				$_SESSION['total_num_of_rows']=$times; 
	          }
	    }
	 else
	 {
	  echo "timeup";
	  header('location:'.$config_basedir.'user-home.php');
	 }
	?>
	</td>
  </tr>
</table>
</div>
<?php include("footer.php") ?>
</body>
</html>
