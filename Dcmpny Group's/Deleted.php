<?php
session_start();
$uid=$_SESSION['uid']; 
error_reporting('ERROR');
?>
<head>
<title>Deleted Mail - ShopCircle</title>
</head>
<body><table width="100%"><tr><td><hr />
<font style="font-family:Verdana, Geneva, sans-serif; font-size:18px; font-weight:500">
Deleted Mails<hr/></font></td></tr>
</table><form>
<input type="checkbox" name="checkbox_Deleted[]" value="<?php $Read_Mails ?>" style="margin-left:30px; margin-top:20px" /><input type="submit" value="Delete" name="Deleted_Deleted" size="8" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600"/><br />
<?php
//Read Deleted Mails
$_REQUEST['goto_Deleted'];
$Open_Mails_Dir=opendir("Userdata/$uid/ShopRun/Deleted");
while($Read_Mails=readdir($Open_Mails_Dir))
{
	if($Read_Mails!="." && $Read_Mails!="..")
	{
		$echo_Read_Deleted="<input type='checkbox' name='checkbox_Deleted[]' value='$Read_Mails' style='margin-left:30px; margin-top:20px' /><a href='Inbox.php?goto_Deleted=$Read_Mails' style='text-decoration:none'>&nbsp;$Read_Mails.<hr/></a>";
		echo $echo_Read_Deleted;
		}
		}
		if($echo_Read_Deleted=="")
		{
			echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wow, you've got a very clean trash!";
			}
?></form></body></html>