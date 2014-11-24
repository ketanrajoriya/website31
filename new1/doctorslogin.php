
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
		
		header("location:patienthome.php");
	
	echo "your logged in";
	
	}
	
	else 
	{
		//echo "your num";
		//echo "$password";
		//echo "$r[4]";
		
	
	echo "your password is wrong";
	}
	//echo "your emailid is wrong";
}
?>

<form>
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
<td><input type="submit" name="login" value="Login">&nbsp;&nbsp;&nbsp; <a href="index.php?goto=signup3"><input type="button" name="button" value="SignUp"></a></td>
</tr>

<tr>
<td> <a href="resetpassdoctor.php">Can't access your account?</a></td>
</tr>

<tr>
<td>don't have <b>Medicare</b> account? <a href="index.php?goto=signup3"><b>create account here</b></a></td></tr></table>
</form>