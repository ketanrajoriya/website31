<?php
session_start();
error_reporting('ERROR');
$use=$_SESSION['user'];
//$user=$_SESSION['raj'];
$ketan=$_SESSION['ketan'];
$_SESSION['log']=$ketan;

mysql_connect("localhost","root","");
mysql_select_db("medicare");

$sql="select * from patient where emailid=$ketan";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	for($i=0;$i<6;$i++)
	{
		echo"$r[$i]";
		}
		
	//echo"$r[2]";
	
	?>
<table width="100%" height="700px" border="1" cellspacing="0">

<tr bgcolor="#FF9933" height="28px">

<td height="45px" valign="middle" width="17%"> &nbsp;<a href="homepage.php" style="color:#ffffff; margin-left:30px; font-size:40px">Friends Zone</a></font></td>

<!--<td width="25%" valign="baseline"><b>Friends Zone </b><img src="../project/VR.jpg" height="75px" width="2px" align="right"  ></td>
-->
<!--<td width="85%"><input type="button" name="new" value="Welcome " align="left" style="font:Verdana, Geneva, sans-serif; font-size:18px; border-color:#09f; width:70px; height:30px; background-color:#09f"><img src="ravi.jpg" width="40px" height="35px" align="right" border="1" style="vertical-align:baseline">&nbsp;<input type="button" name="settings" value="Settings" align="right" style="font:Verdana, Geneva, sans-serif; font-size:14px; border-bottom-style:solid; text-align:right">&nbsp;<input type="button" name="logout" value="logout" style="font:Verdana, Geneva, sans-serif; font-size:14px; border-bottom-style:solid; border-color:#FF9933;"></td>
-->
<td>

<a href="profile.php"><img src="profilepic.jpg" align="right" height="70px">
</a>
</td>
<td bgcolor="#FF9933" valign="bottom" style="font:Verdana, Geneva, sans-serif; font-size:14px; border-bottom-style:solid; border-color:#FF9933;">



<table border="0" cellspacing="0" width="100%">
<tr><td valign="baseline" style="color:#FFF; font-weight:500;">welcome  <?php echo"  $use  !!"; /*echo"$ketan";*/?></td></tr>
<tr><td style="color:#FFF; font-weight:500" valign="bottom">last login</td></tr>
<tr><td align="right">
<a href="Settings.php"><input type="button" name="settings" value="Settings" style="font:Verdana, Geneva, sans-serif; border-bottom-style:solid; border-left-width:thin;border-color:#F00; background-color:#CCC; color:#000"></a>
<a href="logout.php"><input type="submit" name="logout" value="LogOut" style="font:Verdana, Geneva, sans-serif; border-bottom-style:solid;border-color:#F00; background-color:#CCC; color:#000"></a>

<!--<img src="power.jpg" width="31" height="27" border="1" align="right">   -->
</td></tr></table>


</td>
</tr>

<tr>
<td style="font:Verdana, Geneva, sans-serif; font-size:26px; color:FF3F00" valign="top" align="center"><br>Main Menu<br>

<img src="VR2.jpg" width="75%" height="8"  ><br>

<input type="button" value="Home" name="home" style="font:Verdana, Geneva, sans-serif; font-size:18px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:30px; background-color:#CCC; color:#000">

<img src="VR2.jpg" width="75%" height="8"><br>

<input type="button" value="Doctors" name="friends" style="font:Verdana, Geneva, sans-serif; font-size:18px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:30px; background-color:#CCC; color:#000">

<img src="VR2.jpg" width="75%" height="8"><br>

<input type="button" value="Forum" name="freezone" style="font:Verdana, Geneva, sans-serif; font-size:18px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:30px; background-color:#CCC; color:#000">

<img src="VR2.jpg" width="75%" height="8"><br>

<input type="button" value="LogOut" name="logout" style="font:Verdana, Geneva, sans-serif; font-size:18px; border-bottom-style:solid;border-color:#FF9933; width:90px; height:30px; background-color:#CCC; color:#000">
<img src="VR2.jpg" width="75%" height="8">
</td><td valign="baseline">
<!--<img src="../project/VR.jpg" height="535px" width="8px"align="left">-->

<table width="85%" border="0">
  <tr><td align="right">
<input type="button" name="insert" value="insert" style="font:Verdana, Geneva, sans-serif; border-bottom-style:solid;border-color:#FF9933; background-color:#CCC; color:#000"><input type="submit" name="post" value="Post" style="font:Verdana, Geneva, sans-serif; border-bottom-style:solid;border-color:#FF9933; background-color:#CCC; color:#000"></td></tr>
</table>


</td><td width="20%" ><textarea name="textarea" cols="100" rows="7" placeholder="write something new....."></textarea></td></tr>
</table></body></html>
