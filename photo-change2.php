
<?php 
include("user-auth.php");
require("config.php");
$id = $_SESSION['ID'];

$xyz = $_FILES['file'];

$imgfile_name =$_FILES['file']['name'];
$pext = getFileExtension($imgfile_name);
$pext = strtolower($pext);
if (($pext != "jpg")  && ($pext != "jpeg"))
    {
        print "<h1>ERROR</h1>Image Extension Unknown.<br>";
        print "<p>Please upload only a JPEG image with the extension .jpg or .jpeg ONLY<br><br>";
        print "The file you uploaded had the following extension: $pext</p>\n";
		print "<a href='photo-change.php?counter=0'>Back</a>";
        exit();
    }
	 function getFileExtension($str) {

		//strrpos($str,.);
        $i = strrpos($str,'.');
        if (!$i) { return ""; }

        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
		
        return $ext;
    }

$imgfile = $_FILES['file']['tmp_name'];
/*== only resize if the image is larger than 250 x 200 ==*/
    $imgsize =  getimagesize($imgfile);
	//echo $imgsize[0] ."x".$imgsize[1];
	
	
    /*== check size  0=width, 1=height ==*/
    if (($imgsize[0] > 67) || ($imgsize[1] > 50)) 
    {
	$oldimg = imagecreatefromjpeg($imgfile);
	$newimg = imagecreatetruecolor(67,50);
	
	$target_pic = imagecopyresampled($newimg,$oldimg,0,0,0,0,67,50,$imgsize[0],$imgsize[1]);
	$compression = ($_FILES['file']['size'])/280;
	imagejpeg($newimg,$imgfile,$compression);
    }
	
	$imgsize =  getimagesize($imgfile);

move_uploaded_file($_FILES['file']['tmp_name'],"./images/latest.img");
$instr = fopen("./images/latest.img","rb");
$image = addslashes(fread($instr,filesize("./images/latest.img")));

$title  = $_REQUEST['whatsit'];
$result = mysqli_query($con,"UPDATE personal SET title='".$title."',image ='".$image."' where ID ='".$id."'");

if($result > 0) header('location:'.$config_basedir.'user-home.php');
else
	{
	 print "<h1>ERROR</h1>Image Extension Unknown.<br>";
     print "<p>Please upload only a JPEG image with the extension .jpg or .jpeg ONLY<br><br>";
     print "The file you uploaded had the following extension: $pext</p>\n";
     print "<a href='photo-change.php?counter=0'>Back</a>";
     exit();

	
	}
    


?>
