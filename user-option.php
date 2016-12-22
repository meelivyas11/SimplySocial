<?php
require("config.php");
$id = $_SESSION['ID'];
//echo $id;
/*
$con=mysql_connect("localhost","root","");
mysql_select_db("social-network",$con);
$result = mysql_query("Select * from personal where ID='vyas'");
header("Content-type:image/jpeg");
if($row=mysql_fetch_array($result))
        {
		 print $row['image'];
		}*/

		 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="style.css" rel="stylesheet" type="text/css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php $config_blogname ?> </title>

<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="ddsmoothmenu-v.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
</head>

<body>

<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<!--<br style="clear: left" />
-->
</div>



<center>
<br/>
<img width="100" height="100"  align="middle" src="get-profile-pic.php?ID=<?php echo $id?>"/>
<a href='photo-change.php?counter=0'>Change</a><br/><br/><br/>
<div id="smoothmenu2" class="ddsmoothmenu-v">
<ul>
<li><a href="#">Profile</a>
  <ul>
  <li><a href="profile-view-social.php">View Profile</a></li>
  <li><a href='profile-general.php?counter=0' >Edit Profile</a></li>
  </ul>
</li>
<li><a href="user-home.php">Friends List</a>
  
</li>
<li><a href="#">Scraps</a>
  <ul>
  <li><a href="view-scraps.php">View Scraps</a></li>
  <li><a href="write-scrap.php">Write Scraps</a>
  </li>
  </ul>
</li>
<!--
<li><a href="http://www.dynamicdrive.com/style/">Testimonials</a></li>
<li><a href="http://www.dynamicdrive.com/style/">My Photos</a></li>
-->
</ul>

<br style="clear: left" />
</div>
</center>
</body>
</html>




