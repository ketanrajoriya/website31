<?php
session_start();
$fuid=$_SESSION['fuid'];
error_reporting('ERROR');
?>

<?php
include("Include_MColor.php");
?>

<?php
$Month_Array=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$City_Array=array("Gwalior","Indore","Bhopal","Jabalpur","Katni");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="Images/SR_Logo.jpg" />
<title>Reset Password -ShopCircle</title>
</head>

<body>
<table align="center" border="0" width="410px" height="">

<form name="Reset_Password" method="post">

<tr><td >
<h2><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$mButton_Color;?>">Forgot Password 
<a href="Index.php"><input type="button" value="Log in to existing account" name="ReLogIn" style="background-color:<?php echo "#".$mButton_Color;?>; color:#FFFFFF; font-size:12px; font-weight:600"/></a>
</font></h2><hr /></td></tr>

<tr><td ><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="#FF0000"><?php echo "$Error_Sign_Up"; ?></font></td></tr>

<tr><td ><input type="text" name="FUser_Name" required="required" placeholder=" User Name" size="43" style="height:22px" /></td></tr>

<tr><td ><input type="Email" name="FEmail" required="required" placeholder=" Your Email (someone@example.com)" size="43" style="height:22px" /></td></tr>

<tr><td ><select name="FNational_Code">
<option value="+91">India +91</option>
</select>
<input type="text" name="FMobile_No" required="required" placeholder=" Your Mobile Number"  pattern="[0-9]{10}" size="28" maxlength="10" style="height:22px" /></td></tr>

<tr><td >Birthday :<br />
<select name="FYear"><option value="-1">Year:</option>
<?php
for($i=2013-13; $i>=1900; $i--)
{
	echo "<option value='$i'>$i</option>";
	}
?>
</select>

<select name="FMonth" ><option value="-1" >Month:</option>
<?php
for($i=0; $i<=count($Month_Array)-1; $i++)
{
	echo "<option value='$Month_Array[$i]'>$Month_Array[$i]</option>";
	}
?>
</select>

<select name="FDate"><option value="-1">Date:</option>
<?php
for($i=1; $i<=31; $i++)
{
	echo "<option value='$i'>$i</option>";
	}
?>
</select>
</td></tr>

<tr><td ><input type="submit" style="background-color:<?php echo "#".$mButton_Color;?>; color:#FFF; font-size:14px;font-weight:600" name="FGo" value="Go" /> <input type="reset" style="background-color:<?php echo "#".$mButton_Color;?>; color:#FFF; font-size:14px;font-weight:600" /></td></tr>

</form>
</table>

</body>
</html>