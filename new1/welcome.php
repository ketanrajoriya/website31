<?php
session_start();
error_reporting('ERROR');
$use=$_SESSION['user'];

//$user=$_SESSION['raj'];
$email=$_SESSION['emai'];
echo "$use";
echo "$email";

//$_SESSION['log']=$ketan;
mysql_connect("localhost","root","");
mysql_select_db("medicare");

$sql="select * from doctor where emailid = '$email' ";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	for($i=0;$i<6;$i++)
	{
		echo"$r[$i]";
		}
		
	//echo"$r[2]";
	echo "hello";
	?>