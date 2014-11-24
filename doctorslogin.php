

<?php
session_start();
error_reporting('ERROR');
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$login = $_REQUEST['login'];

mysql_connect("localhost","root","");
mysql_select_db("medicare");

$sql="select * from doctor where emailid = '$username' ";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	
if($login)
{
	if($r[4]==$password)
	{
		$_SESSION['user']=$r[2];
	
		$_SESSION['usernam']=$r[0];
        
		
		header("location:doct.php");
	
	echo "your logged in";
	
	}
	
	else 
	{
		//echo "your num";
		//echo "$password";
		//echo "$r[4]";
		
	
	echo "incorrect email id or password";
	}
	
}
?>

<table border = "0" width = "100%">
<tr><td width = "50%">
<form>
<table  height="400px" border = "0" align="center" >
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
<td><input type="submit" name="login" value="Login">&nbsp;&nbsp;&nbsp; <a href="doctorslogin.php?goto=doctorsignup"><input type="button" name="button" value="SignUp"></a></td>
</tr>

<tr>
<td> <a href="doctorslogin.php?goto=resetpassdoctor">Can't access your account?</a></td>
</tr>

<tr>
<td>don't have <b>Medicare</b> account? <a href="doctorslogin.php?goto=doctorsignup"><b>create account here</b></a></td></tr></table>
</td></form><td><?php  

$goto=$_REQUEST['goto'];

if($goto==doctorsignup)
{
	include("doctorsignup.php");
	}
	else if($goto==resetpassdoctor)
	{
		include("resetpassdoctor.php");
		}
	else
	{
		//echo"<img src='welcome.jpg' width='735px' height='330' border='0'>";
		}
	?>
</td></tr></table>

