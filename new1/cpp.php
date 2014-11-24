<?php
session_start();
error_reporting('ERROR');
//$uname=$_SESSION['uname'];
$uname="ketan";
echo $uname;
$fn=$_FILES['image']['name'];
$ft=$_FILES['image']['type'];
$fs=$_FILES['image']['size']/1024;
$ftmp=$_FILES['image']['tmp_name'];
if($_REQUEST['submit'])
{
if($fs>1024)
{
echo "Max file Size only 1mb";		
}
elseif($ft!="image/jpeg")
{
echo "invalid image type only jpg";		
}
else
{
mkdir("medicare/$uname");
$od=opendir("medicare/$uname");
while($res=readdir($od))
{
unlink("medicare/$uname/$res");		
}
move_uploaded_file($ftmp,"medicare/$uname/$fn");
//header("location:home.php");

echo "profile updated";
}		
}


$od=opendir("medicare/$uname");
while($res=readdir($od))
{
if($res!="." and $res!="..")
{
$res1=$res;
}
}

$path="medicare/$uname/$res1";
$tn=file_get_contents("userdata/$uname/theme");
$path1="theme/$tn";


?>
<img src="<?php echo $path;?>" width="200" height="200" style="border-style:outset; border-width:10px; border-color:#F00; font-size:18px;">

<form method="post" enctype="multipart/form-data">
<input type="file" name="image"><input type="submit" value="submit" name="submit">
</form>