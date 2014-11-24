<?php
session_start();
error_reporting('ERROR');
$name=$_REQUEST['name'];
mysql_connect("localhost","root","");
mysql_select_db("medicare");
$_SESSION['doctemail']=$name;
if($name!="")
{
$sql="select * from doctor where emailid like '$name'";
$ms=mysql_query($sql);
while($res=mysql_fetch_array($ms))
{
if($res[1]=="")
{
echo "name not found";		
}
else
{	
echo "<a href='doctprof.php'>$res[1]</a>"."<br>";
}
}
}
?>
