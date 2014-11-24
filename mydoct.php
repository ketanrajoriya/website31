<?php

session_start();
error_reporting('ERROR');
$uiid=$_SESSION['uid'];
//$uiid="ketan@gmail.com";



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
	if($result ->num_rows > 0)
	{
		echo"<table border='1'>";
		while($row= $result->fetch_assoc())
		{
			echo "<br> <tr><td> &nbsp;&nbsp;&nbsp;doctor_id &nbsp;&nbsp; </td> "."<td>&nbsp;&nbsp;".$row["doctoremailid"]."&nbsp;&nbsp;</td>"." <td>&nbsp;&nbsp;regestration number  &nbsp;&nbsp; </td>"."<td>&nbsp;&nbsp;".$row["regnumber"]."&nbsp;&nbsp;</td>"."<td> &nbsp;&nbsp;appointment_date  &nbsp;&nbsp;</td> "."<td>&nbsp;&nbsp;".$row["appointmentdate"]."&nbsp;&nbsp;</td>"."<td>&nbsp;&nbsp; city &nbsp;&nbsp; </td> "."<td>&nbsp;&nbsp;".$row["city"]."&nbsp;&nbsp;</td>"." <td>&nbsp;&nbsp;hospital &nbsp;&nbsp;  </td>"."<td>&nbsp;&nbsp;".$row["hospital"]." &nbsp;&nbsp;</td>"."<td>&nbsp;&nbsp;disease  &nbsp;&nbsp; </td>"."<td>&nbsp;&nbsp;".$row["disease"]."&nbsp;&nbsp;</td>"."<br>
";}
		echo"</table>";	
		} else echo "no result";
?>
