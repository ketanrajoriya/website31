<?php
error_reporting('ERROR');
session_start();
$email=$_REQUEST['email'];
$newpassword=$_REQUEST['newpassword'];
$confirmpassword=$_REQUEST['confirmpassword'];
$mobileno=$_REQUEST['mobileno'];
$date=$_REQUEST['date'];

mysql_connect("localhost","root","");
mysql_select_db("medicare");
$sql="select * from doctor where emailid='$email'";
$qr=mysql_query($sql);
$r=mysql_fetch_array($qr);
if($_REQUEST['change'])
{
if($r[2]==$email)
{
	if($newpassword==$confirmpassword)
	{
		if($mobileno==$r[8])
		{
			if($date==$r[10])
			{
				$sql1="update doctor set password='$newpassword',confirmpassword='$confirmpassword' where emailid='$email'";
				$qr1=mysql_query($sql1);
				echo"your pasword is changed";
				}
				else{echo"no update";}
		}
		else{echo"your date of birth is wrong";}
		}
		else {echo"your mobile no is wrong";}
		}
		else{echo"your password didn't match";}
        }
?>
<html>
<head>
<title>resetpassword</title></head>
<body>
<form method="post"><table align="center" height="400px">
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>

<tr><td style="color:FF3F00; font-family:Verdana, Geneva, sans-serif; font-size:20px">Forgot Password<hr width="300px"></td></tr>

<tr><td><input type="email" name="email" placeholder=" Your Email" size="30" style="height:29px" required="required"></td></tr>

<tr><td><input type="password" name="newpassword" placeholder=" New Password" size="30" style="height:29px" required="required"></td></tr>

<tr><td><input type="password" name="confirmpassword" placeholder=" Confirm Password" size="30" style="height:29px" required="required"></td></tr>

<tr><td><select name="national_code">
<option value="+91">+91-india</option></select>

<input type="text" pattern="[0-9]{10}" placeholder=" Your Mobile No" style="height:29px" size="16" name="mobileno"></td></tr>

<tr><td> D.O.B:- &nbsp;&nbsp;<input type="date" name="date"></td></tr>

<tr><td><input type="submit" name="change" value="change">&nbsp;&nbsp;&nbsp;&nbsp; <input type="reset" name="reset" value="reset"></td></tr></table></form></body></html>