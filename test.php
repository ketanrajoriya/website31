<?php
error_reporting('ERROR');
session_start();
$uname=$_SESSION['uname'];
echo"$uname";
/*error_reporting('ERROR');
session_start();
$username=$_SESSION['username'];

mysql_connect("localhost","root","");
mysql_select_db("useraccounts");

$sql="select * from users";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
echo"$r[0].<br />
";
echo"$r[1]";
echo"$r[2]";
echo"$r[3]";
echo"$r[4]";*/
//echo"hello friends";
?>