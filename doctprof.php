<?php
session_start();
error_reporting('ERROR');
$content = isset($_GET['content']) ? $_GET['content'] : '';
//echo"content $uid";
$uid=$_SESSION['doctemail']; 
$pat=$_REQUEST['pat'];
$_SESSION['pate']=$pat;
$_SESSION['docte']=$uid;
$new = $_SESSION['pid'];
//echo"hello $new";
mysql_connect("localhost","root","");
mysql_select_db("medicare");
$uid=$content;
$sql="select * from doctor where emailid = '$uid' " ;
$qr=mysql_query($sql);
$r=mysql_fetch_array($qr);
//echo"helll $uid";
$temp=$uid;
//echo"temp $temp";

$_SESSION['doct1']=$r[2];
//$_SESSION['doct2']=$r[1];
//$add = $_REQUEST['add'];

//$uid ="ketan@gmail.com";
$od=opendir("Medicare/$uid");
while($res=readdir($od))
{
if($res!="." and $res!="..")
{
$res1=$res;
}
}

$path="Medicare/$uid/$res1";
if($add)
{
	$_SESSION['pate']=$pat;
$_SESSION['docte']=$uid;
echo"temp1 $temp";

header("location:assigndoct.php?content=$temp");
	
	}

?>           
        
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><style type="text/css">
a:link
{

text-decoration:none;

}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php $r[0] - Profile?></title>
</head>

<body>
<table width="100%" border="0" cellspacing="0" >

<tr>
    <td colspan="2" align="center"><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="#000000" size="+2" ><hr /><?php echo $r[0]; ?> - Profile</font><hr /></td>
  </tr>
  
  <tr>
    <td colspan="2" valign="bottom" background="Userdata/<?php echo $uid; ?>/Album/Cover_Pics/<?php echo ""?>" height="250px" width="100%" style="background-repeat:no-repeat;border:#FFF"> 
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><img src="<?php echo $path;?>" height="260" width="200" style="background-repeat:no-repeat; border:#FFF solid; margin-left:20px; margin-top:0px" > 
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="//<?php //echo "#".$Button_Color;?>" size="+2" ><?php //echo $Tittle; ?></font></td>
  </tr>
  
  <tr>
    <td bgcolor="#F4F4F4">Living</td>
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php echo $Change_City;?></font></td>
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
    <td><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$Button_Color;?>" size="3" ><?php if($r[9]==0)
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
<table align="center">
<tr>
<td style="color:#F00; border:thick; font-size:10px;  ">
<!--<form>
<input type="button" name="add" value="Get Appointment" style="font:Verdana, Geneva, sans-serif; font-size:18px; border-bottom-style:solid;border-color:#FF9933; width:190px; height:30px; background-color:#CCC; color:#F00; border-top-style:solid; border-left-style:solid;"/></form>-->
<?php
//echo'<a href="assigndoct.php?content='.$temp'">hii</a>';
echo '<a href="assigndoct.php?content='.$uid.'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Take Appointment</a></td>';

?></td></tr></table>
</body>
</html>
