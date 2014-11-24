<?php
error_reporting('ERROR');
session_start();
//$_SESSION['username']=$firstname;
$docte=$_SESSION['docte'];
$pate=$_REQUEST['pate'];

mysql_connect("localhost","root","");
mysql_select_db("medicare");
	//echo"hello $docte $pate";
//edited on 4 11 2014
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$city=$_REQUEST['city'];
$hospital=$_REQUEST['hospital'];
$date=$_REQUEST['assgndate'];
$disease = $_REQUEST['disease'];
$done=$_REQUEST['done'];
$a=$docte;
$b="12";
$c=$pate;

$insertdata="insert into doctorpatient(doctoremailid,regnumber,patientemailid,appointmentdate,city,hospital,disease) values('$a','$b','$email','$date','$city','$hospital','$disease')";

if($done)
{
	//mysql_select_db("medicare");
	
	$sql = "select * from patient where emailid='$email'";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	/*if($r[2]==$username)	
	{
	$_SESSION['ketan']=$r[2];
	
		*/
	if($email==$r[2])
	{
	if($r[3]==$password)
	{
		$qr1=mysql_query($insertdata);
		
		$_SESSION['user']=$r[0];
		$_SESSION['ketan']=$r[2];
	echo"you are assigned";
		header("location:patient.php");
	
	
	}
	else{
		
	echo "
	unregistered user or incorrect email/password";
	echo "for sign up <a href='index.php'> clickhere</a>"; 
		
	}
	
	}
		
	 
	
}
?>

<html>
<head>
<title>
assigndoct</title></head>
<body>
<form method="post">
<table align="center" border="0" height="450px">

<tr><td>&nbsp; </td></tr>


<tr><td style="color:#09f; font-size:25px;  font-family:Verdana, Geneva, sans-serif" > Doctors Assignment<hr width="140%"></td></tr>


<tr><td> <input type="email" name="email" required  placeholder=" ENTER YOUR email" style="height:30px" /></td></tr>

<tr><td> <input type="password" name="password" required  placeholder=" ENTER YOUR password" style="height:30px" /></td></tr>

<tr><td> <input type="text" name="city" required  placeholder=" ENTER YOUR CITY" style="height:30px" /></td></tr>

<tr><td> <input type="text" name="hospital" required  placeholder="YOUR HOSPITAL FOR ASSIGNMENT" style="height:30px" size="30px" /></td></tr>
<tr><td>Select assignment date</td></tr>

<tr><td ><input type="date" name="assgndate" placeholder="select your assignment date" style="height:30px" required size="21"></td></tr>
<tr><td><textarea name="disease" placeholder="Add your full information"></textarea>
</td></tr>


<tr>
<td> <input type="submit" name="done" value="DONE">             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="RESET"></td>
</tr>

<tr>
<td colspan="2" style="color:#A0A0A4; font-size:18px">By clicking on submit will be agreed
by the terms<br>and conditions of company!!!</td>
</tr>

</table></form></body></html>