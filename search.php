<?php
session_start();
error_reporting('ERROR');
$name=$_REQUEST['name'];
mysql_connect("localhost","root","");
mysql_select_db("medicare");
if($name!="")
{
$sql="select * from doctor where firstname like '$name'";
$ms=mysql_query($sql);
while($res=mysql_fetch_array($ms))
{
$_SESSION['doctemail']=$res[2];

if($res[1]=="")
{
echo "name not found";		
}
else
{	
echo "<a href='doctprof.php'>$res[0]</a>"."<br>";
}
}
}
?>
