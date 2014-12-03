<?php 
session_start();
error_reporting('ERROR');
session_unset($_REQUEST['uid']);
?>
<?php
include("Include_MColor.php");
?>

<?php 
$User_Name=$_REQUEST['User_Name'];
$Password=$_REQUEST['Password'];
$First_Name=$_REQUEST['First_Name'];
$Last_Name=$_REQUEST['Last_Name'];
$User_Name=$_REQUEST['User_Name'];
$Email=$_REQUEST['Email'];
$Password=$_REQUEST['Password'];
$National_Code=$_REQUEST['National_Code'];
$Mobile_No=$_REQUEST['Mobile_No'];
$Year=$_REQUEST['Year'];
$Month=$_REQUEST['Month'];
$Date=$_REQUEST['Date'];
$Sex=$_REQUEST['Sex'];
$City=$_REQUEST['City'];
$Address=$_REQUEST['Address'];
$Profile_Pic=$_REQUEST['Profile_Pic'];
$Sign_Up=$_REQUEST['Sign_Up'];
$fname=$_FILES['Profile_Pic']['name'];
$fsize=$_FILES['Profile_Pic']['size']/1024;
$ftype=$_FILES['Profile_Pic']['type'];
$ftmpname=$_FILES['Profile_Pic']['tmp_name'];
$error=$_FILES['Profile_Pic']['error'];

$cfname=$_FILES['Cover_Pic']['name'];
$cfsize=$_FILES['Cover_Pic']['size']/1024;
$cftype=$_FILES['Cover_Pic']['type'];
$cftmpname=$_FILES['Cover_Pic']['tmp_name'];
$cerror=$_FILES['Cover_Pic']['error'];

if($_REQUEST['Log_In'])
{
	if (file_exists("Userdata/$User_Name") && file_exists("Userdata/$User_Name/User_Info/Encrypted/Password/$Password"))
	{
		 $_SESSION['uid']=$User_Name;
		 header("location:Inbox.php");
		}
		else
		{
			$Msg= "The email address or password is incorrect.<br /> Please try again. Medicare passwords are<br /> case sensitive (check your CAPS lock key).<br /><br /> <a href='Index.php?goto=Reset_Password' style='text-decoration:none' >You can reset your password here.</a><br />";
			}
	}
	
?>

<?php
if($_REQUEST['Sign_Up'])
{
	if($_REQUEST['City']=="-1")
	{
		$Error="Select City";
	}
	elseif (file_exists("Userdata/$User_Name") or file_exists("Userdata/Check_UserName_Email_PhNo/Email_ID/$Email") or file_exists("Userdata/Check_UserName_Email_PhNo/Mobile_No/$Mobile_No") or file_exists("Userdata/Check_UserName_Email_PhNo/User_Name/$User_Name"))
	{
		$Error_Sign_Up="Sorry, it looks like $User_Name or $Email or $Mobile_No belongs to an existing account.";
		}
		else
		{
			mkdir("Userdata");
			mkdir("Userdata/$User_Name");
			mkdir("Userdata/$User_Name/User_Info");
			mkdir("Userdata/$User_Name/User_Info/First_Last Name");
			mkdir("Userdata/$User_Name/User_Info/First_Last Name/$First_Name $Last_Name");
	
			mkdir("Userdata/Check_UserName_Email_PhNo");
			mkdir("Userdata/Check_UserName_Email_PhNo/User_Name");
			mkdir("Userdata/Check_UserName_Email_PhNo/User_Name/$User_Name");

			mkdir("Userdata/Check_UserName_Email_PhNo/Mobile_No");
			mkdir("Userdata/Check_UserName_Email_PhNo/Mobile_No/$National_Code-$Mobile_No");

			mkdir("Userdata/Check_UserName_Email_PhNo/Email_ID");
			mkdir("Userdata/Check_UserName_Email_PhNo/Email_ID/$Email");

			mkdir("Userdata/$User_Name/User_Info");
			mkdir("Userdata/$User_Name/User_Info/Encrypted");
			mkdir("Userdata/$User_Name/User_Info/Encrypted/Email_ID");
			mkdir("Userdata/$User_Name/User_Info/Encrypted/Email_ID/$Email");

			mkdir("Userdata/$User_Name/User_Info/Encrypted/Password");
			mkdir("Userdata/$User_Name/User_Info/Encrypted/Password/$Password");

			mkdir("Userdata/$User_Name/User_Info/Encrypted/Mobile_No");
			mkdir("Userdata/$User_Name/User_Info/Encrypted/Mobile_No/$National_Code-$Mobile_No");

			mkdir("Userdata/$User_Name/User_Info/DOB");
			mkdir("Userdata/$User_Name/User_Info/DOB/$Month.$Date.$Year");

			mkdir("Userdata/$User_Name/User_Info/Sex");
			mkdir("Userdata/$User_Name/User_Info/Sex/$Sex");

			mkdir("Userdata/$User_Name/User_Info/City");
			mkdir("Userdata/$User_Name/User_Info/City/$City");

			mkdir("Userdata/$User_Name/User_Info/Address");
			mkdir("Userdata/$User_Name/User_Info/Address/$Address");

			mkdir("Userdata/$User_Name/ShopRun");
			mkdir("Userdata/$User_Name/ShopRun/Inbox");
			mkdir("Userdata/$User_Name/ShopRun/Drafts");
			mkdir("Userdata/$User_Name/ShopRun/Sent");
			mkdir("Userdata/$User_Name/ShopRun/Deleted");
			mkdir("Userdata/$User_Name/ShopRun/New Mail");
			mkdir("Userdata/$User_Name/ShopRun/Theme");
			mkdir("Userdata/Theme");
			mkdir("Userdata/$User_Name/Album");
			mkdir("Userdata/$User_Name/Album/Cover_Pics");
			mkdir("Userdata/$User_Name/Album/Profile_Pics");			
			
			header("location:Index.php");

			$Msg_Sign_Up= "<b>Welcome to <font color='#0065CA'>Medicare</font><font color='#F87217'> $First_Name $Last_Name !!</font></b>";
			
			}
			move_uploaded_file("$ftmpname","Userdata/$User_Name/Album/Profile_Pics/$fname");
			move_uploaded_file("$cftmpname","Userdata/$User_Name/Album/Cover_Pics/$cfname");
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

<table width="100%" border="0" cellspacing="0">
  
<tr height="10px"><td colspan="3" width="1000px"><center><?php echo $Msg_Sign_Up; ?></center></td></tr>
  
<tr height="480px" ><td align="center" width="530px" height="480px">
<?php 
$FUser_Name=$_REQUEST['FUser_Name'];
$FEmail=$_REQUEST['FEmail'];
$FNational_Code=$_REQUEST['FNational_Code'];
$FMobile_No=$_REQUEST['FMobile_No'];
$FYear=$_REQUEST['FYear'];
$FMonth=$_REQUEST['FMonth'];
$FDate=$_REQUEST['FDate'];
$FGo=$_REQUEST['FGo'];
if($_REQUEST['FGo'])
{
	if (file_exists("Userdata/$FUser_Name") && file_exists("Userdata/$FUser_Name/User_Info/Encrypted/Email_ID/$FEmail") && file_exists("Userdata/$FUser_Name/User_Info/Encrypted/Mobile_No/$FNational_Code-$FMobile_No") && file_exists("Userdata/$FUser_Name/User_Info/DOB/$FMonth.$FDate.$FYear"))
	{
		$_SESSION['fuid']=$FUser_Name;
		header("location:Forgot_Password.php");
		}
		else
		{
			echo "<font color='#FF0000'><b>No Search Results</b><br />Your search did not return any results.<br /> Please try again with other information.</font>";
			}
	}

?>

<?php  
$goto=$_REQUEST['goto'];
if($goto==Sign_Up)
{
	include("Sign_Up.php");
	}
	elseif($goto==Reset_Password)
	{
		include("Reset_Password.php");
		}
		elseif($goto==Change_Themes)
		{
			header("location:MChange_Themes.php");
			}
			else
			{
				echo "<img src='Images/SR_Logo.jpg' width='300px' height='300px'/>";
				}
?>
</td>
        
<td align="center" width="5px" height="480"><img src="Images/VR.jpg" width="5px" height="450px"/></td>
    
<td align="center" width="465px" height="480px"><center>


<form method="post">


<table border="0">
    
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td width="45px"><font style="font-family:Verdana, Geneva, sans-serif; font-size:22px" color="<?php echo "#".$mButton_Color;?>"> Log In </font><hr /></td></tr>
  
<tr><td><strong>&nbsp;Username</strong></td></tr>
  
<tr><td><input type="text" name="User_Name" required="required" placeholder=" Username" size="40" style="height:24px"/></td></tr>
  
<tr><td><strong>&nbsp;Password</strong></td></tr>
  
<tr><td><input type="password" name="Password" required="required" placeholder=" Password" size="40" style="height:24px" /></td></tr>
    

  
<tr><td><input type="checkbox" value="Keep_me_Logged_in" name="Keep_me_Logged_in" />Keep me Logged in</td></tr>

<tr><td><font color="#FF0000"><?php echo $Msg; ?></font></td></tr>
    
<tr><td>&nbsp;</td></tr>

<tr><td>
<input type="submit" name="Log_In" value="Log In" style="background-color:<?php echo "#".$mButton_Color;?>; color:<?php echo "#".$mFont_Color;?>; font-size:14px; font-weight:600"/>
<a href="Index.php?goto=Sign_Up" style="text-decoration:none;" >
<input type="button" style="background-color:<?php echo "#".$mButton_Color;?>; color:<?php echo "#".$mFont_Color;?>; font-size:14px;font-weight:600" name="Sign_Up" value="Sign Up" /></a></td></tr>
    
<tr><td>&nbsp;</td></tr>
    
<tr><td><a href="Index.php?goto=Reset_Password" style="text-decoration:none" > Can't access your account? </a></td></tr>
    
<tr><td>&nbsp;</td></tr>
    
<tr><td>Don't have a <strong style="color:<?php echo "#".$mButton_Color;?>">Medicare</strong> account?<a href="Index.php?goto=Sign_Up" style="text-decoration:none;" ><strong> Sign up now </strong></a></td></tr>
    
</table></form></center></td></tr>

<?php include("Include_Main2.php");?>
  
</table>

</body>
</html>