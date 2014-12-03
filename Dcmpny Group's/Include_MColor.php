<?php
error_reporting('ERROR');
?>
<?php
//Change Background Color Code

	$mTheme_Location=fopen("Userdata/Theme/mbgcolor","r");
	$mfs=filesize("Userdata/Theme/mbgcolor");
	$mBG_Color=fread($mTheme_Location,$mfs);
	if($mBG_Color=="")
	{
	$mBG_Color="0065CA";		
	}
?>
<?php
//Change Button Color Code

	$mTheme_Location=fopen("Userdata/Theme/mbuttoncolor","r");
	$mfs=filesize("Userdata/Theme/mbuttoncolor");
	$mButton_Color=fread($mTheme_Location,$mfs);
	if($mButton_Color=="")
	{
	$mButton_Color="0065CA";		
	}
?>
<?php
//Change Font Color Code

	$mTheme_Location=fopen("Userdata/Theme/mfontcolor","r");
	$mfs=filesize("Userdata/Theme/mfontcolor");
	$mFont_Color=fread($mTheme_Location,$mfs);
	if($mFont_Color=="")
	{
	$mFont_Color="FFFFFF";		
	}
?>