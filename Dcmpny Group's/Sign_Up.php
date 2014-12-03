<?php
session_start();
session_unset($_REQUEST['uid']);
?>

<?php
error_reporting('ERROR');
$Month_Array=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$City_Array=array("Gwalior","Indore","Bhopal","Jabalpur","Katni");
?>
<html><head><title>Sign Up -Dcmpny Group's</title>
</head>

<body>

<table align="center" border="0" width="400px" height="400px">
<tr><td ><form name="Sign_Up" method="post" enctype="multipart/form-data">    
<h2><font style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" color="<?php echo "#".$mButton_Color;?>"> Sign Up 
<a href="Index.php"><input type="button" value="Log in to existing account" name="ReLogIn" style="background-color:<?php echo "#".$mButton_Color;?>; color:#FFFFFF; font-size:12px; font-weight:600"/></a>
</font></h2><hr />

<tr><td><font color="#FF0000"><?php echo "$Error_Sign_Up"; ?></font></td></tr>

<tr><td>
<input type="text" name="First_Name" required placeholder=" First Name" size="18" pattern="[A-Z a-z]+" style="height:22px" />
<input type="text" name="Last_Name" required placeholder=" Last Name" size="18" pattern="[A-Z a-z]+" style="height:22px"/>
</td></tr>

<tr><td>
<input type="text" name="User_Name" required placeholder=" User Name" size="43" style="height:22px" /></td></tr>

<tr><td>
<input type="Email" name="Email" required placeholder=" Your Email (someone@example.com)" size="43" style="height:22px" /></td></tr>

<tr><td><input type="Password" name="Password" required placeholder=" New Password" size="43" style="height:22px" /></td></tr>

<tr><td>
<select name="National_Code">
<option value="+91">India +91</option>
</select>
<input type="text" name="Mobile_No" required placeholder=" Your Mobile Number"  pattern="[0-9]{10}" size="28" maxlength="10" style="height:22px" /></td></tr>

<tr><td>
Birthday :<br />
<select name="Year"><option value="-1">Year:</option>
<?php
for($i=2013-13; $i>=1900; $i--)
{
	echo "<option value='$i'>$i</option>";
	}
?>
</select>

<select name="Month" ><option value="-1" >Month:</option>
<?php
for($i=0; $i<=count($Month_Array)-1; $i++)
{
	echo "<option value='$Month_Array[$i]'>$Month_Array[$i]</option>";
	}
?>
</select>

<select name="Date"><option value="-1">Date:</option>
<?php
for($i=1; $i<=31; $i++)
{
	echo "<option value='$i'>$i</option>";
	}
?>
</select></td></tr>

<tr><td>
<input type="radio" name="Sex" value="Female" required />Female<input type="radio" name="Sex" value="Male" required />Male</td></tr>

<tr><td>
City :
<select name="City"><option value="-1">-Select City-</option>
<?php
for($i=0; $i<=count($City_Array)-1; $i++)
{
	echo "<option value='$City_Array[$i]'>$City_Array[$i]</option>";
	}
?>
</select></td></tr>

<tr>
<td>Profile Photo : <input type="file" name="Profile_Pic" required style="height:22px" /></td>
</tr>

<tr>
<td>Cover Pic : <input type="file" name="Cover_Pic" required style="height:22px" /></td>
</tr>

<tr><td>Address :<br /> 
<textarea name="Address" rows="3" cols="33"  required="required" placeholder=" Permanent Address" ></textarea></td></tr>

<tr><td width="400"><font color="#666666">
By clicking Sign Up, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</font>
</td></tr>

<tr><td>
<input type="submit" style="background-color:<?php echo "#".$mButton_Color;?>; color:#FFF; font-size:14px;font-weight:600" name="Sign_Up" value="Sign Up" /> 
<input type="reset" style="background-color:<?php echo "#".$mButton_Color;?>; color:#FFF; font-size:14px;font-weight:600" />
</td></tr>

</form>
</td></tr>
</table>

</body>
</html>