<?php
session_start();
error_reporting("Error");
mysql_connect("localhost","root","");
mysql_select_db("medicare");
$uid=$_SESSION['uid']; 
 

//echo"bye $uid";
$ketan=$uid;
//echo"hello $ketan";

if($_REQUEST['fset'])
{
	$firstname=$_REQUEST['fname'];
	echo"$firstname";
$lastname=$_REQUEST['lname'];

	$sql1="update patient set firstname='$firstname',lastname='$lastname' where emailid='$uid'";
	$qr1=mysql_query($sql1);
	echo "name updated";
	}
	
	if($_REQUEST['skset'])
{
	$newskype=$_REQUEST['newsky'];
//echo "you entered $newregno";
	$sql1="update patient set skypeid='$newskype'  where emailid='$ketan'";
	$qr1=mysql_query($sql1);
	//echo "you entered $qr1";
	
	echo "Skype id  updated";
	}

if($_REQUEST['emailset'])
{
	$email=$_REQUEST['newemail'];


	$sql1="update patient set emailid='$email' where emailid='$ketan'";
	$qr1=mysql_query($sql1);
	echo "emailid updated";
	}
	
if($_REQUEST['pset'])
{
	$oldpass=$_REQUEST['oldpass'];
$newpass=$_REQUEST['newpass'];

	$sql1="update patient set password='$newpass' where emailid='$ketan'";
	$qr1=mysql_query($sql1);
	echo "password updated";
	}


if($_REQUEST['mset'])
{
	$newmobileno=$_REQUEST['newmobileno'];

	$sql1="update patient set mobileno='$newmobileno'  where emailid='$ketan'";
	$qr1=mysql_query($sql1);
	echo "mobile number updated";
	}
	
	if($_REQUEST['dateset'])
{
	$newdate=$_REQUEST['newdate'];

	$sql1="update patient set dateofbirth='$newdate' where emailid='$ketan'";
	$qr1=mysql_query($sql1);
	echo "date of birth updated";
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
<a href="patient.php">home page</a>
</td></tr>

<tr><td align="left"  style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update name</td></tr>

<form><tr>
  <td align="right" style="font:Verdana, Geneva, sans-serif; color:FF3F00;"><input type="text" name="fname" placeholder=" first name"><input type="text" name="lname" placeholder=" last name" required><input type="submit" name="fset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px"></td></tr>
</form>

<tr><td align="left" style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update Password</td></tr>
<form>

<tr>
  <td align="right"><input type="password" name="newpass" placeholder=" new password">
<input type="submit" name="pset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px" align="right"></td></tr>
</form>

<tr><td align="left"  style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update Email</td></tr>
<form>
<tr><td align="right"><input type="email" name="newemail" placeholder=" Enter your new email" width="80%"><input type="submit" name="emailset" value="Submit" width="40px" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000" align="right">
  <img src="VR2.jpg" width="560px"><br></td></tr>

</form>
<tr><td align="left" style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update Mobile No</td></tr>
<form>
<tr><td align="right"><!--<select name="ncode"><option>india</option></select>--><input type="text" name="newmobileno" placeholder=" Enter new mobile no">
<input type="submit" name="mset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px"></td></tr>

</form>
<tr><td align="left" style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update Skype id</td></tr>
<form>

<tr>
  <td align="right"><input type="text" name="newsky" placeholder=" new skype id">
<input type="submit" name="skset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px" align="right"></td></tr>
</form>

<tr><td align="left"  style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update Date of birth</td></tr>
<form>
<tr><td align="right"><input type="date" name="newdate">
<input type="submit" name="dateset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px"></td></tr>

</form>
<tr>
  <td align="left"  style="font:Verdana, Geneva, sans-serif; color:FF3F00; font-weight:700; font-size:20px"> Update Country</td></tr>
<form>
<tr><td align="right"><input type="text" name="newcity" placeholder=" Enter new city">
<input type="submit" name="cityset" value="Submit" style="font:Verdana, Geneva, sans-serif; font-size:15px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:22px; background-color:#CCC; color:#000"><br>
<img src="VR2.jpg" width="560px"></td></tr>
</form>

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
