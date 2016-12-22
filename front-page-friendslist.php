<?php
 require("config.php"); 
 $temp = $_SESSION['Count'];
 $id = $_SESSION['ID'];
 //echo $temp ;
 //echo $id;
 //echo "The Value of temp :".$temp;
 $times=0;
 
 if($temp==0)
 	{
	$result = mysqli_query($con, "Select ID , SearchID from friend where (ID='" .$id. "' or SearchID='" .$id. "') and Status='Active'") or die(mysqli_error($con));
 
    if(mysqli_fetch_array($result)== false) {echo "<br><br><br><br><br><center><h3>  </h3></center>"; exit;} 
	
	$total_num_of_rows = mysqli_num_rows($result);
	//echo "((".$total_num_of_rows."))";	
	$_SESSION['total_num_of_rows']=$total_num_of_rows;
    mysqli_data_seek($result,0);
	$times = $_SESSION['total_num_of_rows'];
	
	$_SESSION['current_pos']=0;
	}
 else
 	{
	
	$result = mysqli_query($con, "Select ID , SearchID from friend where (ID='" .$id. "' or SearchID='" .$id. "') and Status='Active'") or die(mysqli_error($con));
 
	//$crow= $_SESSION["current_row_no"]; 
	
	$times = $_SESSION['total_num_of_rows'];
	$pos=$_SESSION['current_pos'];
	mysqli_data_seek($result,$pos);
	 }   
?>
	<pre><table border="0"align="right" cellspacing="0" cellpadding="0">
    <tr><td valign="middle" align="center"><h3><center>Friends List</center></h3></td></tr><tr><?php 
 $ec=0;
 $times = $_SESSION['total_num_of_rows']; 
 if($times >= 0) 
			{
			 $ic=0; 	 
			 while($row= mysqli_fetch_array($result))	 	
			 	{ 
				  $ic++;$ec++;
				    
				  $L1 = $row['ID'];
				  $L2 = $row['SearchID'];
				  
				  if ($L1==$id)$fid = $L2;
                  else if ($L2=$id) $fid = $L1;
                  
				  $res = mysqli_query($con, "Select * from social where ID='".$fid."'");
    		      if($row1=mysqli_fetch_array($res))
       					 {
							$fid = $row1['ID']; 
	 						$fname = $row1['Fname'];
					        $lname = $row1['Lname'];
						   	//$photo = $row['Photo'];
				?><td align="center" valign="top">
                    <center><img align="middle"  width="100" height="100"src="get-profile-pic.php?ID=<?php echo $fid?>"/></center>     
					<center><?php echo $fname ." ." . $lname?></center>
                    <center><?php echo $fid?></center></td>
					<?php
				 	  	 }
				 $times--;
				 $_SESSION['total_num_of_rows']=$times; 	   		 
				  if($ic >=2) {printf("<br/>"); $ic=0; printf("</tr><tr>"); }		  	
				  if($ec>=4)
				       {
					  	 $_SESSION['Count']=$ec;
						 $_SESSION['current_pos']= $_SESSION['current_pos'] + $ec;
						 printf("<div align='right'><a href='view-all-frnd.php'>View More</a><br/></div>");
						 printf("</tr></table></pre>");
							 ?>
						
						<?php break;
					}
				 
				}
			}	  
				
	?>			
