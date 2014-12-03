<?php
error_reporting('ERROR');
session_start();
mysql_connect("localhost","root","");
?>

<?php
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$skypeid=$_REQUEST['skypeid'];
$national_code=$_REQUEST['national_code'];
$mobileno=$_REQUEST['mobileno'];
$sex=$_REQUEST['sex'];
$date=$_REQUEST['date'];
$country=$_REQUEST['country'];
$signup=$_REQUEST['signup'];
$city=$_REQUEST['city'];

$insertdata="insert into patient(firstname,lastname,emailid,password,skypeid,mobileno,gender,dateofbirth,city,country) values('$firstname','$lastname','$email','$password','$skypeid','$mobileno','$sex','$date','$city','$country')";

if($signup)
{
	$_SESSION['user']=$firstname;
	$_SESSION['ketan']=$email;


	
	$selectdb=mysql_select_db("Medicare");
	$createtbl="create table patient(firstname varchar(55),lastname varchar(55),emailid varchar(55),password varchar(55),confirmpassword varchar(55),mobileno BigInt(20),gender varchar(55),dateofbirth varchar(55), city varchar(55),country varchar(55))";
		
	mysql_select_db("medicare");
	$qr1=mysql_query($createtbl);

	if(!mysql_query($insertdata))
{
die("data not inserted".mysql_error());		
}
else
{
	echo "successfully registered";
	header("location:patient.php");
}
}
?>
<?php
if($signup)
{
	mkdir("Medicare");
	mkdir("Medicare/$email");
	mkdir("Mediacre/$email/userinfo");
	mkdir("Mediacre/$email/userinfo/profile_pic");
	mkdir("Medicare/$email/userinfo/theme");
	
	
	}





?>
<html>
<head>
<title>
signup</title></head>
<body>
<form method="post" >
<table align="center" border="0" height="450px">

<tr><td>&nbsp; </td></tr>

<tr><td style="color:#09f; font-size:25px;  font-family:Verdana, Geneva, sans-serif" > Sign Up<hr width="140%"></td></tr>

<tr><td> <input type="text" name="firstname" required  placeholder=" First Name" style="height:30px" /></td>
<td > <input type="text" name="lastname" placeholder=" Last Name" style="height:30px" size="21"></td></tr>

<tr><td colspan="2"><input type="Email" name="email" size="47" placeholder=" Your Email (someone@example.com)" required style="height:30px"></td></tr>

<tr><td colspan="2"><input type="password" name="password" placeholder=" Password" size="47" required style="height:30px"></td></tr>

<tr><td colspan="2"><input type="text" name="skypeid" placeholder="Skype Id" size="47"  style="height:30px"></td></tr>
<tr><td colspan="2">Don't have a skype Account? <a href="http://www.skype.com">Sign Up here</a></td></tr>


<tr><td><select name="national_code"><option value="India +91">India +91</option><option value="India +91">India +91</option><option value="India +91">India +91</option><option value="India +91">India +91</option></select></td><td><input type="text" name="mobileno" placeholder =" Mobile No" size="17" maxlength="10" pattern="{10}[0-9]" style="height:30px"></td></tr>

<tr><td style="height:30px"> <input type="radio" name="sex"  value="male" required >Male</td><td> <input type="radio" name="sex" value="female" required>Female</td></tr>

<tr><td> Date Of Birth :-</td><td ><input type="date" name="date" required></td></tr>

<tr><td> city </td><td ><input type="text" name="city" required></td></tr>

<tr>
<td style="height:33px">Country:</td><td style="height:30px"><select name="country" required><option value="india">India</option><option value="America">America</option><option value="England">England</option></select></td>
</tr>

<tr>
<td> <input type="submit" name="signup" value="SignUp"></td><td><input type="reset" name="reset" value="reset"></td>
</tr>

<tr>
<td colspan="2" style="color:#A0A0A4; font-size:18px">By clicking on submit will be agreed
by the terms<br>and conditions of company!!!</td>
</tr>

</table></form></body></html>