<?php
error_reporting('ERROR');
session_start();
$uid=$_SESSION['uid'];
#
//Tittle First Name & Last Name



if($_SESSION['uid']=="")
{
	header("location:Index.php");
	}
	$First_LastName=opendir("Userdata/$uid/User_Info/First_Last Name");
	while($Read_First_LastName=readdir($First_LastName))
	{
		if($Read_First_LastName!="." and $Read_First_LastName!="..")
		{
			$Tittle=$Read_First_LastName;
			}
}
?>
<?php 
$Reset_mButton=$_REQUEST['Reset_mButton'];
//echo $Reset_mButton;
$Reset_mBackground=$_REQUEST['Reset_mBackground'];
//echo $Reset_mBackground;
$Reset_mFont=$_REQUEST['Reset_mFont'];

if($Reset_mButton)
{
	unlink("Userdata/$uid/ShopRun/Theme/mbuttoncolor");
	}
	if($Reset_mBackground)
{
	unlink("Userdata/$uid/ShopRun/Theme/mbgcolor");
	}
	if($Reset_mFont)
{
	unlink("Userdata/$uid/ShopRun/Theme/mfontcolor");
	}
?>


<?php
//Change Background Color Code
$goto_mbgcolor=$_REQUEST['goto_mbgcolor'];
//echo $goto_mbgcolor;
if($goto_mbgcolor)
{
	$mTheme_Location=fopen("Userdata/$uid/ShopRun/Theme/mbgcolor","w");
	fwrite($mTheme_Location,$goto_mbgcolor);
	}
	$mTheme_Location=fopen("Userdata/$uid/ShopRun/Theme/mbgcolor","r");
	$mfs=filesize("Userdata/$uid/ShopRun/Theme/mbgcolor");
	$BG_Color=fread($mTheme_Location,$mfs);
	if($BG_Color=="")
	{
		$BG_Color="0065CA";
	}
?>
<?php
//Change Button Color Code
$goto_mbuttoncolor=$_REQUEST['goto_mbuttoncolor'];
//echo $goto_mbuttoncolor;
if($goto_mbuttoncolor)
{
	$mTheme_Location=fopen("Userdata/$uid/ShopRun/Theme/mbuttoncolor","w");
	fwrite($mTheme_Location,$goto_mbuttoncolor);
	}
	$mTheme_Location=fopen("Userdata/$uid/ShopRun/Theme/mbuttoncolor","r");
	$mfs=filesize("Userdata/$uid/ShopRun/Theme/mbuttoncolor");
	$Button_Color=fread($mTheme_Location,$mfs);
	if($Button_Color=="")
	{
		$Button_Color="0065CA";
		}
?>
<?php
//Change Font Color Code
$goto_mfontcolor=$_REQUEST['goto_mfontcolor'];
//echo $goto_mfontcolor;
if($goto_mfontcolor)
{
	$mTheme_Location=fopen("Userdata/$uid/ShopRun/Theme/mfontcolor","w");
	fwrite($mTheme_Location,$goto_mfontcolor);
	}
	$mTheme_Location=fopen("Userdata/$uid/ShopRun/Theme/mfontcolor","r");
	$mfs=filesize("Userdata/$uid/ShopRun/Theme/mfontcolor");
	$Font_Color=fread($mTheme_Location,$mfs);
	if($Font_Color=="")
	{
		$Font_Color="FFFFFF";
		}
?>

<?php
//Compose Mail

$To=$_REQUEST['name1'];
$Subject=$_REQUEST['Subject'];
$Mail_Message=$_REQUEST['Message'];
$Uid_Msg=$uid.$Subject;
$To_Msg=$To.$Subject;
if($_REQUEST['Send'])
{
	if(file_exists("Userdata/$To"))
	{
		file_put_contents("Userdata/$To/ShopRun/Inbox/$Uid_Msg",$Mail_Message);
		file_put_contents("Userdata/$uid/ShopRun/Sent/$To_Msg",$Mail_Message);
		$Msg="Mail sucessfully sent to $To";
		}
		else
		{
			$Msg="$To does not exist.";
			}
			}
			if($_REQUEST['Save'])
			{
				file_put_contents("Userdata/$uid/ShopRun/Drafts/$To_Msg",$Mail_Message);
				$Msg="Message sucessfully saved to Draft";
				}
				if($_REQUEST['Cancel'])
				{
					header("location:Inbox.php");
					$Msg="Mail discard.";
					}
					$echo_Msg="<br><font color='#FF0000'><center>$Msg</center></font>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="Images/SR_Logo.jpg" />
<title><?php echo $Tittle?> -MEDICARE </title>
</head>

<body>

<!-- Main Table Start -->
<table width="100%" border="1" cellspacing="0" height="100%">
<?php include("Include_Inbox1.php")?></table>
 <table width="100%" border="1" cellspacing="0" height="100%"> 
<!-- 2nd Row Start -->  
<tr height="475px" >
	<td width="150px" height="475px" valign="top" >
		<font style="font-family:Verdana, Geneva, sans-serif; font-size:18px" color="#666666">

<!-- 2nd Row Left Side Table Start -->
<table border="1" align="center" width="100%">
<tr>
	<td align="center" valign="top" >
    	<font style="font-family:Verdana, Geneva, sans-serif; font-size:20px; margin-left:0px;" color="#666666">Folders
        </font><hr />
     </td>
</tr>

<tr>
	<td align="center">
    	<a href="Inbox.php?goto=Inbox" style="text-decoration:none">
        	<input type="button" value=" Inbox " name="Inbox" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600"/>
        </a><hr />
     </td>
</tr>
         
<tr>
	<td align="center">
    	<a href="Inbox.php?goto=Drafts" style="text-decoration:none">
        	<input type="button" value=" Drafts " name="Drafts" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600"/>
        </a><hr />
    </td>
</tr>
  
<tr>
	<td align="center">
    	<a href="Inbox.php?goto=Sent" style="text-decoration:none">
        	<input type="button" value="Sent" name="Sent" size="8" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600"/>
        </a><hr />
    </td>
</tr>
  
<tr>
	<td align="center">
    	<a href="Inbox.php?goto=Deleted" style="text-decoration:none">
        	<input type="button" value="Deleted" name="Deleted" size="8" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600"/>
        </a><hr />
     </td>
</tr>

</table>
<!-- 2nd Row Left Side Table End -->
</font>

<!-- 2nd Row 2nd Coloum Start -->
<td align="center" width="5px" height="480" valign="top">
	<img src="Images/VR.jpg" width="5px" height="550PX" style="margin-top:20px"/>
</td>
<!-- 2nd Row 2nd Coloum End -->

<!-- 2nd Row 3rd Coloum Start -->
<td colspan="0" align="left" valign="top" bgcolor='#FBFBFF' >

<?php  echo $echo_Msg; ?>

<?php 
//Inbox Mail Deleted

$checkbox_Inbox=$_REQUEST['checkbox_Inbox'];
if($_REQUEST['Inbox_Deleted'])
{
	if($checkbox_Inbox=="")
	{
		$echo_Msg="<br><font color='#FF0000'><center>Select mails</center></font>";
		echo $echo_Msg;
		}
		else
		{
			foreach($checkbox_Inbox as $v)
			{
				copy("Userdata/$uid/ShopRun/Inbox/$v","Userdata/$uid/ShopRun/Deleted/$v");
				unlink("Userdata/$uid/ShopRun/Inbox/$v");
				}
				$echo_Msg="<br><font color='#FF0000'><center>Mails deleted.</center></font>";
				echo $echo_Msg;
				}}
?>
</form>

<?php 
//Drafts Mail Deleted

$checkbox_Drafts=$_REQUEST['checkbox_Drafts'];
if($_REQUEST['Deleted_Drafts'])
{
	if($checkbox_Drafts=="")
	{
		$echo_Msg="<br><font color='#FF0000'><center>Select mails</center></font>";
		echo $echo_Msg;
		}
		else
		{
			foreach($checkbox_Drafts as $v)
			{
				copy("Userdata/$uid/ShopRun/Drafts/$v","Userdata/$uid/ShopRun/Deleted/$v");
				unlink("Userdata/$uid/ShopRun/Drafts/$v");
				}
				$echo_Msg="<br><font color='#FF0000'><center>Mails deleted.</center></font>";
				echo $echo_Msg;
				
}
}

?>

<?php 
//Sent Mail Deleted

$checkbox_Sent=$_REQUEST['checkbox_Sent'];
if($_REQUEST['Deleted_Sent'])
{
	if($checkbox_Sent=="")
	{
		$echo_Msg="<br><font color='#FF0000'><center>Select mails</center></font>";
		echo $echo_Msg;
		}
		else
		{
			foreach($checkbox_Sent as $v)
			{
				copy("Userdata/$uid/ShopRun/Sent/$v","Userdata/$uid/ShopRun/Deleted/$v");
				unlink("Userdata/$uid/ShopRun/Sent/$v");
				}
				$echo_Msg="<br><font color='#FF0000'><center>Mails deleted.</center></font>";
				echo $echo_Msg;
				}}
?>

<?php 
//Trash Mail Deleted

$checkbox_Deleted=$_REQUEST['checkbox_Deleted'];
if($_REQUEST['Deleted_Deleted'])
{
	if($checkbox_Deleted=="")
	{
		$echo_Msg="<br><font color='#FF0000'><center>Select mails</center></font>";
		echo $echo_Msg;
		}
		else
		{
			foreach($checkbox_Deleted as $v)
			{
				unlink("Userdata/$uid/ShopRun/Deleted/$v");
				}
				$echo_Msg="<br><font color='#FF0000'><center>Mails deleted.</center></font>";
				echo $echo_Msg;
				}}
?>

<?php
//Include All sites

$goto=$_REQUEST['goto'];

if($goto==New_Mail)
{
	include("New_Mail.php");
	}
	elseif($goto==Drafts)
	{
		include("Drafts.php");
		}
		elseif($goto==Sent)
		{
			include("Sent.php");
			}
			elseif($goto==Deleted)
			{
				include("Deleted.php");
				}
				elseif($goto==Log_Out)
				{

				include("Log_Out.php");

					}
					elseif($goto==Settings)
					{
						include("Settings.php");
						}
						elseif($goto==Change_Themes)
						{
							include("Change_Themes.php");
						}
						elseif($goto==Profile)
						{
							include("Profile.php");
						}
?>



<!--Inbox Heading-->
<table width="100%">
<tr><td><hr />
<font style="font-family:Verdana, Geneva, sans-serif; font-size:18px; font-weight:500">
Inbox<hr />
</font></td></tr>
</table>

<form><input type='checkbox' name='checkbox_Inbox[]' value='<?php $Read_Mails ?>' style='margin-left:30px; margin-top:20px' /><input type='submit' value='Delete' name='Inbox_Deleted' size='8' style='background-color:<?php echo '#'.$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600'/><br />

<?php
//Read Inbox Mails

$_REQUEST['goto_Inbox'];

$Open_Mails_Dir=opendir("Userdata/$uid/ShopRun/Inbox");
while($Read_Mails=readdir($Open_Mails_Dir))
{
	if($Read_Mails!="." && $Read_Mails!="..")
	{
		$echo_Read_Inbox="<input type='checkbox' name='checkbox_Inbox[]' value='$Read_Mails' style='margin-left:30px; margin-top:20px' /><a href='Inbox.php?goto_Inbox=$Read_Mails' style='text-decoration:none'>&nbsp;$Read_Mails.<hr/></a>";
		echo $echo_Read_Inbox;
		}}
		if($echo_Read_Inbox=="")
		{
			echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wow, you've got a very clean inbox!";
			}
		
?>

<?php
//Show Inbox Mails
$goto_Inbox=$_REQUEST['goto_Inbox'];
echo "<h3>$goto_Inbox</h3><br>";
$Show_Inbox_Mails=file_get_contents("Userdata/$uid/ShopRun/Inbox/$goto_Inbox");
echo $Show_Inbox_Mails;
?>
<?php
//Show Drafts Mails
$goto_Drafts=$_REQUEST['goto_Drafts'];
echo "<h3>$goto_Drafts</h3><br>";
$Show_Drafts_Mails=file_get_contents("Userdata/$uid/ShopRun/Drafts/$goto_Drafts");
echo $Show_Drafts_Mails;
?>
<?php
//Show Sent Mails
$goto_Sent=$_REQUEST['goto_Sent'];
echo "<h3>$goto_Sent</h3><br>";
$Show_Sent_Mails=file_get_contents("Userdata/$uid/ShopRun/Sent/$goto_Sent");
echo $Show_Sent_Mails;
?>
<?php
//Show Deleted Mails
$goto_Deleted=$_REQUEST['goto_Deleted'];
echo "<h3>$goto_Deleted</h3><br>";
$Show_Deleted_Mails=file_get_contents("Userdata/$uid/ShopRun/Deleted/$goto_Deleted");
echo $Show_Deleted_Mails;
?>


</td></td></tr>
<!-- 2nd Row 3rd Coloum End -->

<!-- 3rd Row Start -->   
<tr height="20px"><td colspan="3" width="1000px" height="20px">&nbsp;</td></tr>
<!-- 3rd Row End -->     

<?php include("Include_Inbox2.php");?>

</body>
</html>