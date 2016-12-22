<?php
session_start();
if(!strcmp($_SESSION['Access'],"User") && !strcmp($_SESSION['Access'],"Admin"))	 {
header('location:'.$config_basedir.'index.php');
}
?>
