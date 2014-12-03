<?php
error_reporting('ERROR');
session_start();
$uid=$_SESSION['uid'];?>
<?php 
$Old_Profile_Pics=opendir("Userdata/$uid/Album/Profile_Pics");
while($Read_Profile_Pics=readdir($Old_Profile_Pics))
{
	if($Read_Profile_Pics!="." and $Read_Profile_Pics!="..")
	{
		$Change_Profile_Pics=$Read_Profile_Pics;
		}} 
		?>  

<!-- Main Table Start -->
<table width="100%" border="0" cellspacing="0" height="100%">
<!-- Header Start -->

	<!-- SkyShop -->
<tr bgcolor=<?php echo $BG_Color;?> height="35px">
	<td width="150px" height="35px">
    	<font color="<?php echo "#".$Font_Color;?>" style="font-family:Verdana, Geneva, sans-serif; font-size:22px; font-weight:600">
        <a href="Inbox.php" style="color:<?php echo "#".$Font_Color;?>; text-decoration:none; margin-left:15px">MEDICARE</a>
        </font>
     </td>
    <!-- SkyShop End -->
    
    <!-- Header Second Column -->
<td>
	<img src="Images/VR.jpg" width="2px" height="35PX" />
</td>
	<!-- Header Second Column End -->
    
    <!-- Header 3rd Column -->
<td width="795px" height="35px">
	<table border="0"><tr><td width="100%">
    <a href="Inbox.php?goto=New_Mail" style="text-decoration:none;" >
        	<input type="button" align="left" value="+ New" name="New_Mail" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:16px; font-weight:500; margin-left:0px"/>
        </a></td>
    <td>
	<a href="Inbox.php?goto=Change_Themes">
    	<input type="button" value="Change Themes" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600;"/>
	</a></td>
    <td>
    <a href="Inbox.php?goto=Settings">
	<input type="button" value="Settings" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600"/>
	</a></td>
    
    <td>
	<a href="Inbox.php?goto=Profile"><img src="Userdata/<?php echo $uid; ?>/Album/Profile_Pics/<?php echo $Change_Profile_Pics;?>" width="32px" height="32px" /><!--<input type="button" value="<?php echo $Tittle;?>" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600;margin-right:20px"/>--></a></td>
    
    <td>
    <a href="Inbox.php?goto=Log_Out">
	<input type="button" value="LogOut" name="Log_Out" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600; "/><font style="margin-right:35px"></font>
	</a></td></tr></table></td></tr></table>
   <!-- Header 3rd Column End -->