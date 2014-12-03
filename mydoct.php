<?php

session_start();
error_reporting('ERROR');
$uiid=$_SESSION['uid'];
//echo"ggo $uiid";

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
	
	
	$sql = "select doctoremailid,regnumber,appointmentdate,city,hospital,disease from doctorpatient where patientemailid='$uiid'";
	$result = $conn->query($sql);
	foreach($result as $val)
	{
		if($val!="")
		{
			echo"<table border='1'>";
		//while($row= $result->fetch_assoc())
mysql_connect("localhost","root","");

		 mysql_select_db("medicare");
	$doctemail=$val['doctoremailid'];
$sql1 ="select * from doctor where emailid='$doctemail'";
$qr=mysql_query($sql1);
$r=mysql_fetch_array($qr);


echo "<br> <tr><td> &nbsp;&nbsp;&nbsp;Doctor_Name &nbsp;&nbsp; </td> "."<td>&nbsp;&nbsp;";
echo '<a href="doctprofile_by_patient.php?content='.$doctemail.'">'.$r[0].'</a></td>';

echo"</td>"." "."<td> &nbsp;&nbsp;appointment_date&nbsp;&nbsp;</td> "."<td>&nbsp;&nbsp;".$val["appointmentdate"]."&nbsp;&nbsp;</td>"."<td>&nbsp;&nbsp; city &nbsp;&nbsp; </td> "."<td>&nbsp;&nbsp;".$val["city"]."&nbsp;&nbsp;</td>"." <td>&nbsp;&nbsp;hospital &nbsp;&nbsp;  </td>"."<td>&nbsp;&nbsp;".$val["hospital"]." &nbsp;&nbsp;</td>"."<td>&nbsp;&nbsp;disease  &nbsp;&nbsp; </td>"."<td>&nbsp;&nbsp;".$val["disease"]."&nbsp;&nbsp;</td>"."<br><td><a href='skype:$r[5]?call'>Call</a>
&nbsp;&nbsp;&nbsp;<a href='skype:$r[5]?chat'>Chat</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a href='skype:$r[5]?voicemail'>Leave a voicemail</a>
</td></tr>
";
		echo"</table>";	
		} 
		else echo "no result";
 
		}
?>
