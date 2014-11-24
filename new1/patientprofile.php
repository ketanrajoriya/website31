<?php

error_reporting('ERROR');
session_start();
$uid=$_SESSION['uid']; 

mysql_connect("localhost","root","");
mysql_select_db("medicare");

$sql="select * from patient where emailid= 'ketan@gmail.com'";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);

?>           

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php $r[0] - Profile?></title>
</head>

<body>
<table width="100%" border="0" cellspacing="0" >

<tr>
    <td colspan="2" align="center"><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="#000000" size="+2" ><hr /><?php echo $r[0]; ?> - Profile</font><hr /></td>
  </tr>

  <tr>
    <td colspan="2" valign="bottom" background="Userdata/<?php echo $uid; ?>/Album/Cover_Pics/<?php echo $Change_Cover_Pics;?>" height="250px" width="100%" style="background-repeat:no-repeat;border:#FFF"> 
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><a href="patientprofile.php?conpage=cpp"><img src="Userdata/<?php echo $uid; ?>/Album/Profile_Pics/<?php echo $Change_Profile_Pics;?>" height="260" width="200" style="background-repeat:no-repeat; border:#FFF solid; margin-left:20px; margin-top:0px"   /></a>
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="//<?php //echo "#".$Button_Color;?>" size="+2" ><?php //echo $Tittle; ?></font></td>
  </tr>
  
  <!--<tr>
    <td bgcolor="#F4F4F4">Living</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php //echo "#".$Button_Color;?>" size="3" ><?php //echo $Change_City;?></font></td>
  </tr-->>
  
  <tr>
    <td colspan="2" align="center"><hr /><strong>Basic Information</strong><hr /></td>
  </tr>
  
  
  
  <tr>
  
  
    <td bgcolor="#F4F4F4">NAME</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php //echo "#".$Button_Color;?>" size="3" ><?php echo " $r[0] $r[1] ";?></font></td>
  </tr>
  
 
  
   <tr>
     <td bgcolor="#F4F4F4">DATE OF BIRTH</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[7];?></font></td>
  </tr>
  
   <tr>
    <td bgcolor="#F4F4F4">GENDER</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php if($r[6]==0)
	{
		$gen = "male";
	}
	else $gen = "female";
	echo $gen ?></font></td>
  </tr>
 
  
  <tr>
    <td colspan="2" align="center"><hr /><strong>Contact Information</strong><hr /></td>
  </tr>
  
  <tr>
    <td bgcolor="#F4F4F4">MOBILE NUMBER</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[5] ;?></font></td>
  </tr>
  
  <tr>
   <td bgcolor="#F4F4F4">EMAIL ID</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[2]?></font></td>
  </tr>
  
  <tr>
    <td bgcolor="#F4F4F4"> ADDRESS</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[0];?></font></td>
  </tr>
  
  <tr>
    <td bgcolor="#F4F4F4">COUNTRY	</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[8];?></font></td>
  </tr>
  
</table>


</body>
</html>
