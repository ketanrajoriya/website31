<?php
session_start();
error_reporting("ERROR");
//$uname=$_SESSION['uname'];
$uname="ketanraj";
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
//elseif($ft!="image/jpg")
//{
//echo "invalid image type only jpg";		
//}
else
{
mkdir("Medicare");
mkdir("Medicare/addpic");
mkdir("Medicare/addpic/$uname");
$od=opendir("Medicare/addpic/$uname");
while($res=readdir($od))
{
touch("Medicare/addpic/$uname");		
}
move_uploaded_file($ftmp,"Medicare/addpic/$uname/$fn");
//header("location:home.php");
echo"pic added";
}		
}
?>
<form method="post" enctype="multipart/form-data">
<input type="file" name="image" value="browse"><input type="submit" value="submit" name="submit">
</form>