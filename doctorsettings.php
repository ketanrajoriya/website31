<?php
session_start();
error_reporting("Error");
mysql_connect("localhost","root","");
mysql_select_db("medicare");
//$uid = $_session['uid'];
$uid = "ketan@gmail.com";
/*$sql="select * from patient where emailid=ketan@gmail.com";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	for($i=0;$i<6;$i++)
	{
		echo"$r[$i]";
		}
		*/
		
if($_REQUEST['fset'])
{
	$firstname=$_REQUEST['fname'];
$lastname=$_REQUEST['lname'];

	$sql1="update doctor set firstname='$firstname',lastname='$lastname' where emailid='$uid'";
	$qr1=mysql_query($sql1);
	echo "name updated";
	}
	
	

if($_REQUEST['emailset'])
{
	$email=$_REQUEST['newemail'];


	$sql1="update patient set emailid='$email'where emailid='$ketan'";
	$qr1=mysql_query($sql1);
	echo "emailid updated";
	}
	
if($_REQUEST['pset'])
{
	$oldpass=$_REQUEST['oldpass'];
$newpass=$_REQUEST['newpass'];

	$sql1="update patient set password='$newpass' where emailid='$ketan'";
	$qr1=mysql_query($sql1);
	}


if($_REQUEST['mset'])
{
	$newmobileno=$_REQUEST['newmobileno'];

	$sql1="update patient set mobileno='$newmobileno' where emailid='$ketan'";
	$qr1=mysql_query($sql1);
	}
	
	if($_REQUEST['dateset'])
{
	$newdate=$_REQUEST['newdate'];

	$sql1="update patient set dateofbirth='$newdate' where emailid='$ketan'";
	$qr1=mysql_query($sql1);
	}

?>
<html>
<head>
</head>
<body>

<table border="0" width="20%" height="750px" align="center" >

<tr>
<td align="center" style="font:Verdana, Geneva, sans-serif; color:FF3F00;font-size:20px; font-weight:600" >
<h1>
Settings
</h1>
<img src="VR2.jpg" width="560px">
</td></tr>

<tr><td align="left"  style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update name</td></tr>

<tr><td align="right" style="font:Verdana, Geneva, sans-serif; color:FF3F00;"><input type="text" name="fname" placeholder=" first name"><input type="text" name="lname" placeholder=" last name"><input type="button" name="fset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px"></td></tr>


<tr><td align="left" style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update Password</td></tr>

<tr><td align="right"><input type="text" name="oldpass" placeholder=" old password"><input type="text" name="newpass" placeholder=" new password">
<input type="submit" name="pset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px" align="right"></td></tr>


<tr><td align="left"  style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update Email</td></tr>

<tr><td align="right"><input type="email" name="newemail" placeholder=" Enter your new email" width="80%"><input type="submit" name="emailset" value="Submit" width="40px" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000" align="right">
  <img src="VR2.jpg" width="560px"><br></td></tr>


<tr><td align="left" style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update Mobile No</td></tr>

<tr><td align="right"><!--<select name="ncode"><option>india</option></select>--><input type="text" name="newmobileno" placeholder=" Enter new mobile no">
<input type="submit" name="mset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px"></td></tr>


<tr><td align="left"  style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update Date of birth</td></tr>

<tr><td align="right"><input type="date" name="newdate">
<input type="submit" name="dateset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px"></td></tr>


<tr><td align="left"  style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update city</td></tr>

<tr><td align="right"><input type="text" name="newcity" placeholder=" Enter new city">
<input type="submit" name="cityset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px"></td></tr>


<!--<tr><td align="left"  style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Change Profile Pic</td></tr>

<tr><td align="right"><input type="text" name="fname" placeholder=" first name"><input type="text" name="lname" placeholder=" last name">
<input type="submit" name="fset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px"></td></tr>


<tr><td align="left"  style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Change Cover Pic</td></tr>

<tr><td align="right"><input type="text" name="fname" placeholder=" first name"><input type="text" name="lname" placeholder=" last name" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000">
<input type="submit" name="fset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px"></td></tr>
-->
</table>

</body>
</html>
