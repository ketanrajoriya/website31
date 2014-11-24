<?php
session_start();
$uname=$_SESSION['uname'];
$od=opendir("addpic/$uname");
while($res=readdir($od))
{
if($res!="." and $res!="..")
{
echo "<img src ='addpic/$uname/$res' height='200' width='200' style='border-style:outset; border-color:#00F; border-width:5px;'>";
}
}
?>
<body>
<center><a href="home.php" style="font-size:24px; font-style:italic;">Back</a></center></body>