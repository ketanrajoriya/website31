<?php
error_reporting('ERROR');
session_start();
$uid=$_SESSION['uid']; 
?>
<head>
<title>Drafts - MEDICARE</title>
</head>

<body>
<table width="100%">
<tr><td><hr />
<font style="font-family:Verdana, Geneva, sans-serif; font-size:18px; font-weight:500">
Drafts<hr />
</font></td></tr>
</table><form>
<input type="checkbox" name="checkbox_Drafts[]" value="<?php $Read_Mails ?>" style="margin-left:30px; margin-top:20px" />
<input type="submit" value="Delete" name="Deleted_Drafts" size="8"style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600"/><br />
<?php
//Read Draft Mails
$_REQUEST['goto_Drafts'];

$Open_Mails_Dir=opendir("Userdata/$uid/ShopRun/Drafts");
while($Read_Mails=readdir($Open_Mails_Dir))
{
	if($Read_Mails!="." && $Read_Mails!="..")
	{
		$echo_Read_Drafts="<input type='checkbox' name='checkbox_Drafts[]' value='$Read_Mails' style='margin-left:30px; margin-top:20px' /><a href='Inbox.php?goto_Drafts=$Read_Mails' style='text-decoration:none'>&nbsp;$Read_Mails.<hr/></a>";
		echo $echo_Read_Drafts;
		}
		}
		if($echo_Read_Drafts=="")
		{
			echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wow, you've got a very clean draft!";
			
			}
?></form></body></html>