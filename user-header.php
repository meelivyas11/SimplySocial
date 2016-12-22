<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
require("config.php");
$temp=0;
//session_start();
$_SESSION['Cnt'] = $temp; 
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php $config_blogname ?> </title>
</head>

<body>
<?php include("site-title.php") ?>

<pre><form action="search-friend.php" method="get"><?php if(!strcmp($_SESSION['Access'],"Admin")) echo "<a href='admin-approve.php'>Entries</a> | "; ?><a href='user-home.php'>Home</a> | <a href="profile-view-social.php">Profile</a> | <a href="pen-fnd-req.php">Pending Request</a> | <a href="view-scraps.php">Scraps</a> | <a href="logout.php">Logout</a> | Search : <input name="Search" type="text" size="20" /> <input name="Go" type="submit" value="Go" /></form></pre>
</body>
</html>
