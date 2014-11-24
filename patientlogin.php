<?php
session_start();
error_reporting('ERROR');
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
//$_session['user']=$username;
$login = $_REQUEST['login'];
if($login)
{
	mysql_connect("localhost","root","");
	mysql_select_db("medicare");
	
	$sql = "select * from patient where emailid='$username'";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	/*if($r[2]==$username)	
	{
	$_SESSION['ketan']=$r[2];
		*/
	if($r[3]==$password)
	{
		$_SESSION['user']=$r[0];
		$_SESSION['ketan']=$r[2];
	
		header("location:patient.php");
	
	
	}
	else{
		
	echo "your email or password is wrong";
		
	}
	}
?>

<body>
    <table border = "0" width = "100%">
<tr><td width = "50%">
    <form >
<table align="center" height="400px" >

<tr>
<td valign="top">&nbsp;</td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>

<tr>
<td style="font-family:Verdana, Geneva, sans-serif; font-size:24px; color:FF3F00">Log In<hr width="100%"></td>
</tr>

<tr>
<td><b>username</b><br><input type="email" name="username" size="30" required="required" placeholder=" Email id" style="height:28px"></td>
</tr> 

<tr>
<td><b>password</b><br><input type="password" name="password"  size="30" required="required" placeholder=" Password" style="height:28px"></td>
</tr>

<tr>
<td><input type="submit" name="login" value="Login">&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"></td>
</tr>

<tr>
<td> <a href="patientlogin.php?goto=resetpasspatient">Can't access your account?</a></td>
</tr>

<tr>
<td>don't have <b>Medicare</b> account? <a href="patientlogin.php?goto=patientsignup"><b>createaccount here</b></a></td></tr></table>
    </form></td><td><?php  

$goto=$_REQUEST['goto'];

if($goto==patientsignup)
{
	include("patientsignup.php");
	}
	else if($goto==resetpasspatient)
	{
		include("resetpasspatient.php");
		}
	else
	{
		//echo"<img src='welcome.jpg' width='735px' height='330' border='0'>";
		}
	?>
</td></tr></table></body></html>