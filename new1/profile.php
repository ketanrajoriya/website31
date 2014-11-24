<?php
error_reporting('ERROR');
session_start();
$uname=$_SESSION['uname'];
/*if($_SESSION['uname']=="")
{
header("location:index.php");		
}*/
//echo $uname;
$od=opendir("profilepic/$uname");
while($res=readdir($od))
{
if($res!="." and $res!="..")
{
$res1=$res;
}
}

$path="profilepic/$uname/$res1";
$tn=file_get_contents("userdata/$uname/them");
$path1="theme/$tn";
?>
<html>
<head>
<style>
a{ font-size:24px;
color:#000;
text-decoration:none;	
}
table
{
	border-radius:5px;
	width:100%;
}
</style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<table width="80%" border="1" height="600" bgcolor="#FF99CC" align="center" background="<?php echo $path1;?>">
 
  <tr>
    <td colspan="2" height="100" background="Gwalior-fort-in-night.jpg" style="font-size:30px;color:#FFF;font-style:italic;"></td>  
  </tr>
 
  <tr><td colspan="2" height="50" bgcolor="# 00FFFF"style="font-size:24px; " align="left">
    
    <table border="0" width="100%">
    <tr><td style="font-size:40px; font-family:chiller; color:#900">
   Welcome:<?php echo $uname;?></td>
   <td align="right"><a href='logout.php'>Logout</a></td></tr></table></td></tr><tr><td  height="400" width="15%" valign="top"><img src="<?php echo $path;?>" width="200" height="200" style="border-style:outset; border-width:10px; border-color:#F00; font-size:18px;"><br/>
    <a href="home.php?conpage=cpp">Change Profile Pic</a><br/><a href="home.php?conpage=ct">Change Theme</a><br/>
<a href="home.php?conpage=ad">Add Pic</a><br/><a href="home.php?conpage=sp">Show Pic</a><br/></td><td valign="top">    
<?php
$conpage=$_REQUEST['conpage'];
//echo $conpage;
	if($conpage=='cpp')
	{
	include('cpp.php');
	}
	if($conpage=='ct')
	{
	include('ct.php');
	}
	if($conpage=='ad')
	{
	include('ad.php');
	}
	if($conpage=='sp')
	{
	include('sp.php');
	}
?></td></tr>
<tr><td colspan="2" align="center" style="font-size:24px; font-style:italic;">Copy Right @ Dcmpny Group</td></tr></table></form></body></html>