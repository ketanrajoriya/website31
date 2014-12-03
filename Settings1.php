<?php
error_reporting('ERROR');
session_start();
$uid=$_SESSION['uid']; 
$New_Month_Array=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$New_City_Array=array("Gwalior","Indore","Bhopal","Jabalpur","Katni");
?>
<?php 
$First_LastName=opendir("Userdata/$uid/User_Info/First_Last Name");
while($Read_First_LastName=readdir($First_LastName))
{
	if($Read_First_LastName!="." and $Read_First_LastName!="..")
	{
		$Tittle=$Read_First_LastName;
		}} ?>
        
<?php 
$Old_Email=opendir("Userdata/$uid/User_Info/Encrypted/Email_ID");
while($Read_Email_ID=readdir($Old_Email))
{
	if($Read_Email_ID!="." and $Read_Email_ID!="..")
	{
		$Change_Email=$Read_Email_ID;
		}} ?> 
        
<?php 
$Old_Mobile_No=opendir("Userdata/$uid/User_Info/Encrypted/Mobile_No");
while($Read_Mobile_No=readdir($Old_Mobile_No))
{
	if($Read_Mobile_No!="." and $Read_Mobile_No!="..")
	{
		$Change_Mobile_No=$Read_Mobile_No;
		}} ?>          

<?php 
$Old_DOB=opendir("Userdata/$uid/User_Info/DOB");
while($Read_DOB=readdir($Old_DOB))
{
	if($Read_DOB!="." and $Read_DOB!="..")
	{
		$Change_DOB=$Read_DOB;
		}} ?>       

<?php 
$Old_Sex=opendir("Userdata/$uid/User_Info/Sex");
while($Read_Sex=readdir($Old_Sex))
{
	if($Read_Sex!="." and $Read_Sex!="..")
	{
		$Change_Sex=$Read_Sex;
		}} ?>                  

<?php 
$Old_City=opendir("Userdata/$uid/User_Info/City");
while($Read_City=readdir($Old_City))
{
	if($Read_City!="." and $Read_City!="..")
	{
		$Change_City=$Read_City;
		}} ?> 
        
<?php 
$Old_Address=opendir("Userdata/$uid/User_Info/Address");
while($Read_Address=readdir($Old_Address))
{
	if($Read_Address!="." and $Read_Address!="..")
	{
		$Change_Address=$Read_Address;
		}} ?> 
        
<?php 
$Old_Profile_Pics=opendir("Userdata/$uid/Album/Profile_Pics");
while($Read_Profile_Pics=readdir($Old_Profile_Pics))
{
	if($Read_Profile_Pics!="." and $Read_Profile_Pics!="..")
	{
		$Change_Profile_Pics=$Read_Profile_Pics;
		}} 
		?>      
<?php 
$Old_Cover_Pics=opendir("Userdata/$uid/Album/Cover_Pics");
while($Read_Cover_Pics=readdir($Old_Cover_Pics))
{
	if($Read_Cover_Pics!="." and $Read_Cover_Pics!="..")
	{
		$Change_Cover_Pics=$Read_Cover_Pics;
		}} 
		?>   
        
<?php
$New_First_Name=$_REQUEST['New_First_Name'];
$New_Last_Name=$_REQUEST['New_Last_Name'];
$Old_Password=$_REQUEST['Old_Password'];
$New_Password=$_REQUEST['New_Password'];
$New_Email=$_REQUEST['New_Email'];
$New_User_Name=$_REQUEST['New_User_Name'];
$National_Code=$_REQUEST['National_Code'];
$New_Mobile_No=$_REQUEST['New_Mobile_No'];
$New_Month=$_REQUEST['New_Month'];
$New_Date=$_REQUEST['New_Date'];
$New_Year=$_REQUEST['New_Year'];
$New_Sex=$_REQUEST['New_Sex'];
$New_City=$_REQUEST['New_City'];
$New_Address=$_REQUEST['New_Address'];
$Profile_Pic=$_REQUEST['Profile_Pic'];
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


if($_REQUEST['Submit_Pic'])
{
	unlink("Userdata/$uid/Album/Profile_Pics/$Change_Profile_Pics");
	move_uploaded_file("$ftmpname","Userdata/$uid/Album/Profile_Pics/$fname");
	$Setting_echo= "Profile picture sucessfully changed.";
	}
	
if($_REQUEST['Submit_CoverPic'])
{
	unlink("Userdata/$uid/Album/Cover_Pics/$Change_Cover_Pics");
	move_uploaded_file("$cftmpname","Userdata/$uid/Album/Cover_Pics/$cfname");
	$Setting_echo= "Cover picture sucessfully changed.";
	}
	
	
$Old_Pass_Location=opendir("Userdata/$uid/User_Info/Encrypted/Password/$echo_Read_Pass");

if ($_REQUEST['Submit_First_LastName'])
{
	rename("Userdata/$uid/User_Info/First_Last Name/$Tittle","Userdata/$uid/User_Info/First_Last Name/$New_First_Name $New_Last_Name");
	$Setting_echo= "Name changed to $New_First_Name $New_Last_Name.";
	}
					
	if($_REQUEST['Submit_Password'])
	{
		$Old_Pass=opendir("Userdata/$uid/User_Info/Encrypted/Password");
		while($Read_Old_Pass=readdir($Old_Pass))
		{
			if($Read_Old_Pass!="." and $Read_Old_Pass!="..")
			{
				$Change_Pass=$Read_Old_Pass;
				}}
				if($Change_Pass==$Old_Password)
				{
					rename("Userdata/$uid/User_Info/Encrypted/Password/$Change_Pass","Userdata/$uid/User_Info/Encrypted/Password/$New_Password");
					$Setting_echo= "Password sucessfully changed.";
					}
					else
					{
						$Setting_echo= "The old password is incorrect.";
						}}		
		
		if($_REQUEST['Submit_Email'])
		{
			$chk_Email_ID=opendir("Userdata/Check_UserName_Email_PhNo/Email_ID");
		while($Read_chk_Email_ID=readdir($chk_Email_ID))
		{
			if($Read_chk_Email_ID!="." and $Read_chk_Email_ID!="..")
			{
				$Chk_Email_ID=$Read_chk_Email_ID;
				}}
				rename("Userdata/$uid/User_Info/Encrypted/Email_ID/$Change_Email","Userdata/$uid/User_Info/Encrypted/Email_ID/$New_Email");
				rename("Userdata/Check_UserName_Email_PhNo/Email_ID/$Chk_Email_ID","Userdata/Check_UserName_Email_PhNo/Email_ID/$New_Email");
					$Setting_echo= "Email-ID sucessfully changed to $New_Email.";
					}
			
			if($_REQUEST['Submit_Username'])
			{
				rename("Userdata/$uid","Userdata/$New_User_Name");
				$Setting_echo= "Username sucessfully changed to $New_User_Name.";
				}
				
				if($_REQUEST['Submit_Mobile_No'])
				{
					$chk_Mobile_No=opendir("Userdata/Check_UserName_Email_PhNo/Mobile_No");
					while($Read_chk_Mobile_No=readdir($chk_Mobile_No))
					{
						if($Read_chk_Mobile_No!="." and $Read_chk_Mobile_No!="..")
						{
							$Chk_Mobile_No=$Read_chk_Mobile_No;
							}}
							rename("Userdata/$uid/User_Info/Encrypted/Mobile_No/$Change_Mobile_No","Userdata/$uid/User_Info/Encrypted/Mobile_No/$National_Code-$New_Mobile_No");
							rename("Userdata/Check_UserName_Email_PhNo/Mobile_No/$Chk_Mobile_No","Userdata/Check_UserName_Email_PhNo/Mobile_No/$National_Code-$New_Mobile_No");
							$Setting_echo= "Mobile number sucessfully changed to $National_Code-$New_Mobile_No.";
							 }
		  
					if($_REQUEST['Submit_DOB'])
					{
						rename("Userdata/$uid/User_Info/DOB/$Change_DOB","Userdata/$uid/User_Info/DOB/$New_Month.$New_Date.$New_Year");
						$Setting_echo= "Date Of Birth Changed to $New_Month.$New_Date.$New_Year.";
						}
						
						if($_REQUEST['Submit_Sex'])
						{
							rename("Userdata/$uid/User_Info/Sex/$Change_Sex","Userdata/$uid/User_Info/Sex/$New_Sex");
							$Setting_echo= "Sex changed to $New_Sex lol :P";
							}
									
							if($_REQUEST['Submit_City'])
							{
								rename("Userdata/$uid/User_Info/City/$Change_City","Userdata/$uid/User_Info/City/$New_City");
								$Setting_echo= "City sucessfully changed to $New_City.";
								}
								
								if($_REQUEST['Submit_Address'])
								{
									rename("Userdata/$uid/User_Info/Address/$Change_Address","Userdata/$uid/User_Info/Address/$New_Address");
									$Setting_echo= "Address sucessfully changed to $New_Address.";
									}
									
									
?>        

<body>
<table align="center" border="0" width="400px" height="">

<tr><td><h2><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>"> Settings <a href="Inbox.php"><input type="button" value="Inbox" name="Home Page" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600"/></a></font></h2><hr /></td></tr>

<tr><td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="#FF0000"> <?php echo $Setting_echo; ?><center><a href="Inbox.php?goto=Settings"><input type="button" value="Refresh" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600"/></a></center></font></td></tr>

<tr><td><font color="#FF0000"><?php echo "$Error_Setting"; ?></font></td></tr>

<tr><td>
<font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>">Update Name </font><br /><br />Your Name: <b><?php echo "$Tittle"; ?></b></td></tr>

<form name="Change_First_LastName" method="post">
<tr><td>
<input type="text" name="New_First_Name" required placeholder=" First Name" size="18" pattern="[A-Z a-z]+" style="height:22px" />
<input type="text" name="New_Last_Name" required placeholder=" Last Name" size="18" pattern="[A-Z a-z]+" style="height:22px"/>
<input type="submit" name="Submit_First_LastName" value="Submit" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px;font-weight:600"/><hr /></td></tr></form>

<form name="Change_Passwords" method="post">
<tr><td>
<font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>">Update Password </font></td></tr>
<tr><td>
<input type="Password" name="Old_Password" required placeholder=" Old Password" size="18" style="height:22px" />
<input type="Password" name="New_Password" required placeholder=" New Password" size="18" style="height:22px" />
<input type="submit" name="Submit_Password" value="Submit" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px;font-weight:600"/><hr /></td></tr></form>

<form name="Change_Email_ID" method="post">
<tr><td>
<font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>">Update Email </font><br /><br />Primary Email: <b><?php echo "$Change_Email"; ?></b></td></tr>
<tr><td>
<input type="Email" name="New_Email" required placeholder=" Your Email (someone@example.com)" size="43" style="height:22px" />
<input type="submit" name="Submit_Email" value="Submit" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px;font-weight:600"/><hr /></td></tr></form>

<!--<form name="Change_User_Name" method="post">
<tr><td>
<font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>">Update Username </font><br /><br />Your Username: <b><?php echo $uid; ?></b></td></tr>
<tr><td>
<input type="text" name="New_User_Name" required="required" placeholder=" New User Name" size="43" style="height:22px" />
<input type="submit" name="Submit_Username" value="Submit" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px;font-weight:600" /><hr /></td></tr></form> -->

<form name="Change_Mobile_No" method="post">
<tr><td>
<font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>">Update Mobile Number </font><br /><br />Your Mobile No.: <b><?php echo $Change_Mobile_No; ?></b></td></tr>
<tr><td>
<select name="National_Code"><option value="+91">India +91</option>
</select>
<input type="text" name="New_Mobile_No" required placeholder=" Your New Mobile Number"  pattern="[0-9]{10}" size="28" maxlength="10" style="height:22px" />
<input type="submit" name="Submit_Mobile_No" value="Submit" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px;font-weight:600" /><hr /></td></tr></form>

<form name="Change_DOB" method="post">
<tr><td>
<font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>">Update Date of birth </font><br /><br />Your DOB: <b><?php echo $Change_DOB; ?></b></td></tr>
<tr><td>
Birthday :<br />
<select name="New_Month" ><option value="-1" >Month:</option>
<?php
for($i=0; $i<=count($New_Month_Array)-1; $i++)
{
	echo "<option value='$New_Month_Array[$i]'>$New_Month_Array[$i]</option>";
	}
?>
</select>

<select name="New_Date"><option value="-1">Date:</option>
<?php
for($i=1; $i<=31; $i++)
{
	echo "<option value='$i'>$i</option>";
	}
?>
</select>

<select name="New_Year"><option value="-1">Year:</option>
<?php
for($i=2013-13; $i>=1900; $i--)
{
	echo "<option value='$i'>$i</option>";
	}
?>
</select>
<input type="submit" name="Submit_DOB" value="Submit" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px;font-weight:600" /><hr /></td></tr></form>

<form name="Change_Sex" method="post">
<tr><td>
<font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>">Sex </font><br /><br />Your Sex: <b><?php echo $Change_Sex; ?></b></td></tr>
<tr><td>
<input type="radio" name="New_Sex" value="Female" required />Female
<input type="radio" name="New_Sex" value="Male" required />Male
<input type="submit" name="Submit_Sex" value="Submit" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px;font-weight:600" /><hr /></td></tr></form>

<form name="Change_City" method="post">
<tr><td>
<font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>">Update City </font><br /><br />Current City: <b><?php echo $Change_City; ?></b></td></tr>
<tr><td>
City :
<select name="New_City"><option value="-1">-Select City-</option>
<?php
for($i=0; $i<=count($New_City_Array)-1; $i++)
{
	echo "<option value='$New_City_Array[$i]'>$New_City_Array[$i]</option>";
	}
?>
</select>
<input type="submit" name="Submit_City" value="Submit" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px;font-weight:600" /><hr /></td></tr></form>

<form name="Change_Address" method="post">
<tr><td>
<font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>">Update Address </font><br /><br />Current Address: <b><?php echo $Change_Address; ?></b></td></tr>
<tr><td>
New Address :<br /> <textarea name="New_Address" rows="3" cols="33"  required="required" placeholder=" Permanent Address" ></textarea>
<input type="submit" name="Submit_Address" value="Submit" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px;font-weight:600" /><hr /></td></tr></form>

<form name="Change_DP" method="post" enctype="multipart/form-data">

<tr><td>
<font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>">Change Profile Pic </font><br /><br />Current Pic: <b><img src="Userdata/<?php echo $uid; ?>/Album/Profile_Pics/<?php echo $Change_Profile_Pics;?>" width="64px" height="64px" /></b></td></tr>

<tr><td>
Profile Photo : <input type="file" name="Profile_Pic" required style="height:22px" />
<input type="submit" name="Submit_Pic" value="Submit" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px;font-weight:600" /><hr /></td></tr></form>

<form name="Change_CoverPic" method="post" enctype="multipart/form-data">

<tr><td>
<font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>">Change Cover Pic </font><br /><br />Current Pic: <b><img src="Userdata/<?php echo $uid; ?>/Album/Cover_Pics/<?php echo $Change_Cover_Pics;?>" width="64px" height="64px" /></b></td></tr>

<tr><td>
Cover Photo : <input type="file" name="Cover_Pic" required style="height:22px" />
<input type="submit" name="Submit_CoverPic" value="Submit" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px;font-weight:600" /><hr /></td></tr></form>

</table>

</body>
</html>