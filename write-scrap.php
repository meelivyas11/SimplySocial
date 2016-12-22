<?php
include("user-auth.php");
require("config.php");
$senderid = $_SESSION['ID'];
$temp=0;
$_SESSION['Count'] = $temp; 
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
    <td width="10%" height="100%" valign="top"><br/><?php include("user-option.php")?></td>
    <td width="90%" valign="top">
	<form action="send-scrap.php" method="get">
                <pre>
				
			<input type="hidden" value="<?php echo $senderid ?>" name="senderid">	
			(Seperate IDs By Comma(,))	
            To (Friends Id) : <input type="text" name="Destination" value="" size="30" /><br>
                       <br />   
            Message : (Only 150 Character messagers)
            		<textarea name="Message" wrap="virtual" cols="30" rows="5" ></textarea>

            <center><input type="submit" value="Send" name="Send" /></center>
			
                </pre>
    </form>
          	
	</td>
  </tr>
</table>
</div>

<?php include("footer.php") ?>
</body>
</html>
