<?php
session_start();
$fuid=$_SESSION['fuid'];
include("Include_MColor.php");
?>

<?php
$NewPassword=$_REQUEST['NewPassword'];
$NewPassword2=$_REQUEST['NewPassword2'];
if($_REQUEST['Reset_Password'])
{
	if($NewPassword==$NewPassword2)
	{
		$Open_Mails_Dir=opendir("Userdata/$fuid/User_Info/Encrypted/Password");
		while($Read_Mails=readdir($Open_Mails_Dir))
		{
			if($Read_Mails!="." && $Read_Mails!="..")
			{
				$echo_Read_Pass="$Read_Mails";
				//echo $echo_Read_Pass;
				$echofp=("Password sucessfully changed.");
				rename("Userdata/$fuid/User_Info/Encrypted/Password/$echo_Read_Pass","Userdata/$fuid/User_Info/Encrypted/Password/$NewPassword");
				}}
				//mkdir("Userdata/$fuid/User_Info/Encrypted/Password/$NewPassword");
				}
				else
				{
					$echofp= "These passwords don't match. Try again.";
					}
					}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="Images/SR_Logo.jpg" />
<title>ShopCircle -Start your own business</title>
</head>

<body>
<?php include("Include_Main1.php");?>

<table width="100%" border="0" cellspacing="0" height="100%">

<tr height="10px"><td colspan="3" width="1000px"><center>&nbsp;</center></td></tr>

<tr><td width="100%" height="480px" colspan="3">
<table align="center">
<form method="post">
<tr><td align="center"><font color="#FF0000"><?php echo $echofp; ?></font></td></tr>
<tr><td >
<h2><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$mButton_Color;?>">Reset Password <a href="Index.php"><input type="button" value="Log in to existing account" name="ReLogIn" style="background-color:<?php echo "#".$mButton_Color;?>; color:#FFFFFF; font-size:12px; font-weight:600"/></a>
</font></h2><hr /></td></tr>
<td><input type="Password" name="NewPassword" required="required" placeholder=" New Password" size="43" style="height:22px" />
</td>
</tr>
<tr>
<td><input type="Password" name="NewPassword2" required="required" placeholder=" Retype New Password" size="43" style="height:22px" />
</td>
</tr>

<tr>
<td><input type="submit" style="background-color:<?php echo "#".$mButton_Color;?>; color:#FFF; font-size:14px;font-weight:600" name="Reset_Password" value="Change Password" /></td>
</tr></form></table></td></tr>

<tr height="10px"><td colspan="3" width="1000px" height="20px">&nbsp;</td></tr>
  
<?php include("Include_Main2.php");?>

</body>
</html>