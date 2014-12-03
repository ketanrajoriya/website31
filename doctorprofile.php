<?php

error_reporting('ERROR');
session_start();
$uid=$_SESSION['uid']; 

mysql_connect("localhost","root","");
mysql_select_db("medicare");

$sql="select * from doctor where emailid= '$uid' ";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);

//$uname=$_SESSION['uname'];
//$uname="ketan";
echo $uname;
$fn=$_FILES['image']['name'];
$ft=$_FILES['image']['type'];
$fs=$_FILES['image']['size']/1024;
$ftmp=$_FILES['image']['tmp_name'];
if($_REQUEST['submit'])
{
if($fs>1024)
{
echo "Max file Size only 1mb";		
}
elseif($ft!="image/jpeg")
{
echo "invalid image type only jpg";		
}
else
{
mkdir("medicare/$uid");
$od=opendir("medicare/$uid");
while($res=readdir($od))
{
unlink("medicare/$uid/$res");		
}
move_uploaded_file($ftmp,"medicare/$uid/$fn");
//header("location:home.php");

//echo "profile updated";
}		
}


$od=opendir("medicare/$uid");
while($res=readdir($od))
{
if($res!="." and $res!="..")
{
$res1=$res;
}
}

$path="medicare/$uid/$res1";
$tn=file_get_contents("userdata/$uid/theme");
$path1="theme/$tn";


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
    <td colspan="2" align="center"><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="#000000" size="+2" ><hr /><?php echo $r[0]; ?> - Profile<a href="doct.php">home</a></font><hr /></td>
  </tr>
  
  <tr>
    <td colspan="2" valign="bottom" background="Userdata/<?php echo $uid; ?>/Album/Cover_Pics/<?php echo $Change_Cover_Pics;?>" height="250px" width="100%" style="background-repeat:no-repeat;border:#FFF"> 
   <img src="<?php echo $path;?>" height="260" width="200" style="background-repeat:no-repeat; border:#FFF solid; margin-left:20px; margin-top:0px" >  
        <form method="post" enctype="multipart/form-data">
<input type="file" name="image"><input type="submit" value="submit" name="submit">
</form>
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="//<?php //echo "#".$Button_Color;?>" size="+2" ><?php //echo $Tittle; ?></font></td>
  </tr>
  
  <tr>
    <td bgcolor="#F4F4F4">Living</td>
    <td><a href="logout.php"><input type="submit" name="logout" value="LogOut" style="font:Verdana, Geneva, sans-serif; border-bottom-style:solid;border-color:#F00; background-color:#CCC; color:#000"></a>
</td>
  </tr>
  
  <tr>
    <td colspan="2" align="center"><hr /><strong>Basic Information</strong><hr /></td>
  </tr>
  
  
  
  <tr>
  
  
    <td bgcolor="#F4F4F4">NAME</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php //echo "#".$Button_Color;?>" size="3" ><?php echo " $r[0] $r[1] ";?></font></td>
  </tr>
  
  <tr>
  
  
    <td bgcolor="#F4F4F4">REGISTRATION NUMBER</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[3];?></font></td>
  </tr>
  <tr>
     <td bgcolor="#F4F4F4">SPECIALITY</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[6];?></font></td>
  </tr>
  
   <tr>
     <td bgcolor="#F4F4F4">DATE OF BIRTH</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[10];?></font></td>
  </tr>
  
   <tr>
    <td bgcolor="#F4F4F4">GENDER</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php if($r[9]==1)
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
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[8] ;?></font></td>
  </tr>
  
  <tr>
   <td bgcolor="#F4F4F4">EMAIL ID</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[2]?></font></td>
  </tr>
  
   <tr>
    <td bgcolor="#F4F4F4"> HOSPITAL INFORMATION</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[7];?></font></td>
  </tr>
  <tr>
    <td bgcolor="#F4F4F4"> EDUCATIONAL INFORMATION</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[8];?></font></td>
  </tr>
  

<tr>
    <td bgcolor="#F4F4F4">CITY	</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[12];?></font></td>
  </tr>
    <tr>
    <td bgcolor="#F4F4F4">COUNTRY	</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $r[13];?></font></td>
  </tr>

</table>


</body>
</html>
