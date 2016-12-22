<?php 
 $temp = $_SESSION['Count'];
 $myid = $_SESSION['ID'];
 
 $result = mysqli_query($con, "Select * from scrap where Destination='".$myid."'");
 if(mysqli_fetch_array($result)== null) 
 	{
	echo "No Scraps"; 
	header('location:'.$config_basedir.'user-home.php');
    } 
 if($temp==0)
 	{
	
	$total_num_of_rows = mysqli_num_rows($result);
	//echo "((".$total_num_of_rows."))";	
	$_SESSION['total_num_of_rows']=$total_num_of_rows;
    mysqli_data_seek($result,0);
	$times = $_SESSION['total_num_of_rows'];
	$_SESSION['current_pos']=0;
	}
 else
 	{
	
	$times = $_SESSION['total_num_of_rows'];
	$pos=$_SESSION['current_pos'];
	//echo $pos;
	//echo $times;
	if($pos==$times){echo "<br><br><br><br><br><center><h3>No More Scraps</h3></center>"; exit;};
	mysql_data_seek($result,$pos);
	 }   
?>
	 <center><h2> Scraps </h2></center>
	 <table border="2" width="100%" align="left">
			     <tr><?php
     $ic = 0;   				 
	 while($row=mysqli_fetch_array($result))
	      {
		   $rid = $row['Sender'];
		   $msg = $row['Message'];
		   $res = mysqli_query($con,"Select * from social where ID='".$rid."'");
	   if($times>=0)	
	   	   {
		   
	       while($row1=mysqli_fetch_array($res))
	        {
			 $ic++;
			 //echo $ic;
			 $rid = $row1['ID']; 
		 	 $fname = $row1['Fname'];
			 $lname = $row1['Lname'];
			 $times--;	
	    	   	//$photo = $row['Photo'];
					?>		
                    <td width="10%">    			
                    <center><img width="80" height="80"  align="middle" src="try.php?ID=<?php echo $rid?>"/></center>
                    <center><?php echo $fname." ".$lname ?></center>
                    </td>
					<td width="500" align="justify">
					  <?php echo $msg?>
					<div align="right">
					<form action="delete-scrap.php" method="get">
                        <input type="hidden" name="rid" id="rid"  value="<?php echo $rid; ?>">
						<input type="hidden" name="msg" id="msg"  value="<?php echo $msg; ?>">
                        <button name="allow" value="<?php echo $rid; echo $msg;?>" onClick="submit()">Delete</button>
                    </form></div>
                          </td>
					
					</tr>
         
        		  <?php 
			 if($ic>=5){
			 	$_SESSION['Count']=$ic;
				$_SESSION['current_pos']= $_SESSION['current_pos'] + $ic;
				?><div align='right'><br/><a href='view-more-scraps.php'>View More</a><br/></div>
				 	 <?php  exit;
						 
			       }		  
			  }
	      }
		}  			
	?>			









