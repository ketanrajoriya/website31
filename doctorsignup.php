<?php
session_start();
error_reporting('ERROR');
$_SESSION['username']=$firstname;
mysql_connect("localhost","root","");
?>

<?php
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$skypeid=$_REQUEST['skype_id'];
$num =$_REQUEST['num'];
$speciality =$_REQUEST['speciality'];
$national_code=$_REQUEST['national_code'];
$mobileno=$_REQUEST['mobileno'];
$sex=$_REQUEST['sex'];
$addinfo=$_REQUEST['addinfo'];
$date=$_REQUEST['date'];
$country=$_REQUEST['country'];
$signup=$_REQUEST['signup'];
$edu=$_REQUEST['eduinfo'];

$city=$_REQUEST['city'];
$number_of_slots=$_REQUEST['slot'];
for($i=1;$i<=$number_of_slots;$i++)
{
	$x="slot_{$i}";
	$slot=$_REQUEST[$x];
	
	


$insertdata="insert into doctor values('$firstname','$lastname','$email','$num','$password','$skypeid','$speciality','$addinfo','$edu','$mobileno','$sex','$date','$city','$country','$slot','null')";

if($signup)
{
$_SESSION['usernam']=$firstname;
$_SESSION['user']=$email;
	
$selectdb=mysql_select_db("Medicare");
$createtbl="create table doctor(firstname varchar(55),lastname varchar(55),emailid varchar(55),number BigInt(20),password varchar(55),confirmpassword varchar(55),speciality varchar(55),addinfo varchar(155),mobileno BigInt(20),gender varchar(55),dateofbirth varchar(55), country varchar(55))";
		
	mysql_select_db("medicare");
	

	if(!mysql_query($insertdata))
{
die("data not inserted".mysql_error());		
}
else
{
	
	header("location:doct.php");
}
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
<form method="post">
<table align="center" border="0" height="450px">

<tr><td>&nbsp; </td></tr>

<tr><td style="color:#fffff; font-size:25px;  font-family:Verdana, Geneva, sans-serif" > Sign Up<hr width="140%"></td></tr>

<tr><td> <input type="text" name="firstname" required  placeholder=" First Name" style="height:30px" /></td>
<td > <input type="text" name="lastname" placeholder=" Last Name" style="height:30px" size="21"></td></tr>

<tr><td colspan="2"><input type="Email" name="email" size="47" placeholder=" Your Email (someone@example.com)" required style="height:30px"></td></tr>

<tr><td colspan="2"><input type="text" name="num" size="47" placeholder=" number" required style="height:30px"></td></tr>

<tr><td colspan="2"><input type="password" name="password" placeholder=" Password" size="47" required style="height:30px"></td></tr>

<tr><td colspan="2"><input type="text" name="skype_id" placeholder="Enter The Skype Id" size="47" style="height:30px"></td></tr>
    <tr><td colspan="2">Don't have a skype Account? <a href="http://www.skype.com">Sign Up here</a></td></tr>

<tr><td>Select your specialty</td><td><select name="speciality"><option value="cardiologist">cardiologist</option>
    <option value="orthopadic">orthopadic</option>
    <option value="psychiatrist">psychiatrist</option>
    </select></td></tr>
    
    <tr><td colspan="2">Enter The Number of Free Slots<input id="slot" type="number"><button id="enter_slot" onclick="box()">Enter Time</button><script>function box(){
                        var num = document.getElementById("slot").value;
                        document.getElementById("input_slot").innerHTML = num;
                          text="";
                         for (var i = 1; i <= num; i++) {
	                          text += '<input type="text" id="slot_'+'"'+i+'/>'+'&nbsp';
                         }
                     document.getElementById("input_slot").innerHTML = text;
    
}; </script>
        <br>
        <p id="input_slot"> </p></td></tr>
<tr><td>Add your hospitals detail</td><td><textarea name="addinfo"></textarea>
</td></tr>

<tr><td>Add your Educational detail</td><td><textarea name="eduinfo"></textarea>
</td></tr><tr><td><select name="national_code"><option value="India +91">India +91</option><option value="India +91">India +91</option><option value="India +91">India +91</option><option value="India +91">India +91</option></select></td><td><input type="text" name="mobileno" placeholder =" Mobile No" size="17" maxlength="10" pattern="{10}[0-9]" style="height:30px"></td></tr>

<tr><td style="height:30px ">
 <input type="radio" name="sex"  value="male" required >Male</td>
<td> 
<input type="radio" name="sex" value="male" required>Female</td></tr>

<tr><td> Date Of Birth :-</td><td ><input type="date" name="date" required></td></tr>
<tr><td> city</td><td ><input type="text" name="city" required></td></tr>

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