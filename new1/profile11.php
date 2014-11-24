<?php
error_reporting('ERROR');
session_start();
$uid=$_SESSION['uid']; 

mysql_connect("localhost","root","");
mysql_select_db("medicare");

$sql="select * from patient where emailid=$ketan";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);



/* $New_Month_Array=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$New_City_Array=array("Gwalior","Indore","Bhopal","Jabalpur","Katni");
?>
<?php 
$First_LastName=opendir("Userdata/$uid/User_Info/First_Last Name");
while($Read_First_LastName=readdir($First_LastName))
{
	if($Read_First_LastName!="." and $Read_First_LastName!="..")
	{
		$Tittle=$Read_First_LastName;
		}} 
		?>
        
<?php 
$Old_Email=opendir("Userdata/$uid/User_Info/Encrypted/Email_ID");
while($Read_Email_ID=readdir($Old_Email))
{
	if($Read_Email_ID!="." and $Read_Email_ID!="..")
	{
		$Change_Email=$Read_Email_ID;
		}} 
		?> 
        
<?php 
$Old_Mobile_No=opendir("Userdata/$uid/User_Info/Encrypted/Mobile_No");
while($Read_Mobile_No=readdir($Old_Mobile_No))
{
	if($Read_Mobile_No!="." and $Read_Mobile_No!="..")
	{
		$Change_Mobile_No=$Read_Mobile_No;
		}} 
		?>          

<?php 
$Old_DOB=opendir("Userdata/$uid/User_Info/DOB");
while($Read_DOB=readdir($Old_DOB))
{
	if($Read_DOB!="." and $Read_DOB!="..")
	{
		$Change_DOB=$Read_DOB;
		}} 
		?>       

<?php 
$Old_Sex=opendir("Userdata/$uid/User_Info/Sex");
while($Read_Sex=readdir($Old_Sex))
{
	if($Read_Sex!="." and $Read_Sex!="..")
	{
		$Change_Sex=$Read_Sex;
		}} 
		?>                  

<?php 
$Old_City=opendir("Userdata/$uid/User_Info/City");
while($Read_City=readdir($Old_City))
{
	if($Read_City!="." and $Read_City!="..")
	{
		$Change_City=$Read_City;
		}} 
		?> 
        
<?php 
$Old_Address=opendir("Userdata/$uid/User_Info/Address");
while($Read_Address=readdir($Old_Address))
{
	if($Read_Address!="." and $Read_Address!="..")
	{
		$Change_Address=$Read_Address;
		}} 
		?> 

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
	*/	?>           
        
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php $Tittle - Profile?></title>
</head>

<body>
<table width="100%" border="0" cellspacing="0" >

<tr>
    <td colspan="2" align="center"><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="#000000" size="+2" ><hr /><?php echo $Tittle; ?> - Profile</font><hr /></td>
  </tr>
  
  <tr>
    <td colspan="2" valign="bottom" background="Userdata/<?php echo $uid; ?>/Album/Cover_Pics/<?php echo $Change_Cover_Pics;?>" height="250px" width="100%" style="background-repeat:no-repeat;border:#FFF"> 
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><img src="Userdata/<?php echo $uid; ?>/Album/Profile_Pics/<?php echo $Change_Profile_Pics;?>" height="260" width="200" style="background-repeat:no-repeat; border:#FFF solid; margin-left:20px; margin-top:0px"   />
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="+2" ><?php echo $Tittle; ?></font></td>
  </tr>
  
  <tr>
    <td bgcolor="#F4F4F4">Living</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $Change_City;?></font></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center"><hr /><strong>Basic Information</strong><hr /></td>
  </tr>
  
  <tr>
    <td bgcolor="#F4F4F4">Birthday</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $Change_DOB;?></font></td>
  </tr>
  
  <tr>
    <td bgcolor="#F4F4F4">Gender</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $Change_Sex;?></font></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center"><hr /><strong>Contact Information</strong><hr /></td>
  </tr>
  
  <tr>
    <td bgcolor="#F4F4F4">Mobile Phones</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $Change_Mobile_No ;?></font></td>
  </tr>
  
  <tr>
    <td bgcolor="#F4F4F4">Email Address</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $Change_Email;?></font></td>
  </tr>
  
  <tr>
    <td bgcolor="#F4F4F4">Address	</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $Change_Address;?></font></td>
  </tr>
  
</table>


</body>
</html>
