<?php
error_reporting('ERROR');
session_start();
$uid=$_SESSION['uid']; 
?>
<head>
<title>Compose Mail - Medicare</title>
</head><body>
<table width="100%">
<tr><td>
<font style="font-family:Verdana, Geneva, sans-serif; font-size:18px; font-weight:500">
Compose Mail<hr />
</font></td></tr>
</table><form method="post"><table width="" border="0" style="margin-left:25px">
<tr><td><font color="#FF0000"><?php echo "$Error_Sign_Up"; ?></font></td></tr>
<tr><td><font color="#FF0000"><strong>From</strong></font></td></tr>
<tr><td><input type="button" value="<?php echo $uid;?>" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:12px; font-weight:600"/></td></tr>
<tr><td><font color="#FF0000"><strong>To</strong></font></td></tr>
<tr>
<td>
<!--<input type="text" name="To" required="required" size="43" placeholder="&nbsp;Recipients" style="height:22px" /> -->


<?php

//$uiid=$_SESSION['uid'];
//$uiid="s@p.c";



$servername = "localhost";
$username = "root";
$password = "";
$db="medicare";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
	
	
	$sql = "select patientemailid,regnumber,appointmentdate,city,hospital,disease from doctorpatient where doctoremailid='$uid'";
	
	

	$result = $conn->query($sql);
	echo"<select name='name1'>";
	echo"<option value=".">select</option>";
$name11=$_REQUEST['name1'];
			
		if($result ->num_rows > 0)
	{
			while($row= $result->fetch_assoc())
		{
			
			echo"<option value=".$row["patientemailid"].">".$row["patientemailid"]."</option>";
			echo"<br>";
				}
			echo"</select>";
	
			}
		
else echo "no result";
?>





</td>
</tr>
<tr><td><input type="text" name="Subject" placeholder="&nbsp;Add a subject" size="43" style="height:22px" /></td></tr>
<tr><td><textarea placeholder="&nbsp;Type your message here" cols="60" rows="10" name="Message"></textarea></td></tr><tr><td><input type="submit" name="Send"value="Send"style="background-color:<?php echo "#".$Button_Color;?>;color:<?php echo "#".$Font_Color;?>; font-size:14px; font-weight:600"/>
<input type="submit" name="Save" value="Save" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px; font-weight:600" />
<input type="button" name="Cancel" value="Cancel" style="background-color:<?php echo "#".$Button_Color;?>; color:<?php echo "#".$Font_Color;?>; font-size:14px; font-weight:600"/>
</td></tr></table></form></body>
</html>