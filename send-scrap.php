<?php
include("user-auth.php");
require("config.php");
$text="";
$desti = $_REQUEST['Destination'];

$msg = $_REQUEST['Message'];

$senderid = $_REQUEST['senderid'];

$destiid = strtok($desti,',');
while($destiid !== false)
	{
	 $sql= "INSERT INTO scrap VALUES ('".$senderid."','".$destiid."','".$msg."')";
    if(mysqli_query($con,$sql)){$flag =true ;}
	else
	   {
	    $text = "<center><h2> WE TRIED HARD TO SEND YOUR MESSAGE TO ".$destiid."</h2></center>
		<center><h3>But Due To Incorect Id Its Not Possible </h3></center>
        <center><h2>PLEASE CHECK THE EMAIL ID!!</h2></center><br><br><br><br><a href='user-home.php'>Back</a>";
	   
	   }
		
	$destiid = strtok(',');
	}
if($flag ==true) $text = "<br><br><br><br><br><br><br><center><h2> MESSAGES ARE SENT SUCCESSFULLY  </h2></center>
		<center><h3>To All The Friends</h3></center>
        <center><h2>THANKS!!</h2></center><br><br><br><a href='user-home.php'>Back</a>";

 echo $text;
?>